<?php
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Customer_Controller;


Route::get('/login',[DemoController ::class,'index']);
Route::post('/login',[DemoController ::class,'resister']);   
Route::post('/resister',[DemoController ::class,'resister']);
 Route::get('/cust',[ Customer_Controller:: class,'customer']);







