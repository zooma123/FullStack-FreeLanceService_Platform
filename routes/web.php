<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PushNotfication;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;


Route::options('{any}', function () {
    return response()->json([], 204);
})->where('any', '.*');

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('/auth')->group(function(){

Route::post('/Register' , [AuthController::class , 'Register'])->withoutMiddleware([Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);;
Route::post('/login' , [AuthController::class , 'Login'])->withoutMiddleware([Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);;
Route::post('/logout' , [AuthController::class , 'Logout'])->withoutMiddleware([Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class])->middleware('auth:sanctum');;

});




Route::prefix('/Profile')->group(function(){

    Route::post('/Create' , [ProfileController::class , 'CreateProfile'])->withoutMiddleware([Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class])->middleware('auth:sanctum');
    Route::get('/MyProfile', [ProfileController::class , 'MyProfile'])->withoutMiddleware([Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class])->middleware('auth:sanctum');



    });

    


