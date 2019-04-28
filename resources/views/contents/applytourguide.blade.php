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
								<input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
							</div>
							<div class="mt-20">
								<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
							</div>
							<div class="mt-20 single-element-widget">
								<div class="switch-wrap d-flex">
									<div class="primary-radio">
										<input type="radio" id="default-radio" name="gender" required>
										<label for="default-radio"></label>
									</div>
									<p style="margin-left: 10px; margin-top: -2px;">Laki-laki</p>

									<div class="primary-radio" style="margin-left: 40px;">
										<input type="radio" id="default-radio2" name="gender" required>
										<label for="default-radio2"></label>
									</div>
									<p style="margin-left: 10px; margin-top: -2px;">Perempuan</p>
								</div>
							</div>
							<div class="mt-20">
								<input type="text" name="TEMPAT_LAHIR" placeholder="Tempat lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tempat lahir'" required class="single-input">
							</div>
							<div class="mt-20">
								<input type="date" name="TANGGAL_LAHIR" placeholder="Tanggal lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal lahir'" required class="single-input">
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
								<textarea class="single-textarea" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required></textarea>
							</div>
							<div class="mt-20">
								<input type="text" class="single-input" placeholder="Kemampuan bahasa">
							</div>
							<div class="mt-20">
								<div class="default-select" id="default-select3">
									<select class="form-select">
										<option value selected disabled>Pendidikan Terakhir</option>
										<option value="1">SD</option>
										<option value="1">SMP/SLTP Sederajat</option>
										<option value="1">SMA/SLTA Sederajat</option>
										<option value="1">D1</option>
										<option value="1">D2</option>
										<option value="1">D3</option>
										<option value="1">D4</option>
										<option value="1">S1</option>
										<option value="1">S2</option>
										<option value="1">S3</option>
										<option value="1">Pendidikan Vokasi</option>
										<option value="1">Dll.</option>
									</select>
								</div>
							</div>
							<div class="mt-20">
								<input type="file" name="SERTIFIKAT" class="single-input" placeholder="Sertifikat/Lisensi">
							</div>
							<!-- <div class="mt-20">
								<input type="password" name="PASSWORD" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input" id="password" onkeyup="return checkPassword()">
							</div>
							<div class="mt-20">
								<input type="password" name="COMFIRM_PASSWORD" placeholder="Confirm password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm password'" required class="single-input" id="retype-password" onkeyup="return checkPassword()">
								<small class="text-danger d-none" id="password-alert">Password didn't match</small>
							</div> -->
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