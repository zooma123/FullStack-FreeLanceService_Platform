<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id' , 'title' , 'phone-number' , 'experience' , 'profile-photo'] ;




public function user(){


    return $this->belongsTo(User::class);
}



}
