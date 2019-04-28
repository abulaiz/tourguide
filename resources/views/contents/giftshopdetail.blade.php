@extends('layouts.master')

@section('content')

	<!-- start banner Area -->
	<section class="relative about-banner">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Gift Shop Detail			
					</h1>	
					<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Destination </a> <span class="lnr lnr-arrow-right"></span> <a href="/destination"> Chinatown Bandung</a></p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<img class="img-fluid" src="../../../assets1/img/chinatown.jpg" alt="">
							</div>									
						</div>
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#">Building,</a></li>
								<li><a href="#">Architecture,</a></li>
								<li><a href="#">Historical,</a></li>
								<li><a href="#">Culture,</a></li>
								<li><a href="#">Street</a></li>
							</ul>
							<div class="user-details row">
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">28 Apr, 2019</a> <span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<h3 class="mt-20 mb-20">Chinatown Bandung</h3>
							<p class="excert">
								So, if Semarang has its Pasar Semawis, and Jakarta has its Glodok area, the lovely city of Bandung now also has its own oriental touch provided by communities of Chinese descent living along the streets of Jalan Kelenteng and the adjacent Jalan Cibadak. This is where annual rituals such as 'Imlek' (the Chinese New Year) and the 'Cap Go Meh' (the 15th Day of the New Year) are centered and celebrated with vibrant festivities. Adding to the already unique oriental ambience in the area, this August 2017, a new attraction has been added, which is simply called: "The Chinatown". It is a shopping and culinary attractiion that in addition gives you an authentic feel of an old Chinese settlement which also provides a brief overview of how the Chinese first came to settle in this cool hilltown.
							</p>
							<p>
								Bandung Chinatown is located not too far from the Satya Budhi Temple, the oldest and largest Chinese Temple in Bandung built in 1896, located at Jalan Kelenteng Street No.41. As a matter of fact, the street is named after the temple itselfm, which in the local language and in Bahasa Indonesia, the word Kelenteng literally means Chinese Temple.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="single-price">
						<h4>For Sale</h4>
						<ul class="price-list">
							<li class="d-flex justify-content-between align-items-center">
								<span>Soto Tasik Djempol</span>
								<span class="genric-btn disabled">Rp12000</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Bolu Bakar Tunggal</span>
								<span class="genric-btn disabled">Rp15000</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Terminale Gelato</span>
								<span class="genric-btn disabled">Rp24000</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Shaokaw</span>
								<span class="genric-btn disabled">Rp18000</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Es Campur Pak Oyen</span>
								<span class="genric-btn disabled">Rp8000</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8 mx-auto">
					<h3 class="pb-30">Location</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7767198208694!2d107.59092901477293!3d-6.917276395001957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e61740822c0d%3A0xf0bad8c42a8715da!2sChinatown+Bandung!5e0!3m2!1sen!2sid!4v1556482562489!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 400px" allowfullscreen></iframe>
				</div>
			</div>
			<!-- <div class="section-top-border col-lg-8 mx-auto">
				<h3>Image Gallery</h3>
				<div class="row gallery-item">
					<div class="col-md-4">
						<a href="https://www.pegipegi.com/travel/wp-content/uploads/2017/04/gedung-sate.jpg" class="img-gal" title="Gedung sate, Bandung"><div class="single-gallery-image" style="background: url(https://www.pegipegi.com/travel/wp-content/uploads/2017/04/gedung-sate.jpg);"></div></a>
					</div>
					<div class="col-md-4">
						<a href="https://img.inews.id/media/822/files/inews_new/2018/05/29/gedung_sate1.jpg" class="img-gal" title="Gedung sate, Bandung"><div class="single-gallery-image" style="background: url(https://img.inews.id/media/822/files/inews_new/2018/05/29/gedung_sate1.jpg);"></div></a>
					</div>
					<div class="col-md-4">
						<a href="https://cdn.sindonews.net/dyn/620/content/2018/10/07/29/1344198/gedung-sate-saksi-gugurnya-7-pegawai-pekerjaan-umum-J6r.jpg" class="img-gal" title="Gedung sate, Bandung"><div class="single-gallery-image" style="background: url(https://cdn.sindonews.net/dyn/620/content/2018/10/07/29/1344198/gedung-sate-saksi-gugurnya-7-pegawai-pekerjaan-umum-J6r.jpg);"></div></a>
					</div>
					<div class="col-md-6">
						<a href="https://www.wonderfulwestjava.com/wp-content/uploads/gedung-sate.jpg" class="img-gal" title="Gedung sate, Bandung"><div class="single-gallery-image" style="background: url(https://www.wonderfulwestjava.com/wp-content/uploads/gedung-sate.jpg);"></div></a>
					</div>
					<div class="col-md-6">
						<a href="http://www.prfmnews.com/images/15366307528_f999ffc819_b.jpg" class="img-gal" title="Gedung sate, Bandung"><div class="single-gallery-image" style="background: url(http://www.prfmnews.com/images/15366307528_f999ffc819_b.jpg);"></div></a>
					</div>
					<div class="col-md-4">
						<a href="https://media-cdn.tripadvisor.com/media/photo-s/06/16/f7/91/gedung-sate.jpg" class="img-gal" title="Gedung sate, Bandung"><div class="single-gallery-image" style="background: url(https://media-cdn.tripadvisor.com/media/photo-s/06/16/f7/91/gedung-sate.jpg);"></div></a>
					</div>
					<div class="col-md-4">
						<a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJX5_CxTTTUZbbkyU4UpGr7kxL_ts-WgUbl0X4-TOPZG83YQDL4A" class="img-gal" title="Gedung sate, Bandung"><div class="single-gallery-image" style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJX5_CxTTTUZbbkyU4UpGr7kxL_ts-WgUbl0X4-TOPZG83YQDL4A);"></div></a>
					</div>
					<div class="col-md-4">
						<a href="https://www.pegipegi.com/travel/wp-content/uploads/2018/03/shutterstock_1042684936.jpg" class="img-gal" title="Gedung sate, Bandung"><div class="single-gallery-image" style="background: url(https://www.pegipegi.com/travel/wp-content/uploads/2018/03/shutterstock_1042684936.jpg);"></div></a>
					</div>
				</div>
			</div> -->
		</div>	
	</section>
	<!-- End post-content Area -->

@endsection