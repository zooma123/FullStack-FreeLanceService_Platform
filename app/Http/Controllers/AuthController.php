<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
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



}
