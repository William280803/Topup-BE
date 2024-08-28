<?php

use App\Http\Controllers\AuthController;
use App\Services\AuthService\InsertLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [AuthController::class, InsertLogin]);