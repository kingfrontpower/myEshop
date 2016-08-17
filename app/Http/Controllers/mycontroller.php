<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class mycontroller extends Controller {

    var $products;
    var $categories;
    var $brands;

    public function __construct() {
        $this->products = \App\Product::all(["id", "name", "price"]);
        $this->categories = \App\Category::all(["name"]);
        $this->brands = \App\Brand::all(["name"]);
    }

    public function blog() {
//        return "部落格";
        return view("blog", ["title" => "Blog"]);
    }

    public function blogSingle() {
//        return "部落格-單頁";
        return view("blogSingle", ["title" => "Blog-Sigle"]);
    }

    public function contactUs() {
//        return "聯絡我們";
        return view("contactUs", ["title" => "Contact-Us"]);
    }

    public function cart() {
//        return "購物車";
        return view("cart", ["title" => "Cart"]);
    }

    public function checkOut() {
//        return "聯絡我們";
        return view("checkOut", ["title" => "Check-Out"]);
    }

    public function index() {
//        $product = new \App\Product();
//        $product->name = "testhello3~~";
//        $product->save();
//        return view("home", ["title" => "Home"]);
        return view("home", ["title" => "Home", "products" => $this->products, "categories" => $this->categories, "brands" => $this->brands]);
    }

    public function logIn() {
//        return "登入";
        return view("logIn", ["title" => "Log-In"]);
    }

    public function productDetails() {
//        return "產品明細";
        return view("productDetails", ["title" => "Product-Details"]);
    }

    public function shop() {
//        return "商品";
        return view("shop", ["title" => "Shop"]);
    }

}
