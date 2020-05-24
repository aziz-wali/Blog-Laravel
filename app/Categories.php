<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Categories extends Model
{
    //

public function post(){
    return $this ->hasMany('App\Post');
}
    protected $table ='categories';
    protected $fillable =['id','name','created_at','updated_at'];
}
