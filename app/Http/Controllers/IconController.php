<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconController extends Controller
{
    public function icons_line_icons(Request $req){
        return view("work.icons_line_icons");
    }
    public function icons_boxicons(Request $req){
        return view("work.icons_boxicons");
    }
    public function icons_feather_icons(Request $req){
        return view("work.icons_feather_icons");
    }
}
