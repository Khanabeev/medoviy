<?php

namespace App\Http\Controllers;

use App\Navigation;
use App\Product;
use http\Env\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
       $products = Product::all();
        return view('admin.products.list',compact("products"));
    }

    public function getAll() {
        $products = Product::all();
        return response()->json(['products'=>$products]);
    }

    public function changeAvailability(Request $request) {
        try{
            $product = Product::find($request->id);
            $product->is_available = !$product->is_available;
            $product->save();
        } catch (\Exception $e) {
            Log::error($e->getMessage()." | ".$e->getFile());
            return response()->json(['status' => 'error']);
        }
            return response()->json(['status' => 'success']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.products.add_product');
    }


    private function validateProduct($request) {
        $rules = [
            'name' => ['required'],
            'type' => ['required',Rule::in(['honey','product'])],
            'image'=> ['image','dimensions:min_width=1919,min_height=1079'],
            'title'=> ['required_if:is_for_store,null'],
            'url' => [Rule::requiredIf(!isset($request->is_for_store))],

        ];
        $messages = [
            'image.dimensions' => 'Неправильный размер изображения, нужен 1920x1080 пикселей',
            'type.in' => 'Выберите тип продукта',
            'type.required' => 'Нужно выбрать тип продукта',
            'name.required' => 'Укажите наименование продукта',
            'title.required' => 'Укажите заголовок продукта. Это важно для Поисковых Систем',
            'url.required' => 'Укажите URL по которому можно обращаться к этой странице. Пример: honey.html, honey',
            'image_position.required' => 'Поле "позиция изображения" должно включать X% Y%, например: 50% 50%',
        ];

        return Validator::make($request->all(), $rules, $messages);
    }

    public function store(Request $request)
    {
        $validator = $this->validateProduct($request);
        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try{
            if($request->is_for_store) {

                $data = [
                    'name' => $request->name,
                    'type' => $request->type,
                    'image'=> '',
                    'title' => '',
                ];
            } else {
                $path = $request->file('image')->store('images','public');
                $data = [
                    'name' => $request->name,
                    'type' => $request->type,
                    'image'=> $path,
                    'url' => $request['url'],
                    'title' => $request['title'],
                    'description' => $request['description'] ?? null,
                    'keywords' => $request['keywords'] ?? null,
                    'proposal' => $request['proposal'] ?? null,
                ];
            }

            Product::create($data);
        } catch (\Exception $e) {
            Log::error($e->getMessage()." | ".$e->getFile());
            return abort(500);
        }
        return redirect()->route('product.index');
    }


    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',compact('product'));
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function update(Request $request, Product $product)
    {
        $this->validateProduct($request);

        if($request->is_for_store) {
            $data = [
                'name' => $request->name,
                'type' => $request->type,
            ];
        } else {
            $file = $request->file('image');
            if ($file) {
                Storage::disk('public')->delete($product->image);
                $path = $file->store('images', 'public');
                $product->image = $path;
            }

            $data = [
                'name' => $request['name'],
                'type' => $request['type'],
                'url' => $request['url'],
                'title' => $request['title'],
                'content' => htmlspecialchars($request['content']) ?? null,
                'description' => $request['description'] ?? null,
                'keywords' => $request['keywords'] ?? null,
                'proposal' => $request['proposal'] ?? null,
                'image_position' => $request['image_position'],
            ];
        }
        $product->fill($data);
        if(!$product->save()){
            Log::error('Ошибка обновления продукта ProductController.php');
            return abort(500);
        }

        return redirect()->back();
    }

    /**
     * @param Product $product
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        try{
            $navigation = Navigation::where('product_id',$product->id)->first();
            if($navigation) {
                $navigation->delete();
            }
            $product->delete();
            Storage::disk('public')->delete($product->image);

        } catch (\Exception $e) {
            Log::error($e->getMessage()." ".$e->getFile());
            return response()->json('error');
        }
        return response()->json([
            'status' => 'success',
            'message'=> 'Продукт удален'
        ]);
    }

    public function editPrice ($id) {
        $product = Product::findOrFail($id);
        return view('admin.products.edit_prices',
            ['prices'=>$product->prices,'name'=>$product->name, 'product_id'=> $product->id]);
    }

    public function getPrices($id) {
        $product = Product::findOrFail($id);
        return response()->json(['prices'=>$product->prices,'name'=>$product->name]);
    }
}
