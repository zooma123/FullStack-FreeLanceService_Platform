<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
public function CreateProfile(Request $request){



$user_id = Auth::user()->id;
//handel ProfilePhoto

if($request->hasFile('profile_photo')){
    $path =$request->file('profile_photo')->store('ProfilesPhoto' , 'public');
      }
$Profile = Profile::create([
'user_id' => $user_id ,
"title" => $request->title ,
"phone_number" => $request->phone_number,
 "experience" => $request->experience,
"profile_photo" => $path

]);

return response()->json([
"message" => "You Have Successfully Create The Profile "

]);

}


public function MyProfile(){

$user = Auth::user();
$profile = $user->Profile;

return response()->json([

$profile

]);

}





}
