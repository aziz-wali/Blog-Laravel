<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Tags;
use App\Post;
class SiteController extends Controller
{
    //function that retrieves app Home page
    public function index()

    {
     return view('index')->with('setting',Setting::first()->blog_name)

     ->with('cats',Category::all())

     ->with('tags',Tags::all())
     
     ->with('posts_row',Post::all()->sortByDesc('created_at')->take(2))
  
     ->with('posts',Post::all()->sortByDesc('created_at')->skip(2)->take(4))

     ->with('posts_three',Post::all()->sortByDesc('created_at')->skip(5)->take(2))
     
     ;

    }
    //function that retrieves single  page with (slug)
    public function singlePage($slug){

        $post = Post::where('slug',$slug)->first();

        return view('single')->with('setting',Setting::first()->blog_name)

        ->with('cats',Category::all())

        ->with('tags',Tags::all())
        
        ->with('post',$post)

        ->with('category',$post->categories)

        ->with('t',$post->tags)

        

        
        
        ;
        
    }
     //function that retrieves Category page

    public function category($id){

        $category = Category::find($id);
     
        return view('category')->with('setting',Setting::first()->blog_name)

        ->with('cats',Category::all())

        ->with('tags',Tags::all())
        
        ->with('posts',Post::all())

        ->with('category',$category)
          
        
       
        
        ;
        
    }
    //function that retrieves tags page

    public function tags($id){

        $tags = Tags::find($id);
     
        return view('tags.tags')->with('setting',Setting::first()->blog_name)

        ->with('cats',Category::all())

        ->with('tag',$tags)
        
        ->with('posts',Post::all())

        ->with('category',Category::all())
          
        
       
        
        ;
        
    }
    
    public function check(){

       return view('index')->with('setting',Setting::first()->blog_name)

       ->with('cats',Category::all())

       ->with('tags',Tags::all())
       
       ->with('posts_row',Post::all()->sortByDesc('created_at')->take(2))
    
       ->with('posts',Post::all()->sortByDesc('created_at')->skip(2)->take(3))

       ->with('posts_three',Post::all()->sortByDesc('created_at')->skip(5)->take(2))
       
       ;
  
        
       
        
        
        
    }
    public function mylogin(){
        return view('login')->with('setting',Setting::first()->blog_name)

        ->with('cats',Category::all())

        ->with('tags',Tags::all())
        
        ->with('posts_row',Post::all()->sortByDesc('created_at')->take(2))
     
        ->with('posts',Post::all()->sortByDesc('created_at')->skip(2)->take(3))

        ->with('posts_three',Post::all()->sortByDesc('created_at')->skip(5)->take(2))
        
        ;
    }
    public function search()
    {
        $search_posts =Post::where('title', 'like' ,  '%' . request('search') . '%' )->get();

        return view('results.search')->with('setting',Setting::first()->blog_name)

        ->with('cats',Category::all())

        ->with('tags',Tags::all())
        
        ->with('posts_row',Post::all()->sortByDesc('created_at')->take(2))
     
        ->with('posts',Post::all()->sortByDesc('created_at')->skip(2)->take(3))

        ->with('posts_three',Post::all()->sortByDesc('created_at')->skip(5)->take(2))
        
        ->with('search', $search_posts)
      

 

 
        
        ;
   
    }
  
  
}
