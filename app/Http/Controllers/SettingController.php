<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class SettingController extends Controller
{
    //
    public function index()
    {
     return view('setting.setting')->with('setting',Setting::first());

    }
  /*  public function store(Request $request)
    {
   $this->validate($request,[
        'blog_name'=>'required',
        'address' =>'required',
        'facebook' =>'required',
        'phone'   =>'required'
   ]);

   $setting=Setting::first();

   $setting->blog_name= $request->blog_name;
   $setting->address= $request->address;
   $setting->facebook= $request->facebook;
   $setting->phone= $request->phone;
   $setting->save();
   return redirect()->route('setting');
    }*/
    public function update(Request $request)
    {
   $this->validate($request,[
        'blog_name'=>'required',
        'address' =>'required',
        'facebook' =>'required',
        'phone'   =>'required'
   ]);

   $setting=Setting::first();

   $setting->blog_name= $request->blog_name;
   $setting->address= $request->address;
   $setting->facebook= $request->facebook;
   $setting->phone= $request->phone;
   $setting->save();
   return redirect()->route('setting');
    }
}
