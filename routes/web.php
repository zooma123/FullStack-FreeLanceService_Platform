<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('/auth')->group(function(){

Route::post('/Register' , [AuthController::class , 'Register'])->withoutMiddleware([Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);;
Route::post('/login' , [AuthController::class , 'Login'])->withoutMiddleware([Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);;
Route::post('/login' , [AuthController::class , 'Login'])->withoutMiddleware([Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class])->middleware('auth:sanctum');;

});


