<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EcomController;
use App\Http\Controllers\ComponentController;
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
Route::get("/component_media_object",[ComponentController::class,"component_media_object"])->name('ccomponent_media_object');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
