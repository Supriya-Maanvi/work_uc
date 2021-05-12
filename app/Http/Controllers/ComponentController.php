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
    public function component_modals(Request $req){
        return view("work.component_modals");
    }
    public function component_navs_tabs(Request $req){
        return view("work.component_navs_tabs");
    }
    public function component_navbar(Request $req){
        return view("work.component_navbar");
    }
    public function component_paginations(Request $req){
        return view("work.component_paginations");
    }
    public function component_popovers_tooltips(Request $req){
        return view("work.component_popovers_tooltips");
    }
    public function component_progress_bars(Request $req){
        return view("work.component_progress_bars");
    }
    public function component_spinners(Request $req){
        return view("work.component_spinners");
    }
    public function component_notifications(Request $req){
        return view("work.component_notifications");
    }
    public function component_avtars_chips(Request $req){
        return view("work.component_avtars_chips");
    }
}
