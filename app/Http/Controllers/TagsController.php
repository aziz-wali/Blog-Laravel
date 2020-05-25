<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tags;

class TagsController extends Controller
{
    public function index()
    {
        $tags=Tags::all();
        return view('tags.index')->with('tags',$tags);
    }


    public function create()
    {

    return view('tags.create');



    }
    public function store(Request $request)
    {
     $this->validate($request,[

         "tag"=>"required"
     ]);

     Tags::create([

         "tag"=>$request->tag
     ]);

      return redirect()->route('tags');



    }
    public function edit($id)
    {
        
       $tags=Tags::find($id);

        return view('tags.edit')->with('tags',$tags);
    }


    public function update(Request $request,$id)
    {
        
       $tags=Tags::find($id);

       $this->validate($request,[

           "tag"=>"required|string"
       ]);

       $tags->tag=$request->tag;

       $tags->save();




        return redirect()->route('tags');
    }


    public function destroy($id)
    {
        
       $tags=Tags::find($id);

       $tags->destroy($id);
       
       return redirect()->route('tags');

       
    }
}
