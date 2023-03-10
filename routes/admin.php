<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hima', function () {
    return 'A7la Mesaaa 3aleek';
});
