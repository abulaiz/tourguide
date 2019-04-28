@extends('layouts.master')

@section('content')

	<!-- start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Apply as A Tour Guide		
					</h1>	
					<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Apply Tour Guide</a></p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<div class="row d-flex justify-content-center">
				    <div class="menu-content pb-10 col-lg-8">
				        <div class="title text-center">
				            <!-- <h1 class="mb-10">Sign Up</h1> -->
				            <p>Register yourself as our official Tour Guide.<br>Please fill all the field below.</p>
				        </div>
				    </div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 mx-auto">
						<form action="#" method="POST">
							<div class="mt-20">
								<input type="text" name="name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required class="single-input">
							</div>
							<div class="mt-20 single-element-widget">
								<div class="switch-wrap d-flex">
									<div class="primary-radio">
										<input type="radio" id="default-radio" name="gender" required>
										<label for="default-radio"></label>
									</div>
									<p style="margin-left: 10px; margin-top: -2px;">Male</p>

									<div class="primary-radio" style="margin-left: 40px;">
										<input type="radio" id="default-radio2" name="gender" required>
										<label for="default-radio2"></label>
									</div>
									<p style="margin-left: 10px; margin-top: -2px;">Female</p>
								</div>
							</div>
							<div class="mt-20">
								<input type="text" name="TEMPAT_LAHIR" placeholder="Birth Place" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Birth Place'" required class="single-input">
							</div>
							<div class="mt-20">
								<label>Birth Date</label>
								<input type="date" name="TANGGAL_LAHIR" placeholder="Birth Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Birth Date'" required class="single-input">
							</div>
							<div class="mt-20">
								<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
							</div>
							<div class="mt-20">
								<input type="text" name="PHONE" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'" required class="single-input">
							</div>

							<div class="mt-20">
								<textarea class="single-textarea" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required></textarea>
							</div>

							<div class="mt-20">
								<div class="form-select" id="default-select">
									<select class="form-select">
										<option value="" selected disabled>Education</option>
										<option value="High School or lower">High School or lower</option>
										<option value="Diploma / Degree">Diploma / Degree</option>
										<option value="Post Graduate">Post Graduate</option>
										<option value="Etc">Etc</option>
									</select>
								</div>
							</div>
							<div class="mt-20">
								<label>Attach Certificate</label>
								<input type="file" name="SERTIFIKAT" class="single-input" placeholder="Your Certificates">
							</div>

							<div class="mt-30">
								<a href="#" class="genric-btn primary circle pull-right">Propose</a>
							</div>

							<div class="mt-20">
		                        <select style="display: none;" multiple id="selectize-multiple2">
		                            <option value="">Your Language Ability</option>
		                            <option value="1">English</option>
		                            <option value="2">German</option>
		                            <option value="3">Japanese</option>
		                            <option value="4">Mandarin</option>
		                        </select>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

@endsection

@section('customJS')
	<link rel="stylesheet" type="text/css" href="../../../ext/css/selectize.css">
	<link rel="stylesheet" type="text/css" href="../../../ext/css/selectize.default.css">
	<link rel="stylesheet" type="text/css" href="../../../ext/css/selectize.min.css">
	<script src="../../../ext/js/selectize.min.js" type="text/javascript"></script>  

	<script src="../../../assets1/js/view/signup2.js"></script>
@endsection