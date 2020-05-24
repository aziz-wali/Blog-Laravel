

@extends('layouts.app')
@section('content')
<!--@if(count($errors)>0)
@foreach($errors ->all() as $error)
{{$error}}
@endforeach
@endif-->


@if (Auth::user())
<h2 class="text-center">Edit Profile </h2>
       <form class="form-member" action="{{route('profile.update',['id'=>$user->profil->id])}}" method="POST" enctype="multipart/form-data">
            
       @if(Session::has('success'))
       <div class="alert alert-success">{{Session::get('success')}}</div>
       
       @endif

       {{csrf_field()}}
            
            <h6 class="control-label">Username</h6>
            
            <input class="form-control" type="text" name="name" value="{{$user->name}}" placeholder="enter title of post">
            @error('name')
             <span class="text text-danger">{{$message}}</span><br>
             @enderror
            
            <label class="control-label">twitter</label>
            <input class="form-control" type="text" name="twitter" value="{{$user->profil->twitter}}" placeholder="enter your desc.">
             @error('twitter')
             <span class="text text-danger">{{$message}}</span><br>
             @enderror


            <label for="exampleFormControlSelect1">Github</label>
            <input class="form-control" type="text" name="github" value="{{$user->profil->github}}" placeholder="enter title of post">
            @error('github')
             <span class="text text-danger">{{$message}}</span><br>
             @enderror


            <label for="exampleFormControlSelect1">Facebook</label>
            <input class="form-control" type="text" name="facebook" value="{{$user->profil->facebook}}" placeholder="enter title of post">
             @error('facebook')
             <span class="text text-danger">{{$message}}</span><br>
             @enderror
 

            <label class="control-label">Avatar</label>
            <input class="form-control" type="file" name="avatar" placeholder="enter your desc.">
            @error('avatar')
             <span class="text text-danger">{{$message}}</span><br>
             @enderror


            <button class="btn btn-primary text-center"> add</button>	
        </form>
        @endif
 @endsection