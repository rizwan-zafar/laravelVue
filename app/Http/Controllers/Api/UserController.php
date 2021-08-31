<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
public function login(Request $data)
{
    // $data=$request->all();
    if(!empty($data))
    {
        $email=$data->email;
        $password= $data->password;
        if($user=User::where('email',$email)->where('password',$password)->first())
        {
            $token=Hash::make($data->password);
            $user->api_token=$token;
            $user->save();
            return response()->json(['message' =>'User Logged Successfully',
            'token' => $token]);
        }
        else{
            return response()->json(['message' =>'Invalid Email or Password',
            'token'=>'invalid',
              ]);
        } }
             else{
                return response()->json(['message' => 'it should not be empty',
                'token'=>'invalid',
                ]);
             }

            

             
}
}
