<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormTableController extends Controller
{
    //
    public function form_elements(Request $req){
        return view("work.form_elements");
    }
    public function form_input_group(Request $req){
        return view("work.form_input_group");
    }
    public function form_layouts(Request $req){
        return view("work.form_layouts");
    }
    public function form_validations(Request $req){
        return view("work.form_validations");
    }
    public function form_wizard(Request $req){
        return view("work.form_wizard");
    }
    public function form_text_editor(Request $req){
        return view("work.form_text_editor");
    }
    public function form_file_upload(Request $req){
        return view("work.form_file_upload");
    }
    public function form_date_time_pickes(Request $req){
        return view("work.form_date_time_pickes");
    }
    public function form_select2(Request $req){
        return view("work.form_select2");
    }
    public function table_basic_table(Request $req){
        return view("work.table_basic_table");
    }
    public function table_datatable(Request $req){
        return view("work.table_datatable");
    }
}
