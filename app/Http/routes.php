<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

//Route::get('/', function () {
//    return view('welcome');
//}

Route::get('/blog', "myController@blog");
Route::get('/blogSingle', "myController@blogSingle");

Route::get('/checkOut', "myController@checkOut");
Route::get('/contactUs', "myController@contactUs");
Route::get("/", "myController@index");
Route::get('/logIn', "myController@logIn");
Route::get('/productDetails', "myController@productDetails");
Route::get('/shop', "myController@shop");

Route::get('/cart', "myController@cart");
Route::post("/cart", "myController@cart");
Route::get("/clear_cart","myController@clear_cart");
//Route::post("/cart/add", "myController@cart_add");

//Route::get('/test/write2', function () {
//    $product = new \App\Category();
////    $product->name = "test";
////    $product->title = "";
////    $product->description = "";
////    $product->price = "";
////    $product->category_id = "";
////    $product->brand_id = "";
////    $product->created_at_ip = "";
////    $product->updated_at_ip = "";
////    $product->save();
//
//    $product->create(["name" => "batch-asign1"]);
//});
//
//Route::get('/test/write', function () {
//    $product = new \App\Product();
////    $product->name = "test";
////    $product->title = "";
////    $product->description = "";
////    $product->price = "";
////    $product->category_id = "";
////    $product->brand_id = "";
////    $product->created_at_ip = "";
////    $product->updated_at_ip = "";
////    $product->save();
//
//    $product->create(["name" => "batch-asign1", "title" => "batch-title1"]);
//});
//
//Route::get('/test/read', function () {
//    $product = new \App\Product();
//
//    $product_datas = $product->all(["id", "name"]);
//
//    foreach ($product_datas as $product_data) {
//        echo "$product_data->id, $product_data->name, $product_data->title <br>";
//    }
//});
//
//Route::get('/test/update/{id}', function ($id) {
//    $product = \App\Product::find($id);
//    $product->name = "更新測試";
//    $product->save();
//
//    return redirect("/test/read");
//});
//
//Route::get('/test/delete/{id}', function ($id) {
//    $product = \App\Product::find($id);
//    $product->delete();
//
//    return redirect("/test/read");
//});


//Route::get('/products/category', "myController@index");
//
//Route::get('/products/brands', "myController@index");
//
//Route::get('/products/details/{id}', "myController@index");
//
//Route::get('/blog', "myController@index");
//
//Route::get('/blog/post/{id}', "myController@index");
//
//Route::get('/search/{key-word}', "myController@index");
//
//Route::get('/cart', "myController@index");
//
//Route::get('/checkout', "myController@index");

//Route::get("/show/{name}","myResourceController@show");
