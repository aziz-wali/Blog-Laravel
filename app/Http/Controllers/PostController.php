<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categories;
use Illuminate\Support\Str;
use App\Tags;
use Auth;


class PostController extends Controller
{
    //
 public function __construct()
 {
     $this->middleware('auth');
 }

 public function index(){
     return view('post.index')->with('posts',Post::all()->sortByDesc('created_at'));
 }
    public function create()
    {
        return view('post.create')->with('cats',Categories::all())->with('tags',Tags::all());
    }

    public function edit($id)
    {
      $post= Post::find($id);

      return view('post.edit')->with('post',$post)->with('cats',Categories::all())
     
      ->with('tags',Tags::all());




      
      return redirect()->route('post');
    }


    public function store(Request $request)
    {
        
        $this->validate($request,[
            "title" => "required",
            "content" => "required",
            "category_id"=>"required|numeric",
            "image" => "required|image",
            "tags" =>"required"
        ]);
       
        
        $image= $request->image;

        $newImage=time().$image->getClientOriginalName();

        $image->move('upload/',$newImage);

        
      $post= Post::create([

            "title"=> $request->title,

            "content"=> $request->content,

            "category_id"=> $request->category_id,

            "image"=> 'upload/'.$newImage,

            "slug"=> Str::slug($request->title),

            "user_id"=> Auth::user()->id
        ]);

        // dd($request->all());
        $post->tags()->attach($request->tags);
       
          return redirect()->route('post');
        
    }

   public function update(Request $request,$id)
   {
        $post=Post::find($id);
      $this->validate($request,[
        "title" => "required",
        "content" => "required",
        "category_id"=>"required|numeric"
        
    ]);
   
    if($request->hasFile('image')){
    $image= $request->image;

    $newImage=time().$image->getClientOriginalName();

    $image->move('upload/',$newImage);
    $post->image= 'upload/'.$newImage;
    }
    $post->title=$request->title;
    $post->content=$request->content;
    $post->category_id=$request->category_id;
    $post->save();
    $post->tags()->sync($request->tags);
     return redirect()->route('post');


   }




    public function destroy($id)
    {
      $post= Post::find($id);

      $post->delete();

      return redirect()->route('post');
    }





}
