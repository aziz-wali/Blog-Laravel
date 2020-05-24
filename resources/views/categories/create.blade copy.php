@extends('layouts.app')
@section('content')
@if(count($errors)>0)
@foreach($errors ->all() as $error)
{{$error}}
@endforeach
@endif
<h2 class="text-center">create Category </h2>
       <form class="form-member" action="{{route('categories.store)}}" method="POST" >
      @csrf
            
            <h6 class="control-label">Category Name</h6>
            
            <input class="form-control" type="text" name="name" value="" placeholder="enter title of post">
            
            <button type="submit" class="btn btn-primary text-center"> add</button>	
        </form>
                @endsection