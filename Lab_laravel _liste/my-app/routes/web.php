<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\helloController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/helloPage', [helloController::class,'index']);