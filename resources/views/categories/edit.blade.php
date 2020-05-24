@extends('layouts.app')
@section('content')
@if(count($errors)>0)
@foreach($errors ->all() as $error)
{{$error}}
@endforeach
@endif
<h2 class="text-center">Edit Category </h2>
       <form class="form-member" action="{{route('categories.update',['id'=>$category->id])}}" method="POST" >
      @csrf
            
            <h6 class="control-label">{{$category->name}}</h6>
            
            <input class="form-control" type="text" name="name" value="{{$category->name}}" placeholder="enter title of post">
            
            <button type="submit" class="btn btn-primary text-center"> Update</button>	
        </form>
                @endsection