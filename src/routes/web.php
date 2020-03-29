<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LoginController@showLoginForm')->name('login');
Route::post('/', 'LoginController@login');
Route::post('/logout', 'LoginController@logout')->name('logout');

Route::middleware('auth')->namespace('Dashboard')->prefix('/dashboard')->group(function () {
    Route::get('/', 'DashboardController@index');
    Route::get('/news', 'NewsController@index');

    Route::get('/news/create', 'NewsController@create');
    Route::post('/news/store', 'NewsController@store');

    // Route::resource('/news', 'NewsController');
    // Route::resource('/gallery', 'GalleryController');
});




