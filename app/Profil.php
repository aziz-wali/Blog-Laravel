<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Profil extends Model
{
    //
 protected $fillable=['user_id','avatar','twitter','github','facebook'];
    protected function user()
    {
   
       return $this->belongsTo('App\User');
    }
   
}
