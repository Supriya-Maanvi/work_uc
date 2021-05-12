<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EcomController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\FormTableController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ChartsMapsController;
use App\Http\Controllers\OthersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/",[HomeController::class,"index"])->name('index');
Route::get("/index2",[HomeController::class,"index2"])->name('index2');
Route::get("/app_emailbox",[HomeController::class,"app_emailbox"])->name('app_emailbox');
Route::get("/app_chat_box",[HomeController::class,"app_chat_box"])->name('app_chat_box');
Route::get("/app_file_manager",[HomeController::class,"app_file_manager"])->name('app_file_manager');
Route::get("/app_contact_list",[HomeController::class,"app_contact_list"])->name('app_contact_list');
Route::get("/app_to_do",[HomeController::class,"app_to_do"])->name('app_to_do');
Route::get("/app_invoice",[HomeController::class,"app_invoice"])->name('app_invoice');
Route::get("/app_fullcalender",[HomeController::class,"app_fullcalender"])->name('app_fullcalender');
Route::get("/app_emailbox",[HomeController::class,"app_emailbox"])->name('app_emailbox');

Route::get("/ecommerce_products",[EcomController::class,"ecommerce_products"])->name('ecommerce_products');
Route::get("/ecommerce_products_details",[EcomController::class,"ecommerce_products_details"])->name('ecommerce_products_details');
Route::get("/ecommerce_add_new_products",[EcomController::class,"ecommerce_add_new_products"])->name('ecommerce_add_new_products');
Route::get("/ecommerce_orders",[EcomController::class,"ecommerce_orders"])->name('ecommerce_orders');

Route::get("/component_alerts",[ComponentController::class,"component_alerts"])->name('component_alerts');
Route::get("/component_accordions",[ComponentController::class,"component_accordions"])->name('component_accordions');
Route::get("/component_badges",[ComponentController::class,"component_badges"])->name('component_badges');
Route::get("/component_buttons",[ComponentController::class,"component_buttons"])->name('component_buttons');
Route::get("/component_cards",[ComponentController::class,"component_cards"])->name('component_cards');
Route::get("/component_carousels",[ComponentController::class,"component_carousels"])->name('component_carousels');
Route::get("/component_list_groups",[ComponentController::class,"component_list_groups"])->name('component_list_groups');
Route::get("/component_media_object",[ComponentController::class,"component_media_object"])->name('component_media_object');
Route::get("/component_modals",[ComponentController::class,"component_modals"])->name('component_modals');
Route::get("/component_navs_tabs",[ComponentController::class,"component_navs_tabs"])->name('component_navs_tabs');
Route::get("/component_navbar",[ComponentController::class,"component_navbar"])->name('component_navbar');
Route::get("/component_paginations",[ComponentController::class,"component_paginations"])->name('component_paginations');
Route::get("/component_popovers_tooltips",[ComponentController::class,"component_popovers_tooltips"])->name('component_popovers_tooltips');
Route::get("/component_progress_bars",[ComponentController::class,"component_progress_bars"])->name('component_progress_bars');
Route::get("/component_spinners",[ComponentController::class,"component_spinners"])->name('component_spinners');
Route::get("/component_notifications",[ComponentController::class,"component_notifications"])->name('component_notifications');
Route::get("/component_avtars_chips",[ComponentController::class,"component_avtars_chips"])->name('component_avtars_chips');

Route::get("/content_grid_system",[ContentController::class,"content_grid_system"])->name('content_grid_system');
Route::get("/content_typography",[ContentController::class,"content_typography"])->name('content_typography');
Route::get("/content_text_utilities",[ContentController::class,"content_text_utilities"])->name('content_text_utilities');

Route::get("/icons_line_icons",[IconController::class,"icons_line_icons"])->name('icons_line_icons');
Route::get("/icons_boxicons",[IconController::class,"icons_boxicons"])->name('icons_boxicons');
Route::get("/icons_feather_icons",[IconController::class,"icons_feather_icons"])->name('icons_feather_icons');

Route::get("/form_elements",[FormTableController::class,"form_elements"])->name('form_elements');
Route::get("/form_input_group",[FormTableController::class,"form_input_group"])->name('form_input_group');
Route::get("/form_layouts",[FormTableController::class,"form_layouts"])->name('form_layouts');
Route::get("/form_validations",[FormTableController::class,"form_validations"])->name('form_validations');
Route::get("/form_wizard",[FormTableController::class,"form_wizard"])->name('form_wizard');
Route::get("/form_text_editor",[FormTableController::class,"form_text_editor"])->name('form_text_editor');
Route::get("/form_file_upload",[FormTableController::class,"form_file_upload"])->name('form_file_upload');
Route::get("/form_date_time_pickes",[FormTableController::class,"form_date_time_pickes"])->name('form_date_time_pickes');
Route::get("/form_select2",[FormTableController::class,"form_select2"])->name('form_select2');
Route::get("/table_basic_table",[FormTableController::class,"table_basic_table"])->name('table_basic_table');
Route::get("/table_datatable",[FormTableController::class,"table_datatable"])->name('table_datatable');

Route::get("/authentication_signin",[PagesController::class,"authentication_signin"])->name('authentication_signin');
Route::get("/authentication_signup",[PagesController::class,"authentication_signup"])->name('authentication_signup');
Route::get("/authentication_signin_with_header_footer",[PagesController::class,"authentication_signin_with_header_footer"])->name('authentication_signin_with_header_footer');
Route::get("/authentication_signup_with_header_footer",[PagesController::class,"authentication_signup_with_header_footer"])->name('authentication_signup_with_header_footer');
Route::get("/authentication_forgot_password",[PagesController::class,"authentication_forgot_password"])->name('authentication_forgot_password');
Route::get("/authentication_reset_password",[PagesController::class,"authentication_reset_password"])->name('authentication_reset_password');
Route::get("/authentication_lock_screen",[PagesController::class,"authentication_lock_screen"])->name('authentication_lock_screen');
Route::get("/user_profile",[PagesController::class,"user_profile"])->name('user_profile');
Route::get("/timeline",[PagesController::class,"timeline"])->name('timeline');
Route::get("/errors_404_error",[PagesController::class,"errors_404_error"])->name('errors_404_error');
Route::get("/errors_500_error",[PagesController::class,"errors_500_error"])->name('errors_500_error');
Route::get("/errors_coming_soon",[PagesController::class,"errors_coming_soon"])->name('errors_coming_soon');
Route::get("/error_blank_page",[PagesController::class,"error_blank_page"])->name('error_blank_page');
Route::get("/faq",[PagesController::class,"faq"])->name('faq');
Route::get("/pricing_table",[PagesController::class,"pricing_table"])->name('pricing_table');

Route::get("/charts_apex_chart",[ChartsMapsController::class,"charts_apex_chart"])->name('charts_apex_chart');
Route::get("/charts_chartjs",[ChartsMapsController::class,"charts_chartjs"])->name('charts_chartjs');
Route::get("/charts_highcharts",[ChartsMapsController::class,"charts_highcharts"])->name('charts_highcharts');
Route::get("/map_google_maps",[ChartsMapsController::class,"map_google_maps"])->name('map_google_maps');
Route::get("/map_vector_maps",[ChartsMapsController::class,"map_vector_maps"])->name('map_vector_maps');

Route::get("/map_vector_maps",[OthersController::class,"map_vector_maps"])->name('map_vector_maps');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
