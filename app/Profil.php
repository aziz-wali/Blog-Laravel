<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Profil extends Model
{
    //
 protected $fillable=['user_id','avatar','twitter','github','facebook'];

   //function for profile <=> user realtion
    protected function user()
    {
   
       return $this->belongsTo('App\User');
    }
   
}
