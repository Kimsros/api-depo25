<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/admin','backend\BackendController@index');
Route::get('/admin/{any}/{id?}','backend\BackendController@index');
Route::get('/','frontend\FrontendController@index');
Route::get('/{any}/{title?}/{id?}', 'frontend\FrontendController@index');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
