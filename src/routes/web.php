<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login');
Route::post('/logout', 'LoginController@logout')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', 'DashboardController@index');
});




