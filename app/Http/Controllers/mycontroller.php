<?php

namespace App\Http\Controllers;

use App\Product;
//use App\Cart;
use App\Brand;
use App\Category;
//use Illuminate\Http\Request;
use App\Http\Requests;
use ShoppingCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Request;
use Illuminate\Support\Facades\Redirect;

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

//    public function cart() {
////        return "購物車";
//        return view("cart", ["title" => "Cart", "description"=>"網頁說明"]);
//    }

    public function cart(Request $request) {
        if (Request::isMethod('post')) {
            $product_id = Request::get('product_id');
            $product = Product::find($product_id);
            Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
        }

        if (Request::get("product_id") && (Request::get("add") == 1)) {
            $items = Cart::Search(function ($cartItem, $rowId) {
                        return $cartItem->id == Request::get("product_id");
                    });
            Cart::update($items->first()->rowId, $items->first()->qty + 1);
        }

        if (Request::get("product_id") && (Request::get("minus") == 1)) {
            $items = Cart::Search(function ($cartItem, $rowId) {
                        return $cartItem->id == Request::get("product_id");
                    });
            Cart::update($items->first()->rowId, $items->first()->qty - 1);
        }
        
         if( Request::get("product_id") && (Request::get("clear") == 1))
        {
            $items = Cart::Search(function ($cartItem, $rowId) { return $cartItem->id == Request::get("product_id");});
            Cart::remove($items->first()->rowId);
        }

        

        $cart = Cart::content();

        return view("cart", ["title" => "Cart", "description" => "網頁說明", "cart" => $cart]);
    }
    
    public function clear_cart() {
            Cart::destroy();

            return Redirect::to("cart");
        }

    public function checkOut() {
//        return "聯絡我們";
        return view("checkOut", ["title" => "Check-Out", "description" => "網頁說明"]);
    }

    public function index() {
//        $product = new \App\Product();
//        $product->name = "testhello3~~";
//        $product->save();
//        return view("home", ["title" => "Home"]);
        return view("home", ["title" => "home", "description" => "網頁說明", "products" => $this->products, "categories" => $this->categories, "brands" => $this->brands]);
    }

    public function logIn() {
//        return "登入";
        return view("logIn", ["title" => "Log-In"]);
    }

    public function productDetails() {
//        return "產品明細";
        return view("productDetails", ["title" => "Product-Details", "description" => "網頁說明"]);
    }

    public function shop() {
//        return "商品";
        return view("shop", ["title" => "Shop", "description" => "網頁說明", "products" => $this->products, "categories" => $this->categories, "brands" => $this->brands]);
    }

//        public function cart_add(Request $request)
//    {
//        $product_id = $request->get('product_id');
//        $product = \App\Product::find($product_id);
//
//        ShoppingCart::add(['id' => $product->id,
//                           'name'=> $product->name,
//                           'qty'=> 1,
//                           'price'=> $product->price]);
//
//        //處理完ADD需求後重新導向回products頁面
//        return redirect('/products');
//        
//        //redirect方法可附加資料，例如要將ShoppingCart內容傳遞過去，可以使用with方法，傳遞過去的參數可以使用{{session('cart')}}取得資料
//        //$cart = ShoppingCart::content();
//        //return redirect('/products')->with('cart', $cart);
//    }
}
