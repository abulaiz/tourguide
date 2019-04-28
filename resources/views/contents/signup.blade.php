@extends('layouts.master')

@section('content')

	<!-- start banner Area -->
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Sign Up			
					</h1>	
					<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Sign Up</a></p>
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
				            <p>Sign Up here to unlock more features.<br>Already have an account? <a href="#">Sign In</a></p>
				        </div>
				    </div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 mx-auto">
						<form action="#" method="POST">
							<div class="mt-20">
								<input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
							</div>
							<div class="mt-20">
								<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
							</div>
							<div class="mt-20">
								<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
							</div>
							<div class="mt-20">
								<input type="text" name="PHONE" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'" required class="single-input">
							</div>
							<!-- <div class="input-group-icon mt-20">
								<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
								<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
							</div> -->
							<!-- <div class="input-group-icon mt-20">
								<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
									<select>
										<option value="1">City</option>
										<option value="1">Dhaka</option>
										<option value="1">Dilli</option>
										<option value="1">Newyork</option>
										<option value="1">Islamabad</option>
									</select>
								</div>
							</div> -->
							<div class="input-group-icon mt-20">
								<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select2">
									<select>
										<option value selected disabled>Country</option>
										<option value="1">United States</option>
										<option value="1">United Kingdom</option>
										<option value="1">Singapore</option>
										<option value="1">Canada</option>
									</select>
								</div>
							</div>
							<div class="mt-20">
								<input type="password" name="PASSWORD" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input" id="password" onkeyup="return checkPassword()">
							</div>
							<div class="mt-20">
								<input type="password" name="COMFIRM_PASSWORD" placeholder="Confirm password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm password'" required class="single-input" id="retype-password" onkeyup="return checkPassword()">
								<small class="text-danger d-none" id="password-alert">Password didn't match</small>
							</div>
							<div class="mt-30">
								<a href="#" class="genric-btn primary circle pull-right">Sign Up</a>
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
	<script src="../../../assets1/js/view/signup.js"></script>
@endsection