<?php

// use Illuminate\Support\Facades\Route;



Route::group(['namespace'=>'Khalfanamri\Contact\Http\Controllers'],function(){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});