<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') | {{ config('app.name') }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Language learning social network that connects students and language teachers." />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/theme/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/theme/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/theme/bootstrap.css') }}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/theme/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('css/theme/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/theme/owl.theme.default.min.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" media="print , screen and (min-width:768px)" href="{{ asset('css/theme/style.css') }}">
	<link rel="stylesheet" media="print , screen and (max-width:768px)" href="{{ asset('css/theme/sp-style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('js/theme/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <style>
        @font-face {
            font-family: 'icomoon';
            src: url('{{ asset("fonts/fonts/icomoon/icomoon.eot?srf3rx") }}');
            src: url('{{ asset("fonts/icomoon/icomoon.eot?srf3rx#iefix") }}') format("embedded-opentype"), url('{{ asset("fonts/icomoon/icomoon.ttf?srf3rx") }}') format("truetype"), url('{{ asset("fonts/icomoon/icomoon.woff?srf3rx") }}') format("woff"), url('{{ asset("fonts/icomoon/icomoon.svg?srf3rx#icomoon") }}') format("svg");
            font-weight: normal;
            font-style: normal;
        }
    </style>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +01 123 456 7890</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-4 sp-only">
						<div id="fh5co-logo"><a href="/">Let's Begin<span>.</span></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul class="sp-only">
							<li class="active"><a href="/">Home</a></li>
							<li><a href="/courses">Courses</a></li>
							<li><a href="/pricing">Pricing</a></li>
							<li class="has-dropdown">
								<a href="/blog">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<a href="/contact">Contact</a></li>
							<li class="btn-cta"><a href="#"><span>Login</span></a></li>
							<li class="btn-cta"><a href="#"><span>Sign Up</span></a></li>
							<li class="btn-cta"><a href="#"><span>Create a Course</span></a></li>
						</ul>
					</div>

					<div class="col-xs-6 pc-only">
						<div id="fh5co-logo"><a href="index.html">Let's Begin<span>.</span></a></div>
					</div>
					<div class="col-xs-6 text-right menu-1">
						<ul class="pc-only">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="courses.html">Courses</a></li>
							<li><a href="pricing.html">Pricing</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
							<li class="btn-cta"><a href="#"><span>Login</span></a></li>
							<li class="btn-cta"><a href="#"><span>Sign Up</span></a></li>
							<li class="btn-cta"><a href="#"><span>Create a Course</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

@yield('content')

<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h4>About Learning</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learning</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learn &amp; Grow</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Engage us</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Legal</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">2016 Let's Begin. All Rights Reserved.</small> 
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('js/theme/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/theme/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/theme/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/theme/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('js/theme/jquery.stellar.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset('js/theme/owl.carousel.min.js') }}"></script>
	<!-- countTo -->
	<script src="{{ asset('js/theme/jquery.countTo.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/theme/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/theme/magnific-popup-options.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('js/theme/main.js') }}"></script>

	</body>
</html>