<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;;
class AuthController extends Controller
{
    use ApiResponse;

    private  function validatePost($request){
        $rules =[
            "name"  => "required",
            "email" => "required|email|unique:users,name",
            "phone" => "required|regex:/^01[0-2,5]{1}[0-9]{8}/i'",
            'password'=>'required|confirmed', 
        ];
        $message = [
            "name.required" => "name must  have value",
        ];
        $validator= Validator::make($request->all(),$rules, $message );
       
        return $validator;
 
    }

    public function register(Request $request)
    {
      
        $validator=$this->validatePost($request);
        if ($validator->fails()) {
          return  $this->apiResponse(0,$validator->errors()->first(),$validator->errors());
        }

       $request->merge(['password'=> Hash::make($request->password)]);
       $user = User::create($request->all());
       $user->api_token=Str::random(60);
       $user->code=rand(111111,999999);
       $user->save();
       return $this->apiResponse(1, 'user added succefully',
       ['api_token'=> $user->api_token,
       'client'=>$user]);
      
    }


    public function verifyEmail(Request $request ,$id)
    {
        
    }


}
