<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Post;
class Tags extends Model
{
    //
    protected $table='tags';
    protected $fillable =['id','tag'];
    public $timestamp = true;
    protected function post()
    {
     
       return $this->belongsToMany('App\Post');

    }
}
