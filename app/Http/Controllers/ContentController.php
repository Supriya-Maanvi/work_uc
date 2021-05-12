<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function content_grid_system(Request $req){
        return view("work.content_grid_system");
    }
    public function content_typography(Request $req){
        return view("work.content_typography");
    }
    public function content_text_utilities(Request $req){
        return view("work.content_text_utilities");
    }
}
