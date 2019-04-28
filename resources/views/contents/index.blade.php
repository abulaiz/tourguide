@extends('layouts.master')

@section('content')

			@if(Auth::check())
				@include('sections.findGuide')
			@else
				@include('sections.offerTourist')
			@endif

			<!-- Start popular-destination Area -->
			<section class="popular-destination-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Popular Destination</h1>
		                        <p>Here are some popular destinations in our city.</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="../../../assets1/img/hill.jpg" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">See More</a>			
									<h4>Moko Hill</h4>
									<p>Lembang</p>			
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="../../../assets1/img/bandung3.jpg" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">See More</a>			
									<h4>Dream City</h4>
									<p>Braga Street</p>			
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="../../../assets1/img/floating-market.jpg" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">See More</a>			
									<h4>Floating Market</h4>
									<p>Lembang</p>			
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End popular-destination Area -->
			

			<!-- Start price Area -->
			<section class="destinations-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-40 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Popular Gift Shop</h1>
		                        <p>Need something memorable? Visit our popular gift shop!</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="../../../assets1/img/coffee-shop.jpg" alt="">
								</div>
								<div class="details">
									<h4>Djawa Coffe Shop</h4>
									<p>
										Braga
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Coffee 1</span>
											<span>Rp98000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Coffee 2</span>
											<span>Rp21000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Coffee 3</span>
											<span>Rp14000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>And many more</span>
											<a href="#" class="price-btn">See more</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="../../../assets1/img/cake-shop.jpg" alt="">
								</div>
								<div class="details">
									<h4>Kartika Sari</h4>
									<p>
										Town Square
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Cake 1</span>
											<span>Rp5000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Cake 2</span>
											<span>Rp9000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Cake 3</span>
											<span>Rp6000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>And many more</span>
											<a href="#" class="price-btn">See more</a>
										</li>										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="../../../assets1/img/shoe-shop.jpg" alt="">
								</div>
								<div class="details">
									<h4>Cibaduyut Shoe Shop</h4>
									<p>
										Cibaduyut
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Shoe 1</span>
											<span>Rp200000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Shoe 2</span>
											<span>Rp5000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Shoe 3</span>
											<span>Rp8000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>And many more</span>
											<a href="#" class="price-btn">See more</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="../../../assets1/img/shoe-shop.jpg" alt="">
								</div>
								<div class="details">
									<h4>Cibaduyut Shoe Shop</h4>
									<p>
										Cibaduyut
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Shoe 1</span>
											<span>Rp5000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Shoe 2</span>
											<span>7000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Shoe 3</span>
											<span>Rp4000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>And many more</span>
											<a href="#" class="price-btn">See more</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="../../../assets1/img/cake-shop.jpg" alt="">
								</div>
								<div class="details">
									<h4>Kartika Sari</h4>
									<p>
										Town Square
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Cake 1</span>
											<span>12000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Cake 2</span>
											<span>Rp8000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Cake 3</span>
											<span>Rp5000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>And many more</span>
											<a href="#" class="price-btn">See more</a>
										</li>										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="../../../assets1/img/coffee-shop.jpg" alt="">
								</div>
								<div class="details">
									<h4>Djawa Coffe Shop</h4>
									<p>
										Braga
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Coffee 1</span>
											<span>Rp5000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Coffee 2</span>
											<span>Rp12000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Coffee 3</span>
											<span>Rp18000</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>And many more</span>
											<a href="#" class="price-btn">See more</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>																														
					</div>
				</div>	
			</section>
			<!-- End price Area -->
			
			@if(!Auth::check())
			<!-- Start other-issue Area -->
			<section class="home-about-area">
				<div class="container-fluid">
					<div class="row align-items-center justify-content-end">
						<div class="col-lg-6 col-md-12 home-about-left">
							<h1>
								Interested in becoming a Tour Guide? <br>
								Feel free to ask us. <br>
								It'll be great
							</h1>
							<p>
								Tour guide is a person who provides assistance, information on cultural, historical and contemporary heritage to people on organized tours and individual clients at educational establishments, religious and historical sites, museums, and at venues of other significant interest, attractions sites.
							</p>
							<a href="#" class="primary-btn text-uppercase">apply as a tour guide</a>
						</div>
						<div class="col-lg-6 col-md-12 home-about-right no-padding">
							<img class="img-fluid" src="../../../assets1/img/tour-guide.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End other-issue Area -->
			@endif			
@endsection

@section('customJS')
	@if(Session::has('_e'))
	<link rel="stylesheet" href="../../../ext/css/toastr.css">
	<script src="../../../ext/js/toastr.min.js" type="text/javascript"></script>

	<script type="text/javascript">
      toastr.success('You can login now :).', 'Sign Up Success!', {
        positionClass: 'toast-bottom-right', containerId: 'toast-bottom-right', 'showMethod': 'slideDown', 'hideMethod': 'slideUp', timeOut: 6000});		
	</script>
	@endif
@endsection