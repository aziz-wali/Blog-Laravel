
@extends('layouts.app')
@section('content')
@if(count($errors)>0)
@foreach($errors ->all() as $error)
{{$error}}
@endforeach
@endif
<h2 class="text-center">Create Tag </h2>
       <form class="form-member" action="{{route('tags.store')}}" method="POST" >
      @csrf
            
            <h6 class="control-label">Tag Name</h6>
            
            <input class="form-control" type="text" name="tag" value="" placeholder="enter tags name">
            
            <button type="submit" class="btn btn-primary text-center"> add</button>	
        </form>
                @endsection