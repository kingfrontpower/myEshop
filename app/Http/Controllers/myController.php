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
}
