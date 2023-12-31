<?php

use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\HostelController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'users'], function () {
    Route::apiResource('/', UserController::class);
});

Route::post('/login', [LoginController::class, 'login']);

Route::post('send-forgot-password-mail', [ForgotPasswordController::class, 'sendForgotPasswordMail']);

Route::get('/hostels', [HostelController::class, 'index']);



Route::get('hostel-rooms',[RoomController::class,'index']);