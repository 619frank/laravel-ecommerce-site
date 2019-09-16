<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function adminIndex()
    {
        return view('admin.orders.orders');
    } 
}
