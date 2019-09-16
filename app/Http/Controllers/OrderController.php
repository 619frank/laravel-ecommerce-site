<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function adminIndex()
    {
        $orders = DB::table('orders')->join('products', 'products.id','=', 
            DB::Raw("CAST(orders.line_items->'$.product_id' AS UNSIGNED)"))->join('users','users.id','=','orders.user_id')->select('products.*','users.name as username','users.id as userid')->get()->toArray();

        return view('admin.orders.orders',['products'=>$orders]);
    } 

    public function addtocart($product_id)
    {
        $product = new Product;
        //$product = $product->find(request('product_id'));
        $product = $product->find($product_id);
        return view('checkout.placeorder',['product'=>$product]);
    }

    public function placeOrder()
    {
        $order = new Order;
        $order->create(['user_id'=> Auth::id(),
            'line_items' => json_encode(['product_id' => request('product_id')]),'options'=> null]);

        return redirect()->route('my_account');
    }
}
