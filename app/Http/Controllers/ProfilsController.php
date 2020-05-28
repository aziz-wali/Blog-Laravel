<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Profil;
use App\Setting;
use App\User;

class ProfilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    { 
        $user = Auth::user();
      
        //check if The user has profile or not
        if($user->profil==null){

        Profil::create([

            'user_id'=> Auth::user()->id,

            'avatar'  => 'upload/avatar.png'

        ]);
        }

        return view('profile.index')

        ->with('user',$user)

        ->with('blog_name',Setting::first()->blog_name)

        // ->with('id',Auth::user()->profil->id)
        ;

        
    
       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        // return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Errors array
        $messages=['twitter.required'=>'please inesrt twittter field',

                  'name.required'=> __('messages.name required'),

                  'github.required'=>' this field is required',
    
                   ];

        $profile =Profil::find($id);

                //validate Inputs that user insert

                $this->validate($request,[

                "name"=>"required",

                "twitter"=>"required",

                "github"=>"required",

                "facebook"=>""
                ],

             $messages

        );
        //check wether the user inserted avatar or not
        if($request->hasFile('avatar')){
            $avatar=$request->avatar;
            $newavatar= time().$avatar->getClientOriginalName();
            $avatar->move('upload/',$newavatar);
            $profile->avatar= 'upload/'.$newavatar;

        }
            //update the Data
            $profile->twitter =$request->twitter;
            $profile->github =$request->github;
            $profile->facebook =$request->facebook;
            Auth::user()->name= $request->name;
            $profile->save();
            Auth::user()->save();
        
             return back()->with(['success'=>'your Infos Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //
    }
}
