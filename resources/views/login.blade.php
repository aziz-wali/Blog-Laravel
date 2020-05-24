@include('includes.header')
<h2 class="text-center">Login</h2>
       <form class="login" action="{{route('check')}}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
       
            <label class="control-label">Email</label>
            <input class="form-control" type="email" name="email" value="">
			
            <label class="control-label">Phone</label>
            <input class="form-control" type="password" name="password" value="">
					
            <button class="btn btn-primary text-center">login</button>	
        </form>