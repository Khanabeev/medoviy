<?php

namespace App\Http\Controllers;

use App\Navigation;
use App\Product;
use App\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminStoreController extends Controller
{
    public function index()
    {
        return view('admin.store.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function navigation()
    {
        try{
            $navs = DB::table('navigation')->orderBy('order')->get();
            $data = [];
            foreach ($navs as $nav) {
                $product = Product::find($nav->product_id);
                $data[] = [
                    'id'   => $nav->id,
                    'name' => $nav->name,
                    'order'=> $nav->order,
                    'url'  => $product->url,
                    'type' => $product->type
                ];
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage()." | ".$e->getFile());
            return abort(500);
        }
        return view('admin.navigation.list',['data' =>$data, 'products' =>Product::all(['id','name'])]);
    }

    public function navigationPost(Request $request) {
        $validator = Validator::make(
            $request->all(),
            ['name' => 'required','product_id'=>'required']);
        if($validator->fails()) {
            Log::error('Ошибка при сохранении пункта меню в админке / AdminStoreController.php');
            return redirect()->back()->withErrors($validator)->withInput();
        };

        Navigation::create($request->all(['name','product_id','order']));
        return redirect()->back()->with(['message'=>'Новый пункт меню добавлен успешно']);
    }

    public function navigationDestroy(Navigation $navigation) {
        try {
            $navigation->delete();
        } catch (\Exception $e) {
            Log::error($e->getMessage(). " | ". $e->getFile());
        }
        return redirect()->back();
    }

    public function store() {
        $products = DB::table('store as s')
            ->join('products as p','s.product_id','=','p.id')
            ->orderBy('s.order')
            ->get(['s.product_id','p.name','p.is_available','s.order']);


        $products_ids = Store::get('product_id')->toArray();
        $alreadyInStore = array_column($products_ids,'product_id');
        $products_list = Product::where('is_available',true)->whereNotIn('id',$alreadyInStore)->get(['id','name']);
        return view('admin.store.list',['products'=>$products,'products_list' => $products_list]);
    }

    public function storeCreate() {
        $products_ids = Store::get('product_id')->toArray();
        $alreadyInStore = array_column($products_ids,'product_id');
        $products = Product::where('is_available',true)->whereNotIn('id',$alreadyInStore)->get(['id','name']);
        return view('admin.store.create',['products'=>$products]);
    }

    public function storeStore(Request $request) {
        $validator = Validator::make($request->all(),[
            'product_id' => ['required','unique:store'],
            'image'=> ['required','image','dimensions:min_width=249,min_height=139'],
        ],[
            'product_id.required' => 'Необходимо выбрать продукт',
            'product_id.unique' => 'Данный продукт уже добавлен в магазин',
            'image.required' => 'Необходимо выбрать изображение',
            'image.dimensions' => 'Неправильный размер изображения, нужен 250x140 пикселей',
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $path = $request->file('image')->store('images/store','public');
            $data = [
                'image'=> $path,
                'product_id' => $request->product_id,
                'order' => $request->order ?? null,
            ];
            DB::table('store')->insert($data);
        } catch (\Exception $e) {
            Log::error($e->getMessage()." | ".$e->getFile());
            return abort(500);
        }
        return redirect()->route('store');
    }

    public function storeShow (Product $product) {
        $data = [
            'product_id' => $product->id,
            'product_name' => $product->name,
            'image' => $product->store->image,
            'order' => $product->store->order,
        ];
        return view('admin.store.show',['data'=>$data]);
    }

    public function storeEdit(Request $request, Product $product) {
        $file = $request->file('image');
        if($file) {
            Storage::disk('public')->delete($product->store->image);
            $path = $file->store('images/store','public');
            $product->store->image = $path;
        }
        $product->store->order = $request->get('order');
        if(!$product->store->save()){
            Log::error('Ошибка обновления продукта в магазине AdminStoreController.php');
            return abort(500);
        }
        return redirect()->back();
    }

    public function storeDestroy(Product $product) {
        Storage::disk('public')->delete($product->store->image);
        $product->store->delete();
        return redirect()->back();
    }
}
