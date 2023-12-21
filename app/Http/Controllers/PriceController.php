<?php

namespace App\Http\Controllers;

use App\Price;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PriceController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function store(Request $request)
    {
        try{
            Price::create($request->all());
        } catch (\Exception $e) {
            Log::error($e->getMessage()." | ". $e->getFile());
            return abort(500);
        }
        return redirect()->back();
    }

    /**
     * @param Price $price
     * @return \Illuminate\Http\RedirectResponse|void
     * @throws \Exception
     */
    public function destroy(Price $price)
    {
        if($price->delete()){
            return redirect()->back();
        }
        return abort(500);
    }
}
