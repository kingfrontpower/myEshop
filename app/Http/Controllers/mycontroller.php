<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class mycontroller extends Controller {

    public function blog() {
//        return "部落格";
        return view("blog", ["title" => "Blog"]);
    }
    
    public function blogSigle() {
//        return "部落格-單頁";
        return view("blogSigle", ["title" => "Blog-Sigle"]);
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
        return view("home", ["title" => "Home"]);
    }

    public function logIn() {
//        return "登入";
        return view("logIn", ["title" => "log-In"]);
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
