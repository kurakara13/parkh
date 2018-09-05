<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('assets/css/owl.theme.default.css')}}" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

	@yield('css')

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

	@yield('style')

	<!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('assets/img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="{{asset('assets/img/logo.png')}}" alt="logo">
							<img class="logo-alt" src="{{asset('assets/img/logo-alt.png')}}" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#service">Services</a></li>
					<li><a href="#pricing">Prices</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="{{url('parking')}}">Parking</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

	@yield('content')

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/main.js?v=1')}}"></script>

</body>

</html>
