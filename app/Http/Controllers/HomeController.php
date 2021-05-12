<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){
        return view("work.index");
    }
    public function index2(Request $req){
        return view("work.index2");
    }
    public function app_emailbox(Request $req){
        return view("work.app_emailbox");
    }
    public function app_chat_box(Request $req){
        return view("work.app_chat_box");
    }
    public function app_file_manager(Request $req){
        return view("work.app_file_manager");
    }
    public function app_contact_list(Request $req){
        return view("work.app_contact_list");
    }
    public function app_to_do(Request $req){
        return view("work.app_to_do");
    }
    public function app_invoice(Request $req){
        return view("work.app_invoice");
    }
    public function app_fullcalender(Request $req){
        return view("work.app_fullcalender");
    }
    public function app_emailbox(Request $req){
        return view("work.app_emailbox");
    }
    
}
