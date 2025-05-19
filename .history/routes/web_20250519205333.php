<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::get('/users', [UserController::class, 'index']);
});

Route::get('/', function () {
    return view('welcome');
});
