<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
