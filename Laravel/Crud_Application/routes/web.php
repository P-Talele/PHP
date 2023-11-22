<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudsController;


// insert -----

Route::get('/insert', [CrudsController::class ,'index']);
Route::post('/insert', [CrudsController::class ,'store']);
Route::get('/show', [CrudsController::class ,'indexx']);





 


