@extends('layouts.master')

@section('content')

	<!-- start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Destinations			
					</h1>	
					<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Destinations</a></p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90 ">
		<div class="container">
			<div class="row">		
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
						    <a href="#" target="_blank">
						      <div class="thumb">
						  		 <img class="content-image img-fluid d-block mx-auto" src="../../../assets1/img/nature.jpg" alt="">
						  	  </div>
						      <div class="content-details">
						        <h4 class="content-title mx-auto text-uppercase">Nature</h4>
						        <span></span>								        
						        <p>Enjoy the best scenery</p>
						      </div>
						    </a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
						    <a href="#" target="_blank">
						      <div class="thumb">
						  		 <img class="content-image img-fluid d-block mx-auto" src="../../../assets1/img/historical.jpg" alt="">
						  	  </div>
						      <div class="content-details">
						        <h4 class="content-title mx-auto text-uppercase">Historical</h4>
						        <span></span>								        
						        <p>Be a part of history</p>
						      </div>
						    </a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
						    <a href="#" target="_blank">
						      <div class="thumb">
						  		 <img class="content-image img-fluid d-block mx-auto" src="../../../assets1/img/fashion.jpg" alt="">
						  	  </div>
						      <div class="content-details">
						        <h4 class="content-title mx-auto text-uppercase">Fashion</h4>
						        <span></span>
						        <p>Let the style fulfill you</p>
						      </div>
						    </a>
						</div>
					</div>
				</div>												
			</div>
		</div>	
	</section>
	<!-- End top-category-widget Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto posts-list">
					<div class="single-post row">
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#">View,</a></li>
								<li><a href="#">Scenery,</a></li>
								<li><a href="#">Mountain,</a></li>
								<li><a href="#">Highland</a></li>
							</ul>
							<div class="user-details row">
								<!-- <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span class="lnr lnr-user"></span></p> -->
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">28 Apr, 2019</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 ">
							<div class="feature-img">
								<img class="img-fluid" src="../../../assets1/img/tangkuban-parahu.jpg" alt="">
							</div>
							<a class="posts-title" href="/destination-detail/1"><h3>Tangkuban Parahu</h3></a>
							<p class="excert">
								Active volcanic peak featuring 3 craters & a cavern situated 30 km north of the city of Bandung in the direction of Lembang, with guided tours & food/souvenir vendors.
							</p>
							<a href="/destination-detail/1" class="primary-btn">View More</a>
						</div>
					</div>
					<div class="single-post row">
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#">Building,</a></li>
								<li><a href="#">Architecture,</a></li>
								<li><a href="#">Historical</a></li>
							</ul>
							<div class="user-details row">
								<!-- <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span class="lnr lnr-user"></span></p> -->
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">28 Apr, 2019</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 ">
							<div class="feature-img">
								<img class="img-fluid" src="../../../assets1/img/gedung-sate.jpg" alt="">
							</div>
							<a class="posts-title" href="/destination-detail/1"><h3>Gedung Sate</h3></a>
							<p class="excert">
								Grand Dutch colonial administration building dating to the 1920s, now West Java's government house. Gedung Sate is a public building in Bandung, West Java, Indonesia. It was designed according to a neoclassical design incorporating native Indonesian elements by Dutch architect J. Gerber to be the seat of the Dutch East Indies department of State Owned Enterprises; the building was completed in 1920.
							</p>
							<a href="/destination-detail/1" class="primary-btn">View More</a>
						</div>
					</div>
					<div class="single-post row">
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#">Indoor,</a></li>
								<li><a href="#">Theme Park,</a></li>
								<li><a href="#">Rides,</a></li>
							</ul>
							<div class="user-details row">
								<!-- <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span class="lnr lnr-user"></span></p> -->
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">28 Apr, 2019</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<div class="feature-img">
								<img class="img-fluid" src="../../../assets1/img/trans-studio.jpg" alt="">
							</div>
							<a class="posts-title" href="/destination-detail/1"><h3>Trans Studio Bandung</h3></a>
							<p class="excert">
								Family-focused indoor theme park with thrill rides, a theater & play areas for younger children.
							</p>
							<a href="/destination-detail/1" class="primary-btn">View More</a>
						</div>
					</div>
					<div class="single-post row">
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#">Street,</a></li>
								<li><a href="#">City,</a></li>
								<li><a href="#">Views,</a></li>
								<li><a href="#">Lifestyle</a></li>
							</ul>
							<div class="user-details row">
								<!-- <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span class="lnr lnr-user"></span></p> -->
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">28 Apr, 2019</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<div class="feature-img">
								<img class="img-fluid" src="../../../assets1/img/bandung3.jpg" alt="">
							</div>
							<a class="posts-title" href="/destination-detail/1"><h3>Braga Street</h3></a>
							<p class="excert">
								Braga Street is a small street in the center of Bandung, Indonesia, which was famous in the 1920s as a promenade street. Chic cafes, boutiques and restaurants with European.
							</p>
							<a href="/destination-detail/1" class="primary-btn">View More</a>
						</div>
					</div>
					<div class="single-post row">
						<div class="col-lg-3 col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#">Museum,</a></li>
								<li><a href="#">Historical,</a></li>
								<li><a href="#">Building,</a></li>
								<li><a href="#">Architecture</a></li>
							</ul>
							<div class="user-details row">
								<!-- <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span class="lnr lnr-user"></span></p> -->
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">28 Apr, 2019</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<div class="feature-img">
								<img class="img-fluid" src="../../../assets1/img/geological-museum.jpg" alt="">
							</div>
							<a class="posts-title" href="/destination-detail/1"><h3>Bandung Geological Museum</h3></a>
							<p class="excert">
								1928 museum with exhibits ranging from rocks & minerals to invertebrate & vertebrate fossils. The Bandung Geological Museum opened in Bandung, Indonesia in 1928. On December 10, 1871, six meteorites fell in Sindanglaut, West Java, Indonesia. This rare fall of a LL6 chondrite included an 11.5 kg TKW that is held by the Bandung Geological Museum and the Paris Museum of History.
							</p>
							<a href="/destination-detail/1" class="primary-btn">View More</a>
						</div>
					</div>														
					<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Previous">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-left"></span>
									</span>
								</a>
							</li>
							<li class="page-item active"><a href="#" class="page-link">01</a></li>
							<li class="page-item"><a href="#" class="page-link">02</a></li>
							<li class="page-item"><a href="#" class="page-link">03</a></li>
							<li class="page-item"><a href="#" class="page-link">04</a></li>
							<li class="page-item"><a href="#" class="page-link">05</a></li>
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Next">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-right"></span>
									</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- <div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>

						<div class="single-sidebar-widget popular-post-widget">
							<h4 class="popular-title">Popular Posts</h4>
							<div class="popular-post-list">
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="../../../assets1/img/blog/pp1.jpg" alt="">
									</div>
									<div class="details">
										<a href="/destination-detail/1"><h6>Space The Final Frontier</h6></a>
										<p>02 Hours ago</p>
									</div>
								</div>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="../../../assets1/img/blog/pp2.jpg" alt="">
									</div>
									<div class="details">
										<a href="/destination-detail/1"><h6>The Amazing Hubble</h6></a>
										<p>02 Hours ago</p>
									</div>
								</div>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="../../../assets1/img/blog/pp3.jpg" alt="">
									</div>
									<div class="details">
										<a href="/destination-detail/1"><h6>Astronomy Or Astrology</h6></a>
										<p>02 Hours ago</p>
									</div>
								</div>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="../../../assets1/img/blog/pp4.jpg" alt="">
									</div>
									<div class="details">
										<a href="/destination-detail/1"><h6>Asteroids telescope</h6></a>
										<p>02 Hours ago</p>
									</div>
								</div>															
							</div>
						</div>
						<div class="single-sidebar-widget ads-widget">
							<a href="#"><img class="img-fluid" src="../../../assets1/img/blog/ads-banner.jpg" alt=""></a>
						</div>
						<div class="single-sidebar-widget post-category-widget">
							<h4 class="category-title">Post Catgories</h4>
							<ul class="cat-list">
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Technology</p>
										<p>37</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Lifestyle</p>
										<p>24</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Fashion</p>
										<p>59</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Art</p>
										<p>29</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Food</p>
										<p>15</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Architecture</p>
										<p>09</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Adventure</p>
										<p>44</p>
									</a>
								</li>															
							</ul>
						</div>	
						<div class="single-sidebar-widget newsletter-widget">
							<h4 class="newsletter-title">Newsletter</h4>
							<p>
								Here, I focus on a range of items and features that we use in life without
								giving them a second thought.
							</p>
							<div class="form-group d-flex flex-row">
								<div class="col-autos">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
										</div>
										<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
									</div>
								</div>
								<a href="#" class="bbtns">Subcribe</a>
							</div>	
							<p class="text-bottom">
								You can unsubscribe at any time
							</p>								
						</div>
						<div class="single-sidebar-widget tag-cloud-widget">
							<h4 class="tagcloud-title">Tag Clouds</h4>
							<ul>
								<li><a href="#">Technology</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Architecture</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Food</a></li>
								<li><a href="#">Technology</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Art</a></li>
								<li><a href="#">Adventure</a></li>
								<li><a href="#">Food</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Adventure</a></li>
							</ul>
						</div>								
					</div>
				</div> -->
			</div>
		</div>	
	</section>
	<!-- End post-content Area -->

@endsection