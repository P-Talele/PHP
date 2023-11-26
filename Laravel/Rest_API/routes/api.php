<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Api\userController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

   

    // this is post API 
     Route::post('user/store','App\Http\Controllers\Api\userController@store');
    // this is get API 
     Route::get("user/data",[userController::class,"index"]);
    // get  single user  Information 
     Route::get("user/show/{id}",[userController::class,"show"]);   
    // Delete Single User Information 
     Route::delete("user/delete/{id}",[userController::class,"destroy"]);
    // Update for all  colums 
     Route::put("user/update/{id}",[userController::class,"update"]);

     Route::patch("user/updateName/{id}",[userController::class,"changeName"]);


   
    
    

     

