<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/maintenance', function () {
    return 'This page is under maintenance.';
});

Route::get(uri: '/posts',action: [PostController::class, 'index'])->name(name: 'posts.index');
Route::get(uri: '/posts{id}',action: [PostController::class, 'show'])->name(name: 'posts.show');