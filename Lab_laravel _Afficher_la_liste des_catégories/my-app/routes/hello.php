<?php

use App\http\Controllers\hellocontroller2;
use Illuminate\Support\Facades\Route;

Route::get('/hello' , [hellocontroller2 ::class,'index']);




?>