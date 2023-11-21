<?php

namespace App\Http\Controllers;
 use App\Models\Customer;
 use Illuminate\Http\Request;

class Customer_Controller extends Controller
{
      public function customer()
      {   
        
                  echo"<pre>";
                  $custermer=Customer::all();
                   echo"<pre>";
                   print_r($custermer->toArray());
      
     }
}
