
@extends('layouts.app')
@section('content')

<div class="container text-center">
  <h2> Users List</h2>
  <div class="row">
      <div class="col-lg-2"><b>user ID</b></div>
       
       <div class="col-lg-2"> <b>Name</b></div>

       <div class="col-lg-2"><b> Created at</b></div>
       <div class="col-lg-2"><b>Admin</b></div>
       <div class="col-lg-2"><b>Edit</b></div>
       <div class="col-lg-2"><b> Delete </b></div>
       </div>
       <hr class="separator">
        @foreach($Users as $user)
        <div class="row">
        <div class="col-lg-2">{{$user->id}}</div>
       <div class="col-lg-2">{{$user->name}}</div>
       <div class="col-lg-2">{{$user->created_at}}</div>
       <div class="col-lg-2">@if($user->admin==1) admin 
       @else 
       <a href ="{{route('users.admin',['id'=> $user->id])}}">Make Admin </a>
       @endif
       
       
       </div>
       <div class="col-lg-2"> <a href="{{route('users.edit',['id'=>$user->id])}}" class="btn btn-primary btn-sm">Edit</a></div>
       <div class="col-lg-2"> <a href="{{route('users.delete',['id'=>$user->id])}}" onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm">Delete</a></div>
        </div>
        <hr class="separator">
        @endforeach
    
 
</div>












 @endsection 