<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsMapsController extends Controller
{
    //
    public function charts_apex_chart(Request $req){
        return view("work.charts_apex_chart");
    }
    public function charts_chartjs(Request $req){
        return view("work.charts_chartjs");
    }
    public function charts_highcharts(Request $req){
        return view("work.charts_highcharts");
    }
    public function map_google_maps(Request $req){
        return view("work.map_google_maps");
    }
    public function map_vector_maps(Request $req){
        return view("work.map_vector_maps");
    }
}
