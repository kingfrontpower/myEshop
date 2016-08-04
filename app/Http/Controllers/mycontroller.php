<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mycontroller extends Controller
{
    
    public function index()
    {
       return view("home");
    }
    public function product()
    {
        //return "aaaa";
        return view("product");
    }
    
        public function contact_us()
    {
//        return "聯絡我們";
        return view("contact_us");
    }

}
