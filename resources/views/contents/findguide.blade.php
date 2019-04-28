@extends('layouts.master')

@section('content')

	<!-- Start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Tour Guide		
					</h1>	
					<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Tour Guide</a></p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start guide list -->
	<div class="whole-wrap">
		<div class="container">
			<div class="row d-flex justify-content-center">
			    <div class="menu-content pb-10 col-lg-8">
			        <div class="title text-center">
			            <h1 class="mb-10 mt-60">Find a Tour Guide</h1>
			            <p>Sign Up here to unlock more features.<br>Already have an account? <a href="#">Sign In</a></p>
			        </div>
			    </div>
			</div>
			<div class="row" style="margin-top: -80px">
				<div class="col-lg-4 ml-auto">
					<div class="widget-wrap" style="border: none; background-color: transparent;">
						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Guides" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Guides'" >
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php for ($i = 1; $i < 5; $i++) { ?>
				<div class="col-lg-3 pb-40">
					<div class="widget-wrap">
						<div class="single-sidebar-widget user-info-widget">
							<img src="../../../assets1/img/blog/user-info.png" alt="" style="border-radius: 100%;">
							<a href="#"><h4>John Doe</h4></a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>				
							</div>
							<p class="mt-20"><b>Language:</b> Indonesian, Sundanese, English, French</p>
							<a href="/guide-detail/1" class="genric-btn primary-border medium mt-20">Details</a>
						</div>								
					</div>
				</div>
				<div class="col-lg-3 pb-40">
					<div class="widget-wrap">
						<div class="single-sidebar-widget user-info-widget">
							<img src="../../../assets1/img/blog/s-img.jpg" alt="" style="border-radius: 100%;">
							<a href="#"><h4>Jennifer Doe</h4></a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>				
							</div>
							<p class="mt-20"><b>Language:</b> Indonesian, Javanese, Mandarin, Korean</p>
							<a href="/guide-detail/1" class="genric-btn primary-border medium mt-20">Details</a>
						</div>								
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- End guide list -->

@endsection