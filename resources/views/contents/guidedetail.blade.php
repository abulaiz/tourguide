@extends('layouts.master')

@section('content')

	<!-- Start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Tour Guide Detail
					</h1>	
					<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/find-guide"> Tour Guide</a> <span class="lnr lnr-arrow-right"></span> <a href="#">Guide Detail</a></p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start insurence-one Area -->
	<section class="insurence-one-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 insurence-left">
					<img class="img-fluid img-one" src="../../../assets1/img/blog/s-img.jpg" alt="" style="border-radius: 100%; max-width: 300px">
				</div>
				<div class="col-lg-8 insurence-right">
					<h6 class="text-uppercase">Tour Guide</h6>
					<h1>Jennifer Doe</h1>
					<div class="star" style="margin-top: -12px">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>				
					</div>
					<p class="mt-20">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.
					</p>
					<div class="list-wrap">
						<ul>
							<li><b>Gender:</b> Female</li>
							<li><b>Age:</b> 24 y.o</li>
							<li><b>Language Ability:</b> Indonesian, Javanese, Mandarin, Korean</li>
							<li><b>Rate:</b> Rp200,000/day</li>
							<li style="list-style: none"><a href="#" class="genric-btn primary-border circle arrow float-right" data-toggle="modal" data-target="#book-dialog">Book Now <span class="lnr lnr-arrow-right"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- End insurence-one Area -->

	<!-- Start testimonial Area -->
	<section class="testimonial-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Testimonial from our satisfied Clients</h1>
						<p>Here are some testimonials for our Tour Guide from satisfied Clients</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-testimonial">
					<?php for ($i = 1; $i < 7; $i++) { ?>
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="../../../assets1/img/elements/user1.png" alt="">
							</div>
							<div class="desc">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.		     
								</p>
								<h4>Harriet Maxwell</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>				
								</div>	
							</div>
						</div>
					<?php } ?>                  		                    
				</div>
			</div>
		</div>
	</section>
	<!-- End testimonial Area -->

	<!-- Start modal Area -->

	<div class="modal fade" id="book-dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Book Guide</h5>
					<button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{route('book')}}">
						@csrf
						<div class="mt-10">
							<label>Start date</label>
							<input type="date" name="START_DATE" placeholder="Start date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start date'" required class="single-input" id="start-date" min="{{date('Y-m-d', strtotime('+1 Days'))}}" onchange="return setMinEndDate()">
						</div>
						<div class="mt-10">
							<label>End date</label>
							<input type="date" name="END_DATE" placeholder="End date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'End date'" required class="single-input" id="end-date" onchange="return setDuration()">
						</div>
						<div class="mt-10">
							<label>Duration</label>
							<input type="text" name="DURASI" placeholder="Duration" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Duration'" readonly class="single-input" id="duration">
						</div>
						<div class="mt-10">
							<button class="genric-btn primary float-right">Book</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- End modal Area -->

@endsection

@section('customJS')

	<script>
		var startDate, date, endDate;
		function setMinEndDate() {
			startDate = $("#start-date").val();
			date = new Date(startDate);
			if ((date.getMonth() + 1) < 10) {
				var month = '0' + (date.getMonth() + 1);
			} else {
				var month = (date.getMonth() + 1)
			}
			endDate = date.getFullYear() + '-' + month + '-' + (date.getDate() + 1);

			$("#end-date").attr('min', endDate);
		}

		function setDuration() {
			setMinEndDate();
			var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
			var firstDate = new Date(startDate);
			var secondDate = new Date($("#end-date").val());
			console.log(firstDate);
			console.log(endDate);

			var diffDays = Math.round(Math.abs((secondDate.getTime() - firstDate.getTime())/(oneDay)));
			$("#duration").val(diffDays + ' day(s)');
		}
	</script>

@endsection