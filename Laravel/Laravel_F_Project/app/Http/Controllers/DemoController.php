<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //   
         public function index()
         {
            return view('login');
         }
    public function  resister(Request $request)
         {
              echo"<pre>";
              print_r($request->all());
              echo"<pre>";
         }
}
 
