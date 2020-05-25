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
      //function for Tags <=> Post realtions
    protected function post()
    {
     
       return $this->belongsToMany('App\Post');

    }
}
