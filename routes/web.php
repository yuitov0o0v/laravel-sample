<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/maintenance', function () {
    return 'This page is under maintenance.';
});

