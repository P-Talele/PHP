<?php
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\DemoController;







Route::get('/login',[DemoController ::class, 'index']);
Route::post('/login',[DemoController ::class,'resister']);
Route::post('/resister',[DemoController ::class,'resister']);




