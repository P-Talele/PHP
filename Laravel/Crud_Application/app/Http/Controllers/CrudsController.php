<?php

namespace App\Http\Controllers;
use App\Models\Crud;

use Illuminate\Http\Request;

class CrudsController extends Controller
{

      public function index()
      {
          return view("create");
      }
    //
    public function store(Request $request)  
   
    {  
        
       
         $request->validate([  
             'first_name'=>'required',  
             'last_name'=>'required',  
             'gender'=>'required',  
             'qualifications'=>'required'  
         ]);  
  
        $crud = new Crud;  
        $crud->first_name =  $request->get('first_name');  
        $crud->last_name = $request->get('last_name');  
        $crud->qualifications = $request->get('qualifications');  
        $crud->gender = $request->get('gender');  
        $crud->save();  

    }

        public function indexx()  
    {  
        $cruds = Crud::all();  
  
        return view('index', compact('cruds'));  
    }  

        
  
  // 

}
