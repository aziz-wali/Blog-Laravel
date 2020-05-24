
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Aziz Wali</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
    <body>
	<header id="header">
			<!-- Top Header -->
			<div id="top-header">
				<div class="container">
					<div class="header-links">
						<ul>  
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact</a></li>
							<li class="nav-item dropdown">
							
								<a class="nav-link dropdown-toggle" href="{{route('profile.index')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Profile
                        </a>
                        
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                        <a class="dropdown-item" href="{{ route('profile.index', ['id'=>Auth::id()]) }}">Create</a>
                        </div>
							
							
							</li>
							@if(Auth::user())
							@if(Auth::user()->admin)
							<li><a href="/home">dashboard</a></li>
							@endif
							@endif
						
							
							@if(!Auth::user())
							<li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
							@else
							<li>
							<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     logout
									</a>
		                   </li>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
							@endif
						</ul>
					</div>
					<div class="header-social">
					<ul>
								<li><a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i><br><span></span></a></li>
								<li><a href="https://www.twitter.com" class="twitter"><i class="fa fa-twitter"></i><br><span></span></a></li>
								<li><a href="https://www.google.com" class="google"><i class="fa fa-google"></i><br><span></span></a></li>
								<li><a href="https://www.instagram.com" class="instagram"><i class="fa fa-instagram"></i><br><span></span></a></li>
								<li><a href="https://www.youtube.com" class="youtube"><i class="fa fa-youtube"></i><br><span></span></a></li>

							</ul>
					</div>
				</div>
			</div>
			<!-- /Top Header -->
			
			<!-- Center Header -->
			<div id="center-header">
				<div class="container">
					<div class="header-logo">
						<a href="#" class="logo"><h2>{{$setting}}<h2></a>
					</div>
				
				</div>
			</div>
			<!-- /Center Header -->
			
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container">
					<nav id="main-nav">
						<div class="nav-logo">
							<a href="#" class="logo"><img src="./img/logo-alt.png" alt=""></a>
						</div>
						<ul class="main-nav nav navbar-nav">
							<li class="active"><a href="{{route('index')}}">Home</a></li>
                            @foreach($cats as $cat)
                            <li><a href="{{route('category',['id'=>$cat->id])}}">{{$cat->name}}</a></li>
                            @endforeach
						</ul>
					</nav>
					<div class="button-nav">
						
						<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
						<div class="search-form">
						<div id="nav-search">
								<form method="GET" action="{{route('search')}}">
									{{ csrf_field()}}
									<input class="input" name="search" placeholder="Enter your search...">
									<button class="search-collapse-btn">
									<i class="fa fa-search"></i>
								</button>
								</form>
								
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->
		
		<!-- Owl Carousel 1 -->
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">News</a></li>
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
					<h2 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->
			
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">News</a></li>
						<li class="article-type"><i class="fa fa-file-text"></i></li>
					</ul>
					<h2 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->
			
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="./img/img-lg-3.jpg" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">News</a></li>
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
					<h2 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->
		</div>
		<!-- /Owl Carousel 1 -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Trending Posts</h2>
							<!-- tab nav -->
							<ul class="tab-nav pull-right">
								<li class="active"><a data-toggle="tab" href="#tab1">All</a></li>
								<li><a data-toggle="tab" href="#tab1">News</a></li>
								<li><a data-toggle="tab" href="#tab1">Sport</a></li>
								<li><a data-toggle="tab" href="#tab1">Music</a></li>
								<li><a data-toggle="tab" href="#tab1">Business</a></li>
								<li><a data-toggle="tab" href="#tab1">Lifestyle</a></li>
							</ul>
							<!-- /tab nav -->
						</div>
						<!-- /section title -->
							</header>	