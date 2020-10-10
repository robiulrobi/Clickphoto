@extends('frontEnd.master')

<header class="header-section">
		<a href="{{asset('/')}}/frontEnd/./index.html" class="site-logo">
			<img src="{{asset('/')}}/frontEnd/img/logo.png" alt="">
		</a>
		<div class="menu-switch" id="menu-canvas-show">
			<i class="icon_menu"></i>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Contact section -->
	<section class="contact-section">
		<div class="contact-warp set-bg" data-setbg="{{asset('/')}}/frontEnd/img/blog/big.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="contact-info">
							<h4>Information</h4>
							<div class="ci-item"><i class="icon_phone"></i>(12)-100-100-100</div>
							<div class="ci-item"><i class="icon_mail"></i>Info.colorlib@gmail.com</div>
						</div>
						<div class="contact-info">
							<h4>Address</h4>
							<div class="ci-item"><i class="icon_pin"></i>Iris Watson, Mary land, United State, New York City</div>
						</div>
					</div>
					<div class="col-lg-7">
						<form class="contact-form">
							<label for="y-name">Your Name:</label>
							<input type="text" id="y-name">
							<label for="y-email">Email Address:</label>
							<input type="text" id="y-email">
							<label for="y-msg">Leave A Message:</label>
							<textarea id="y-msg"></textarea>
							<button class="site-btn">Send Us Now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>