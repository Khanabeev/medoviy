<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index() {
        $orders = DB::table('orders')
            ->where('status','!=',Order::STATUS_DELETED)
            ->orderBy('id','desc')
            ->paginate(15);
        return view('admin.orders.list',compact('orders'));
    }


    public function show($id)
    {
        $order = Order::find($id);
        $total = 0;
        foreach (unserialize($order['order']) as $item) {
            $total += $item['total'];
        }

        return view('admin.orders.show',['order'=> $order,'total'=>$total]);
    }

    public function changeStatus($id,$status) {
        try{
            $order = Order::find($id);
            $order->status = $status;
            $order->save();
        } catch (\Exception $e) {
            Log::error($e->getMessage()." | ".$e->getFile());
        }
        return redirect()->back();
    }

    public function saveComment(Request $request, $id) {
        try {
            $order = Order::findOrFail($id);
            $order->comment = $request->comment;
            $order->save();
        } catch (\Exception $e) {
            Log::error($e->getMessage()." | ".$e->getFile());
            return abort(500);
        };
        return redirect()->route('admin');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
