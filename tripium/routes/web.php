<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});
//Route::post('/contact-form/store', ContactFormController::class);
Route::post('/contact-form/store', 'App\Http\Controllers\ContactFormController@store')->name('store');
Route::get('/parse/site', 'App\Http\Controllers\ParseController@site')->name('site');
