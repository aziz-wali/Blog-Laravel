@extends('layouts.app')
@section('content')


<div class="container text-center">
  <h2> Categories</h2>
  <div class="row">
      <div class="col-lg-2"><b>Tag ID</b></div>
       
       <div class="col-lg-2"> <b>Name</b></div>

       <div class="col-lg-2"><b> Created at</b></div>
       <div class="col-lg-2"><b>Updated at</b></div>
       <div class="col-lg-2"><b>Edit</b></div>
       <div class="col-lg-2"><b> Delete </b></div>
       </div>
       <hr class="separator">
        @foreach($cats as $cat)
        <div class="row">
        <div class="col-lg-2">{{$cat->id}}</div>
       <div class="col-lg-2">{{$cat->name}}</div>
       <div class="col-lg-2">{{$cat->created_at}}</div>
       <div class="col-lg-2">{{$cat->updated_at}}</div>
       <div class="col-lg-2"> <a class="btn btn-primary" href="{{route('categories.edit',['id'=>$cat->id])}}">Edit</a></div>
       <div class="col-lg-2">  <a class="btn btn-danger" onclick="return confirm('Are you sure?!')" href="{{route('categories.delete',['id'=>$cat->id])}}">Delete</a>
</div>
        </div>
        <hr class="separator">
       
    
 

		
		  

		

	
@endforeach

<a class="btn btn-success" href="{{route('categories.create')}}">Add Category</a>

</div>

@endsection