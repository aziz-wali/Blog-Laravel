
@extends('layouts.app')
@section('content')

<div class="container text-center tags">
  <h2> Tags</h2>
  <a class="btn btn-success" href="{{route('tags.create')}}">Add Tag</a>
  <div class="row">
      <div class="col-lg-2"><b>Tag ID</b></div>
       
       <div class="col-lg-2"> <b>Name</b></div>

       <div class="col-lg-2"><b> Created at</b></div>
       <div class="col-lg-2"><b>Updated at</b></div>
       <div class="col-lg-2"><b>Edit</b></div>
       <div class="col-lg-2"><b> Delete </b></div>
       </div>
       <hr class="separator">
        @foreach($tags as $tag)
        <div class="row">
        <div class="col-lg-2">{{$tag->id}}</div>
       <div class="col-lg-2">{{$tag->tag}}</div>
       <div class="col-lg-2">{{$tag->created_at}}</div>
       <div class="col-lg-2">{{$tag->updated_at}}</div>
       <div class="col-lg-2"> <a href="{{route('tags.edit',['id'=>$tag->id])}}" class="btn btn-primary btn-sm">Edit</a></div>
       <div class="col-lg-2"> <a href="{{route('tags.delete',['id'=>$tag->id])}}" onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm">Delete</a></div>
        </div>
        <hr class="separator">
        @endforeach
    
 
</div>












 @endsection 