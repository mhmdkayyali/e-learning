<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTController;
use App\Http\Controllers\AdminController;

Route::group(["prefix"=> "v1"], function(){
    Route::post("/course", [AdminController::class, "createCourse"])->name("course");
    Route::post("/landing", [AdminController::class, "getInformation"])->name("landing");

});
// Route::group(['middleware' => 'api'], function($router) {
//     Route::post('/register', [JWTController::class, 'register']);
//     Route::post('/login', [JWTController::class, 'login']);
//     Route::post('/logout', [JWTController::class, 'logout']);
//     Route::post('/refresh', [JWTController::class, 'refresh']);
//     Route::post('/profile', [JWTController::class, 'profile']);
// });
