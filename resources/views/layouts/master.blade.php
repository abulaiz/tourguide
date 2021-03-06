	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
	@include('layouts.head')
	</head>
		<body>	
			@include('layouts.header')
					

			@yield('content')

			@include('modals.login')

			@include('layouts.footer')

			<script src="../../../assets1/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="../../../assets1/js/popper.min.js"></script>
			<script src="../../../assets1/js/vendor/bootstrap.min.js"></script>			
 			<script src="../../../assets1/js/jquery-ui.js"></script>					
  			<script src="../../../assets1/js/easing.min.js"></script>			
			<script src="../../../assets1/js/hoverIntent.js"></script>
			<script src="../../../assets1/js/superfish.min.js"></script>	
			<script src="../../../assets1/js/jquery.ajaxchimp.min.js"></script>
			<script src="../../../assets1/js/jquery.nice-select.min.js"></script>					
			<script src="../../../assets1/js/jquery.magnific-popup.min.js"></script>						
			<script src="../../../assets1/js/owl.carousel.min.js"></script>							
			<script src="../../../assets1/js/mail-script.js"></script>	
			<script src="../../../assets1/js/main.js"></script>	
			@yield('customJS')

		</body>
	</html>