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
Route::get('/cart', "myController@cart");
Route::get('/checkOut', "myController@checkOut");
Route::get('/contactUs', "myController@contactUs");
Route::get("/","myController@index");
Route::get('/login', "myController@login");
Route::get('/productDetails', "myController@productDetails");
Route::get('/shop', "myController@shop");

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
