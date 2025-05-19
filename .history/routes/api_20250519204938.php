<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

// ... existing code ...

Route::get('/users', [UserController::class, 'index']);
