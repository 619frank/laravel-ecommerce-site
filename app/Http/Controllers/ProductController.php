<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($product_id = null, $category_id = null)
    {
        if($product_id == null && $category_id == null){
            
            return view('products'); 
        }elseif($product_id != null) {

        }elseif($category_id != null) {
            
        }
    }

    public function adminIndex()
    {
        return view('admin.products.products');
    }

    public function getCreateProductForm()
    {
        return view('admin.products.addproduct');
    } 

    public function createProduct()
    {
        //dd(request()->all());
        $product = new Product;
        $image_name = time().'_'.request()->file('image')->getClientOriginalName();
        $product->create([
            'name'=>request('name'),
            'sku'=>request('sku'),
            'quantity'=>request('quantity'),
            'description'=>request('description'),
            'options'=>json_encode(['image'=>$image_name,
            'price'=>request('price')])]);

        $path = request()->file('image')->storeAs(
            'product_images',$image_name 
            );
           
        return redirect()->route('admin_products');
    }

    public function editProduct($product_id)
    {
    
    }
    
    public function deleteProduct($product_id)
    {
        
    }

}
