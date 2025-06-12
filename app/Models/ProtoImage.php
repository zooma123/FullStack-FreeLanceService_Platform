<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProtoImage extends Model
{
    
protected $fillable = ['proto_id' , 'image'];



public function Protofolio(){

return $this->belongsTo(Protofolio::class);

}


}
