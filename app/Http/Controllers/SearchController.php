<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search()
    {
     
        $post = App\Post::where('title', 'like' ,  '%' . request('search') . '%' )->get();

        return view('results.search')

        ->with('posts' , $post ) 

        ->with('title' ,  'Result : '. request('search') )

        ->with('settings',  App\Setting::first() )

        ->with('blog_name' , App\Setting::first()->blog_name)

        ->with('categories' , App\Category::take(5)->get() )   
        
        ->with('query' , request('search') )   ;
    }
}
