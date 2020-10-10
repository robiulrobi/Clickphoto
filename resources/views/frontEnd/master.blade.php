<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Click Photo</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cassi Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('/')}}/frontEnd/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{asset('/')}}/frontEnd/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{asset('/')}}/frontEnd/css/elegant-icons.css"/>
	<link rel="stylesheet" href="{{asset('/')}}/frontEnd/css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('/')}}/frontEnd/css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Section -->
	<div class="offcanvas-menu-wrapper">
		<div class="menu-header">
			<a href="{{asset('/')}}/frontEnd/./index.html" class="site-logo">
				<img src="{{asset('/')}}/frontEnd/img/logo.png" alt="">
			</a>
			<div class="menu-switch" id="menu-canvas-close">
				<i class="icon_close"></i>
			</div>
		</div>
		<ul class="main-menu">
			<li><a href="{{ url('/') }}" class="active">Home</a></li>
			<li><a href="{{ url('gallery') }}">Gallery</a></li>
			<li><a href="{{ url('blog') }}">Blog</a></li>
			<li><a href="{{ url('about') }}">About</a></li>
			<li><a href="{{ url('contact') }}">Contact</a></li>
		</ul>
		<div class="menu-footer">
			<div class="footer-social">
				<a href="#">Facebook</a>
				<a href="#">Twitter</a>
				<a href="#">Instagram</a>
			</div>
			<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
		</div>
	</div>
	<!-- Offcanvas Menu Section end -->
	
	<!-- Header section -->
	<!-- Header section end -->

	<!-- Hero section -->
	@yield('body')
	<!-- Hero section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="footer-social">
			<a href="#">Facebook</a>
			<a href="#">Twitter</a>
			<a href="#">Instagram</a>
		</div>
		<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('/')}}/frontEnd/js/vendor/jquery-3.2.1.min.js"></script>
	<script src="{{asset('/')}}/frontEnd/js/bootstrap.min.js"></script>
	<script src="{{asset('/')}}/frontEnd/js/owl.carousel.min.js"></script>
	<script src="{{asset('/')}}/frontEnd/js/masonry.pkgd.min.js"></script>
	<script src="{{asset('/')}}/frontEnd/js/main.js"></script>

	</body>
</html>
