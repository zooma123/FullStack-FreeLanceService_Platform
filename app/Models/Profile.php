<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id' , 'title' , 'phone_number' , 'experience' , 'profile_photo'] ;




public function user(){


    return $this->belongsTo(User::class);
}



}
