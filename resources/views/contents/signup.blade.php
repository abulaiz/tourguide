@extends('layouts.master')
@section('page_title', 'Sign Up')

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
						<form action="{{ route('signup') }}" method="POST">
							@csrf
							<div class="mt-20">
								<input type="text" name="name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
							</div>
							<div class="mt-20">
								<input type="email" name="email" autocomplete="off" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
							</div>
                            @if(Session::has('_f'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>Email has registered</strong>
                                </span>
                            @endif							

							<div class="mt-20">
								<input type="text" name="phone" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'" required class="single-input">
							</div>

							<div class="input-group-icon mt-20">
								<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select2">
									<select name="country">
										<option value="" selected disabled>Country</option>
										<option value="United States">United States</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="Singapore">Singapore</option>
										<option value="Canada">Canada</option>
									</select>
								</div>
							</div>

							<div class="mt-20">
								<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input" id="password" onkeyup="return checkPassword()">
							</div>

							<div class="mt-20">
								<input type="password" placeholder="Confirm password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm password'" required class="single-input" id="retype-password" onkeyup="return checkPassword()">
								<small class="text-danger d-none" id="password-alert">Password didn't match</small>
							</div>

							<div class="mt-30">
								<input type="submit" name="submit" class="genric-btn primary circle pull-right" value="Sign Up">
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