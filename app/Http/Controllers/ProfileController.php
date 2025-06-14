<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
public function CreateProfile(Request $request){

$user_id = Auth::user()->id;
$Profile = Profile::create([
'user_id' => $user_id ,
"title" => $request->title ,
"phone_number" => $request->phone_number,
"profile_photo" => $request->profile_photo

]);

return response()->json([
"message" => "You Have Successfully Create The Profile "

]);


}





}
