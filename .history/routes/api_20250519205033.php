<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::group(['prefix' => 'api/v1'], function () {
    Route::get('/users', [UserController::class, 'index']);
});
