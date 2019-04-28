@php $has_login = Auth::check(); @endphp

<header id="header">
	<div class="header-top">
		<div class="container">
  		<div class="row align-items-center">
  			<div class="col-lg-6 col-sm-6 col-6 header-top-left">	
  				@if($has_login)
				<ul>
					<li class="text-white" style="font-weight: bold;">Hi, {{ Auth::user()->name }} !</li>
				</ul>	  	
				@endif
  			</div>
  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
				<div class="header-social">
				  <a class="sel-language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				   English
				  </a>
				  <div class="dropdown-menu dropdown-menu-right">
				  	<a href="#" style="color: black; font-size: 12px; padding: 5px;">Japanese</a>
				  </div>				
				</div>
  			</div>
  		</div>			  					
		</div>
	</div>
	<div class="container main-menu">
		<div class="row align-items-center justify-content-between d-flex">
	      <div id="logo">
	        <a href="index.html"><img src="../../../assets1/img/logo.png" alt="" title="" /></a>
	      </div>
	      <nav id="nav-menu-container">
	        <ul class="nav-menu">
	          <li><a href="/">Home</a></li>
	          <li><a href="/destination">Destinations</a></li>
	          <li><a href="/gift-shop">Gift Shop</a></li>
	          <li><a href="/apply-tour-guide">Join As Tour Guide</a></li>
			  @if ($has_login)
	          <li class="menu-has-children"><a href="#">My Account</a>
	            <ul>
	              <li><a href="#">Change Password</a></li>
	              <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout</a></li>
	            </ul>
	          </li>	
			  @else
			  	<li><a data-toggle="modal" data-target="#login" data-backdrop="static" data-keyboard="false" href="#">Login</a></li>
			  @endif
	        </ul>
	      </nav><!-- #nav-menu-container -->					      		  
		</div>
	</div>
</header><!-- #header -->

<!-- This iss for make logout request -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>