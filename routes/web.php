<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products','ProductController@index');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/products','ProductController@index');

Route::get('/products/{product_id}','ProductController@index');

Route::get('/products/{category_id}','ProductController@index');

Route::get('admin/products/','ProductController@adminIndex')->middleware('is_admin')->name('admin_products');

Route::get('/admin/products/add','ProductController@getCreateProductForm')->middleware('is_admin')->name('get_add_product');

Route::post('/admin/products/add','ProductController@createProduct')->middleware('is_admin')->name('post_add_product');

Route::put('/admin/products/edit/{product_id}','ProductController@editProduct')->middleware('is_admin');

Route::delete('/admin/products/delete/{product_id}','ProductController@deleteProduct')->middleware('is_admin');

Route::get('/admin/customers/','CustomerController@adminIndex')->middleware('is_admin')->name('admin_customers');

Route::get('/admin/orders/','OrderController@adminIndex')->middleware('is_admin')->name('admin_orders');


