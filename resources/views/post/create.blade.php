@extends('layouts.app')
@section('content')
@if(count($errors)>0)
@foreach($errors ->all() as $error)
{{$error}}
@endforeach
@endif
<h2 class="text-center">Create Post </h2>
       <form class="form-member" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
            
            <h6 class="control-label">Post Title</h6>
            
            <input class="form-control" type="text" name="title" placeholder="enter title of post">
            
            
            <label class="control-label">Content</label>
            <textarea class="form-control" type="text" name="content" placeholder="enter your desc."></textarea>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Category</label>
                <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                        @foreach($cats as $cat)
                            <option  value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                    
                </select>
            </div>
            <div class="form-check">
                
             
                        @foreach($tags as $tag)
                        
                            <input class="form-check-input" name="tags[]" id="xx" type="checkbox" value="{{$tag->id}}">
                            <label class="form-check-label" for="xx">
                            {{$tag->tag}}
                            </lable></br>
                            @endforeach
                    
              
            </div>
                    

            <label class="control-label">Image</label>
            <input class="form-control" type="file" name="image" placeholder="enter your desc.">
					
            <button class="btn btn-primary text-center"> add</button>	
        </form>
                @endsection