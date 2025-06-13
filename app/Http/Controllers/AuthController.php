<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

public function Register(SignUpRequest $request){

$validated = $request->validated();

$validated['password'] = Hash::make($request->password);

User::create($validated);

 return response()->json([
'message' => "تم انشاء الحساب بنجاح "

]);

}


public function Login(Request $request){


    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string|min:6',
    
    ]);
    if(!Auth::attempt($request->only('email' , 'password')))
    
    return response()->json([
    'message' => 'invalid email or password'
    
    ], 401);
    
    $user= Auth::user();
    $token =$user->createToken('auth-Token')->plainTextToken;
        
    
    
    return response()->json([
        'message' => 'Login Successfully',
        'data' => $user ,
        'token' => $token 
        
        ], 200);

}


}
