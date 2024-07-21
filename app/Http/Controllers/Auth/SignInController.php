<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    function loginUser(Request $request)
    {
        $validation = Validator($request->all(),
        [
            'email' => 'required|string|email|exists:users,email',
            'password' => 'required|string'
        ]);

        if($validation->fails()){
            return response()->json([
                'status'=>400,
                'message' => $validation->errors()->first()
            ]);
        }
        else{
            $credientials = array(
                'email'=>$request->email,
                'password'=>$request->password
            );

            if(Auth::attempt($credientials,false)){
//New File
                if(Auth::User()->hasRole('admin')){
                    return response()->json([
                        'status'=>200,
                        'message' => 'Admin User',
                        'url'=>'admin/index'
                    ]);
                }
                else{
                    return response()->json([
                        'status'=>200,
                        'message' => 'Non User'
                    ]);
                }
            }

            else{
                return response()->json([
                    'status'=>404,
                    'message' => "Wrong credientials"
                ]);
            }
        }
    }
}
