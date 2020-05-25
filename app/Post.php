<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;
use App\User;


class Post extends Model
{
    //
    use SoftDeletes;
    protected $table='posts';
    protected $fillable=['id','title','content','category_id','image','slug','user_id'];
    protected $dates =['deleted_at'];
    public $timestamps=true;


    //function for categories <=> Post realtions

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //function for user <=> Post realtions
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    
    protected function getImageAttribute($image)
    {
        return asset($image);
    }
    //function for Tags <=> Post realtions
    public function tags()
    {
     
       return $this->belongsToMany('App\Tags');

    }
}
