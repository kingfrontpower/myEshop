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
Route::get("/","myController@index");
Route::get('/product', "myController@product");
Route::get('/contact_us', "myController@contact_us");
Route::get("/show/{name}","myResourceController@show");


//Route::get('/login', "myController@index");
//
//Route::get('/logout', "myController@index");
//

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
