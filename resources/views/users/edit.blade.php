
@extends('layouts.app')
@section('content')
@if(count($errors)>0)
@foreach($errors ->all() as $error)
{{$error}}
@endforeach
@endif

<h2 class="text-center">Edit User </h2>


       <form class="form-member" action="{{route('users.update',['id'=>$user->id])}}" method="POST" >
      @csrf
      <img src="/{{$user->profil->avatar}}">
     
      <h6 class="control-label">User Name</h6>
             <input class="form-control" type="text" name="name" value="{{$user->name}}" placeholder="enter user name">

            <h6 class="control-label">User Email</h6>
            <input class="form-control" type="email" name="email" value="{{$user->email}}" placeholder="enter user email ">

            <h6 class="control-label">Facebook</h6>
            <input class="form-control" type="text" name="facebook" value="{{$user->profil->facebook}}" placeholder="user Password">
            
            <button type="submit" class="btn btn-primary text-center"> Update</button>	
        </form>
                @endsection