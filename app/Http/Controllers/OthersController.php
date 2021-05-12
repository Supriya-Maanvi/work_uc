<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OthersController extends Controller
{
    public function charts_apex_chart(Request $req){
        return view("work.charts_apex_chart");
    }
}
