<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use  Illuminate\Support\Facades\Validator;
Use Illuminate\Support\Facades\DB;     

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
          $users=User::all(); 
            if(count($users)>0){
              $response =[
                        "massege"=>count($users)."data found",
                         "status",1,
                         "data",$users
                         ];
                  }
            else   
                 {
             $response =[
                        "massege"=>count($users)."data found",
                        "status"=>0,
                        ];
                 }
                 return response()->json([$response , 200]);
            }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            
    }

  
    public function store(Request $request)
       
    {
        
        //   this clint side validation        
        $validator = Validator::make($request->all(),
        [
             "name"    =>    ["required"],
             "gender"  =>    ["required"],
             "gmail"   =>    ["required"],
             "phone"   =>    ["required"],
             "address" =>    ['required'],
             "country" =>    ["required"],
             "state"   =>    ["required"],
       ]);
        

             if($validator->fails())
             {
                 return response()->json([$validator->messages(),400]);
             }
            else
          {  
                 // this is insert query
                   DB::beginTransaction();
                   $data=
                      [
                      "name"=>$request->name,
                      "gender"=>$request->gender, 
                      "gmail"=>$request->gmail,
                      "phone"=>$request->phone,
                      "address"=>$request->address,
                      "country=>"=>$request->country,
                      "state"=>$request->state, 
                      ];    
                      
                   try{
                       $user=User::create($data);
                       DB::commit();

                     }catch( \Exception $e)
                     { 
                       DB::rollBack();
                       p($e->getMessage());
                       $user=null;
                     }
                    if($user != null)
                    {
                        return response()->json(
                         [
                        "massage"," user resister successfully",200,
                       ]);
                     }
                    else
                    {
                         return response()->json(
                         [
                            "massege","User not Resister Succesfully",500,
                         ]);
                    }
               }

                      p($request->all());


     }    
    
    // get single user Information
    public function show(string $id)
    {
         $user=User::find($id);
         if(is_null($user))
         {
           $response=[
               "massage","user not found",
               "status",0  
           ];   
         }
         else
         {
             $response=[
                 "massege","user found",
                 "status",1, 
                 "data",  $user,             
            ];
         }
          return response()->json([$response,200]);
    }

  
    public function edit(string $id)
    {
        
    }

  
    public function update(Request $request, string $id)
    {
          
        $user=User::find($id);
        if(is_null($user))
        {
          // user does not exist
            return  response()->json([
             "massege"=>"user not found",
              "Status"=>0,
            ]);  
        } else
          {
             DB::beginTransaction();
            try
            {
                  $user->name=$request["name"];
                  $user->gender=$request["gender"];
                   $user->gmail=$request["gmail"];
                  $user->phone=$request["phone"];
                  $user->address=$request["address"];
                  $user->country=$request["country"];
                  $user->state=$request["state"];
                  $user->save();
                     DB::commit();
            }catch(Exception $e)
            {
              DB::rollBack();
              $user=null;
            }

            if(is_null($user))
            {
                return response()->json(
                 [
                "massage"=>"Internal Error",500,
                "errormsg"=>$e->getMessage(),
                ]);
             }
            else
            {
                 return response()->json(
                 [
                    "massege"=>"Profile not Updated",500,
                 ]);
            }
        }
    }

    public function destroy(string $id)
    {
            $user=User::find($id);
            if(is_null($user))
            {
                 $response =[
                    
                        "massege"=>"user not found in DB",200,
                        "status"=>0,
                        

                 ];
            }
             else
            {
                 DB::beginTransaction();
                 try{
                   $user->delete();
                   DB::commit();
                   $response=
                   [
                        "massege" => "user succesfully delete",
                        "status"  =>1,
                        "data"=>$user,
                      
                    ];
                

                 }
                 catch(\Exception $e)
                 {
                        Db::rollBack();
                 }
            }

              return response()->json([$response,200]);

    }
  

   public  function changeName(Request $request ,$id)
 {
         $user=User::find($id); 
           p($request->all());
          // $users=User::all(); 
           die;
         
           if(is_null($user))
           {
          
            return  response()->json([
              "massege"=>"user not found",
              "Status"=>0,
                  ]);
           } 
           else
           {
              DB::beginTransaction();
              try{
                 
                 $user->name=$request["name"];
                 $user->save();
                 DB::commit();
                  
              }catch( Exception $e)
              {
                 DB::rollBack();
                 $user=null;
              }
           }    
            if(is_null($user))
            {
               return response()->json([
                 "massese"=>"Internal Error",
                 "status"=>0,
                 "msgerror"=> $e->getMessage(),
               ]);
            } else 
            {
                 return response()->json([
                 "Messege"=>"Name is Updated Successfully"
                ]);
            }
 }
}

