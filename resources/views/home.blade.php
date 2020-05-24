@extends('layouts.app')

@section('content')
@if(Auth::user())
@if(Auth::user()->admin)
<div class="aside-menu" style="">
    <span class="menu-btn"><i class="fas fa-align-justify"></i></span>
   
   <ul class="list-unstyled" >
       <li>
    
      <img class="" src="{{Auth::user()->profil->avatar}}">
      <h5>{{Auth::user()->name}}</h5>
        
        
        </li>
       <li><i class="fas fa-users"></i>users <span>{{$users->count()}}</span></li>
       <li><i class="far fa-file-alt"></i>Posts</li>
       <li><i class="fab fa-buffer"></i>Categories</li>
       <li><i class="fas fa-tags"></i>Tags</li>
       <li><i class="far fa-trash-alt"></i>deleted</li>
       <li><i class="far fa-calendar-times"></i>Calender</li>
       <li><i class="fas fa-camera-retro"></i>Gallery</li>
       <li><i class="fas fa-chart-line"></i>chart</li>
       <li><i class="fas fa-align-right"></i>Widget</li>
       <li><i class="fab fa-buffer"></i>themes</li>
       <li><i class="far fa-file-alt"></i>pages</li>
       
       <li><i class="fas fa-envelope-open-text"></i>Emails</li>
       <li><i class="fas fa-comment-dots"></i>Chat</li>
       <li><i class="fab fa-buffer"></i>Extra</li>
      
 </ul>
 <script>
     var btn = document.querySelector('.menu-btn'),
         menu = document.querySelector('.aside-menu');
   btn.onclick=function(){
     if(menu.style.left=='-145px'){
        menu.style.left=0;
        this.innerHTML='<i class="fas fa-times"></i>';
     }else{
        menu.style.left='-145px';
        this.innerHTML='<i class="fas fa-align-justify"></i>';
     }
    }
</script>



</div>


<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

               
                    <div class="dashboard" style="display:flex">
                        
                        <div class="card border-primary mb-3 " style="max-width: 18rem;">
                        <div class="card-header"><h4>Users</h4></div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">Total Users</h5>
                            <h2>{{$users->count()}}  <i class="fas fa-users"></i></h2>
                            
                        </div>
                        </div>
                     

                        
                        <div class="card border-dark mb-3 " style="max-width: 18rem;">
                        <div class="card-header"><h4>Posts</h4></div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">Total Posts</h5>
                            <h2>{{$posts->count()}} <i class="far fa-file-alt"></i></h2>
                        </div>
                        </div>




                        <div class="card border-danger mb-3 " style="max-width: 18rem;">
                        <div class="card-header"><h4>Categories</i></h4></div>
                        <div class="card-body text-danger">
                            <h5 class="card-title">Total Categories</h5>
                         <h2>{{$categories->count()}}<i class="fab fa-buffer"></i></h2>
                        </div>
                        </div>



                        <div class="card border-success mb-3 " style="max-width: 18rem;">
                        <div class="card-header"><h4>Tags</h4></div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Total Tags</h5>
                            <h2>{{$tags->count()}}<i class="fas fa-tags"></i></h2>
                        </div>
                        </div>





                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" >


<div class="row justify-content-center">
        <div class="col-md-11">
      
    
      <div class="users" style="display:flex;  justify-content: space-between;">
            <div class="card users-card table-responsive">
                <div class="card-header">Letzte 3 Angemeldete Users</div>
                <table class="table-bordered">
                    <tr>
                        <td>username</td>
                        <td>email</td>
                        <td>Date</td>
                        <td>Image<td>
               </tr>
               @foreach($last_users as $user)
              <tr>
                        <td>{{$user->name}}</td>
                        <td> {{$user->email}}</td>
                        <td> {{$user->created_at->diffForHumans()}}</td>
                        <td><img src="{{$user->profil->avatar}}"></td>
                        
              </tr>
                @endforeach
</table>


               


</div>
               





        
<div class="card users-card table-responsive">
           
                <div class="card-header">Letzte 3 Veröffentlichte Artikel</div>

              

                    <table class="table-bordered">
                    <tr>
                        <td>Title</td>
                        <td>user</td>
                        <td>Date</td>
                        <td>Image<td>
               </tr>
               @foreach($last_posts as $post)
              <tr>
                        <td>{{$post->title}}</td>
                        <td> {{$post->user->name}}</td>
                        <td> {{$post->created_at->diffForHumans()}}</td>
                        <td><img src="{{$post->image}}"></td>
                        
              </tr>
                @endforeach
</table>
</div>
</div>
    
</div>




<div class="images" >

<div class="card bg-light " >
  <div class="card-header">Header</div>
  <img src="upload/2D_B_W_Pie_Chart_1.png">
</div>

<div class="card bg-light" >
  <div class="card-header">Header</div>
  <img src="upload/Excel-charts-11.png">
</div>

</div>

@endif
@endif
@endsection
