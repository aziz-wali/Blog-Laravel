
@extends('layouts.app')
@section('content')
@if(count($errors)>0)
@foreach($errors ->all() as $error)
{{$error}}
@endforeach
@endif
<h2 class="text-center">Create User</h2>
       <form class="form-member" action="{{route('users.store')}}" method="POST" >
      @csrf
            
            <h6 class="control-label">User Name</h6>
             <input class="form-control" type="text" name="name" value="" placeholder="enter user name">

            <h6 class="control-label">User Email</h6>
            <input class="form-control" type="email" name="email" value="" placeholder="enter user email ">

            <h6 class="control-label">User Password</h6>
            <input class="form-control" type="password" name="password" value="" placeholder="user Password">
            
            <button type="submit" class="btn btn-primary text-center"> add</button>	
        </form>
                @endsection