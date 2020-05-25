<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tags;
use App\User;
use App\Profil;
use App\Setting;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
     
        return view('home')->with('posts',Post::all())

        ->with('categories',Category::all())

        ->with('tags',Tags::all())

        ->with('users',User::all())

        ->with('blog_name',Setting::first()->blog_name)

        //->with('avatar',Profil::all())
        
        ->with('last_users',User::all()->sortByDesc('created_at')->take(3))

        ->with('last_posts',Post::all()->sortByDesc('created_at')->take(3));
                            
    }
}
