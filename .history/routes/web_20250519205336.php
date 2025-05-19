<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::group(['prefix' => 'v1'], function () {
    Route::get('/users', [UserController::class, 'index']);
});

Route::get('/', function () {
    return view('welcome');
});
