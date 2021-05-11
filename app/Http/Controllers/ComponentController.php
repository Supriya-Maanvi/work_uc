<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function component_alerts(Request $req){
        return view("work.component_alerts");
    }
    public function component_accordions(Request $req){
        return view("work.component_accordions");
    }
    public function component_badges(Request $req){
        return view("work.component_badges");
    }
    public function component_buttons(Request $req){
        return view("work.component_buttons");
    }
    public function component_cards(Request $req){
        return view("work.component_cards");
    }
    public function component_carousels(Request $req){
        return view("work.component_carousels");
    }
    public function component_list_groups(Request $req){
        return view("work.component_list_groups");
    }
    public function component_media_object(Request $req){
        return view("work.component_media_object");
    }
}
