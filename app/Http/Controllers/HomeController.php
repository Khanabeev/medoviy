<?php

namespace App\Http\Controllers;

use App\Navigation;
use App\Order;
use App\Price;
use App\Product;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

    }


    public function med()
    {
        return view('med');
    }

    public function agreement()
    {
        return view('agreement');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function dokumenti()
    {
        return view('dokumenti');
    }

    public function dostavka()
    {
        return view('dostavka');
    }

    public function kontakti()
    {
        return view('kontakti');
    }

    public function narodnieResepti()
    {
        return view('narodnie-resepti');
    }

    public function nashiDostijeniy()
    {
        return view('nashi-dostijeniy');
    }

    public function praiys()
    {
        return view('praiys');
    }

// STORE
    public function store()
    {
        return view('store');
    }

    public function fetchAllStoreItems() {
//        $products = DB::table('products')
//            ->join('store','store.product_id','=','products.id')
//            ->where('products.is_available',true)
//            ->orderBy('store.order')
//            ->get();

//        dd($products);
            $products = Product::with('store')
                ->where('is_available',true)
                ->get()
                ->sortBy('store.order');

        $data = [];
        foreach ($products as $product) {
            if(!$product->store) {
                continue;
            }
            $data[] = [
                'id' => $product->id,
                'name'=> $product->name,
                'image' => $product->store->image,
                'prices'=> $product->prices,
                'proposal'=> $product->proposal,
                'order' => $product->store->order,
                'url' => $product->url ?? 'catalog.html',
            ];
        }
        return response()->json($data);
    }

    public function showOrderPage(Request $request) {
        return view('order');
    }

    public function getOrder(Request $request) {
        $prices_ids = $request->get('ids');
        $data = [];
        $prices_ids = array_count_values($prices_ids);
        $total = 0;
        foreach ($prices_ids as $price_id => $qnt) {
            $price = Price::findOrFail($price_id);
            $product = Product::findOrFail($price->product_id);
            $data[] = [
                "price_id" => $price_id,
                "product_name" => $product->name,
                "price" => $price->price,
                "quantity" => $price->quantity,
                "measure" => $price->measure,
                "qwt" => $qnt,
                "total" => $qnt * $price->price
            ];
            $total += $qnt * $price->price;
        }
        return response()->json(['data'=>$data,'total'=>$total]);
    }

    public function orderSuccess(Request $request) {
        $rules = [
            'name' => 'required|string',
            'phone' => 'required',
            'city' => 'required|string',
            'checked' => 'required',
            'order' => 'required'
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()) {
            Log::error('Ошибка валидации при отправки заказа');
            return response()->json(['status'=>'error']);
        }
        try{
            $order = Order::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'city' => $request->city,
                'order' => serialize($request->order),
                'status'=> Order::STATUS_IS_NEW,
            ]);

            Mail::send('emails.order',[
                'name'=>$request->name,
                'phone'=>$request->phone,
                'order' =>$request->order,
                'city' =>$request->city
            ],function ($m) {
                $m->from('admin@medoviyobereg.ru','Заказ с сайта');
                $m->to('medoviyobereg@mail.ru')->subject('Заказ с сайта medoviyobereg.ru');
            });
        } catch (\Exception $e) {
            Log::error($e->getMessage()." | ".$e->getFile());
            return response()->json(['status'=>'error']);
        }
        return response()->json(['status'=>'success']);
    }

    public function getProductPage($url) {
        $products = Product::where('is_available',true)->get();
        foreach ($products as $product) {
            if($product['url'] == $url) {
                $product->content = htmlspecialchars_decode($product->content);
                $product->header = htmlspecialchars_decode($product->header);
                return view('general',['product' =>$product]);
            }
        }
        return abort(404);
    }

}

