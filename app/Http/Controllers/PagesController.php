<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
class PagesController extends Controller
{
    //
    public function authentication_signin(Request $req){
        if(User::Where('user_id',Auth::id())->exists()){
            return redirect()->route('work.index');
        }
        return view("work.authentication_signin");
    }
    public function authentication_signup(Request $req){
        return view("work.authentication_signup");
    }
    public function authentication_signin_with_header_footer(Request $req){
        return view("work.authentication_signin_with_header_footer");
    }
    public function authentication_signup_with_header_footer(Request $req){
        return view("work.authentication_signup_with_header_footer");
    }
    public function authentication_forgot_password(Request $req){
        return view("work.authentication_forgot_password");
    }
    public function authentication_reset_password(Request $req){
        return view("work.authentication_reset_password");
    }
    public function authentication_lock_screen(Request $req){
        return view("work.authentication_lock_screen");
    }
    public function user_profile(Request $req){
        return view("work.user_profile");
    }
    public function timeline(Request $req){
        return view("work.timeline");
    }
    public function errors_404_error(Request $req){
        return view("work.errors_404_error");
    }
    public function errors_500_error(Request $req){
        return view("work.errors_500_error");
    }
    public function errors_coming_soon(Request $req){
        return view("work.errors_coming_soon");
    }
    public function error_blank_page(Request $req){
        return view("work.error_blank_page");
    }
    public function faq(Request $req){
        return view("work.faq");
    }
    public function pricing_table(Request $req){
        return view("work.pricing_table");
    }
}
