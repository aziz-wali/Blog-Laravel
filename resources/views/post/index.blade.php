@extends('layouts.app')
@section('content')
<div class="container text-center posts">

<h2>Posts </h2>
<a class="btn btn-success" href="{{route('post.create')}}">Add Post</a>
<hr class="separator">

@foreach($posts as $post)
<div class="post">
<div class="row">
    
    <div class="col-lg-6">
        <h4>{{$post->title}}</h4>
        <span></span>
        <a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('areyou sure?')">
       &#10006;</a>
            <a class="btn btn-primary btn-sm" href="{{route('post.edit',['id'=>$post->id])}}" >
          &#9998;</a>
        <p>{{substr($post->content,0,200)}})</p>
</div>
<div class="col-lg-6">
    <img src="{{$post->image}}">
       
</div>
</div>
</div>
<hr class="separator">
@endforeach
</div>
@endsection