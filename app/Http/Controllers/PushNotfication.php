<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Notifications\DNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PushNotfication extends Controller
{
    public function sendDiscount()
{
    $users = User::all();

    foreach ($users as $user) {
        $user->notify(new DNotification(
            "🔥 Special Discount!",
            "Get 50% off on all products for the next 24 hours!"
        ));
    }

    return response()->json(['message' => 'Notifications sent!']);
}



public function shownotifications(){

    $user = Auth::user();
//  $DATA =  $user->unreadNotifications;
    $DATA = $user->notifications;
     $user->unreadNotifications->markAsRead();

return response()->json([
$DATA

]);



}

}
