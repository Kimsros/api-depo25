<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/migration', function () {
//     $data=['pricing','shop','role','invoice_detail','delivery','product','comment','comment_type','invoice','payment','delivery_location','category','unit','product_tag','cart','quote','product_image','product_video','product_variation','product_color','quote_detail','tbl_action','product_video_type','product_variation_condition','brand','table_of_permission','permision','permission_type'];
//     foreach($data as $table){
//         Artisan::call("make:model $table -a");
//     }
// });
