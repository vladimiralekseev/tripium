<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});
//Route::post('/contact-form/store', ContactFormController::class);
Route::post('/contact-form/store', 'App\Http\Controllers\ContactFormController@store')->name('store');
Route::get('/about-us', 'App\Http\Controllers\AboutUsController@index')->name('about-us');
Route::get('/faq', 'App\Http\Controllers\FaqController@index')->name('faq');
Route::get('/publications', 'App\Http\Controllers\PublicationsController@index')->name('publications');
Route::get('/terms-conditions', 'App\Http\Controllers\TermsConditionsController@index')->name('terms-conditions');
