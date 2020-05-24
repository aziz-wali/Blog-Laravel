@extends('layouts.app')
@section('content')
@if(count($errors)>0)
@foreach($errors ->all() as $error)
{{$error}}
@endforeach
@endif
<h2 class="text-center">Settings</h2>
       <form class="form-member" action="{{route('setting.update')}}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
            
            <h6 class="control-label">Blog Name</h6>
            
            <input class="form-control" type="text" name="blog_name" value="{{$setting->blog_name}}" >
            
            <label class="control-label">Address</label>
            <input class="form-control" type="text" name="address" value="{{$setting->address}}">
			
            <label class="control-label">Facebook</label>
            <input class="form-control" type="text" name="facebook" value="{{$setting->facebook}}">
			
            <label class="control-label">Phone</label>
            <input class="form-control" type="number" name="phone" value="{{$setting->phone}}">
					
            <button class="btn btn-primary text-center">Update</button>	
        </form>
                @endsection