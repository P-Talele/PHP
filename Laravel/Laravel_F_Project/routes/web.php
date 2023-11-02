<?php
use Illuminate\Support\Facades\Route; 
use App\Http\Controlers\DemoController;
use App\Http\Controllers\DemoController as ControllersDemoController;

 /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo',function()
{
    echo"hi prashant welcome to php";
});  
Route::get('/d',function()
{
  echo"hi prashant";
});

Route::get('name/{name}',function($name=null)
  {
      echo"name=$name";
});
 
//  Route::get('login/',function()
//  {
//     return view('login');  
//  });

Route::get('/login',[ControllersDemoController::class,'index']);
