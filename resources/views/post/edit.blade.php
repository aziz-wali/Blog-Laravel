@extends('layouts.app')
@section('content')
@if(count($errors)>0)
@foreach($errors ->all() as $error)
{{$error}}
@endforeach
@endif
<h2 class="text-center">Edit Post </h2>
       <form class="form-member" action="{{route('post.update',['id'=>$post->id])}}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
            
            <h6 class="control-label">Post Title</h6>
            
            <input class="form-control" type="text" name="title" value="{{$post->title}}" placeholder="enter title of post">
            
            
            <label class="control-label">Content</label>
            <textarea class="form-control" type="text" name="content" value="" placeholder="enter your desc.">{{$post->content}}</textarea>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Category</label>
                <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                    @foreach ($cats as $cat)
                    <option value="{{$cat->id}}"
                    
                   
                    @if($post->category_id == $cat->id)
                     selected
                     @endif 
                

                    >{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            @foreach($tags as $tag)
            <input type="checkbox" class=""  value="{{$tag->id}}" name="tags[]"
           @foreach($post->tags as $n)
           @if($n->id==$tag->id)
           checked
            @endif
            @endforeach
            
            >
            <label>{{$tag->tag}} </label><br>
                 @endforeach   

            <label class="control-label">Image</label>
            <input class="form-control" type="file" name="image" placeholder="enter your desc.">
					
            <button class="btn btn-primary text-center"> add</button>	
        </form>
                @endsection