<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Learning Laravel Website </title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	</head>
	<body>
		<header>
			<nav id ="nav" class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
        <img alt="Brand" src="/img/logo.png">
      </a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					
					<ul class="nav nav-tabs navbar-right">
						
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Registretion <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/doctorRegistretion">Doctor Registretion</a></li>
								<li><a href="/userRegistretion">User Registretion</a></li>
								<li><a href="/hospitalRegistretion">Hospital Registretion</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">See <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/seeDoctors">See Doctors</a></li>		
								<li><a href="/seeUsers">See Users</a></li>
							</ul>
						</li>
						<li><a href="/searchDoctors">Search Doctors</a></li>
						<li><a href="/">Home</a></li>
						<li><a href="/about">About</a></li>
						<li><a href="/contact">Contact</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Populate DB <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/news">News</a></li>
								<li><a href="/tips">Tips</a></li>
							</ul>
						</li>
							@if(Session::has('doctor_id'))
						<li class="dropdown login"> 
								<a href="#" class="dropdown-toggle logincolor u" data-toggle="dropdown">{{Session::get('doctor_name')}}  <b class="caret"></b></a>
								<ul class="dropdown-menu">
									
									<li><a href="/doctorLogout">Logout</a></li>
								

									</ul>
							</li>
						@elseif(Session::has('user_id'))
						<li class=" login dropdown ">
								<a href="#" class="dropdown-toggle logincolorr u" data-toggle="dropdown">{{Session::get('user_name')}}<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="/userLogout">Logout</a></li>
							
									</ul>
							</li>	
							
						@else
							<li class=" login dropdown ">
								<a href="#" class="dropdown-toggle logincolor" data-toggle="dropdown">Login <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="/doctorLogin">Doctor Login</a></li>
									<li><a href="/userLogin">User Login</a></li>
									<li><a href="/doctorLogin">Doctor Login</a></li>
									</ul>
							</li>							
						@endif

					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</header>
		@yield('content')
		<div class="bottom-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-2 navbar-brand">
						<a href="/">Learning Laravel</a>
					</div>
					<div class="col-md-10">
						<ul class="bottom-links">
							<li><a href="/">Home</a></li>
							<li><a href="/about">About</a></li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		
		{{ HTML::script('js/gmaps.js') }}
		{{ HTML::script('js/move-top.js') }}
		{{ HTML::script('js/owl-carousel/owl.carousel.js') }}



	</body>
</html>