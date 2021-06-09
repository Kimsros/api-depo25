<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/backend','backend\BackendController@index');
Route::get('/backend/{any}/{id?}','backend\BackendController@index');
Route::get('/','frontend\FrontendController@index');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
