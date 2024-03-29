<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/api/v1');
});

Route::group(['prefix' => 'v1'], function () {
    Route::get('foos', 'FooController@index');
    Route::get('foos/{id}', 'FooController@show');

    Route::get('bars', 'BarController@index');
    Route::get('bars/{id}', 'BarController@show');
});
