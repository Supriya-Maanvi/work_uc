<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcomController extends Controller
{
    public function ecommerce_products(Request $req){
        return view("work.ecommerce_products");
    }
    public function ecommerce_products_details(Request $req){
        return view("work.ecommerce_products_details");
    }
    public function ecommerce_add_new_products(Request $req){
        return view("work.ecommerce_add_new_products");
    }
    public function ecommerce_orders(Request $req){
        return view("work.ecommerce_orders");
    }
}
