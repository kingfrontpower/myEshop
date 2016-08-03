<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class myController extends Controller
{
    public function index()
    {
        return "首頁";
    }

    public function contact_us()
    {
        return "聯絡我們";
    }
    
    public function login()
    {
        return "登入";
    }
    public function products()
    {
        return "商品頁";
    }
    public function category()
    {
        return "目錄";
    }
    public function brands()
    {
        return "商品";
    }
    public function products_details($id)
    {
        return "$id";
    }
    public function blog()
    {
        return "部落格";
    }
    public function blog_post($id)
    {
        return "部落格刊登";
    }
    public function search($key_word)
    {
        return "搜尋";
    }
    public function cart()
    {
        return "購物車";
    }
    public function checkout()
    {
        return "結帳";
    }
    
}
