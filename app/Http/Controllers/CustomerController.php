<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Product;
use Auth;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function adminIndex()
    {
        $customer = new User;
        $customers = $customer->all();
        return view('admin.customers.customers',['customers'=>$customers]);
    }   

    public function index()
    {
        $orders = DB::table('orders')->join('products', 'products.id','=', DB::Raw("CAST(orders.line_items->'$.product_id' AS UNSIGNED)"))->select('products.*')->where('orders.user_id',Auth::id())->get()->toArray();

        return view('myaccount.myaccount',['products'=>$orders]); 
    }

}
