<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Protofolio extends Model
{
    protected $fillable = ['user_id' , 'name_of_project' ,'description'];


    public function User(){

        return $this->belongsTo(User::class);
    }

    public function Images(){

        return $this->hasMany(ProtoImage::class);
    }

}
