<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Towy</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="{{ asset('font-assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('font-assets/css/animations.css') }}">
	<link rel="stylesheet" href="{{ asset('font-assets/css/fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('font-assets/css/main.css') }}" id="color-switcher-link">
	<script src="{{ asset('font-assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>

	<!--[if lt IE 9]>
		<script src="{{ asset('font-assets/js/vendor/html5shiv.min.js') }}"></script>
		<script src="{{ asset('font-assets/js/vendor/respond.min.js') }}"></script>
		<script src="{{ asset('font-assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul>
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

            <section class="intro_section page_mainslider ds">
				<img src="{{ asset('font-assets/images/slide01.jpg') }}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="slide_description_wrapper">
								<div class="slide_description">
									<div class="intro-layer to_animate" data-animation="fadeInUp">
										<p class="big grey">
											Une épave qui encombre ?
											<br>
											<strong class="highlight">Laissez-nous vous libérer de l'espace !</strong>
										</p>
									</div>
									<div class="intro-layer to_animate" data-animation="fadeInUp">
										<p class="lightfont">
											Épaviste agrée intervenant GRATUITEMENT et RAPIDEMENT en Ile-De-France
											<br> à l'emplacement de votre choix.
										</p>
									</div>
								</div>
								<!-- eof .slide_description -->
							</div>
							<!-- eof .slide_description_wrapper -->
						</div>
						<!-- eof .col-* -->
					</div>
					<!-- eof .row -->
				</div>
				<!-- eof .container -->
				<div class="scroll-icon greylinks">
					<div class="to_animate" data-animation="floating">
						<a href="#about" class="to_animate" data-animation="floating">
							<i class="towyicon-mouse grey"></i>
							Scroll
						</a>
					</div>
				</div>
			</section>
			<!-- template sections -->

			<header class="page_header header_darkgrey header_logo_center toggler_right menu_justify">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 text-left text-md-center">
							<div class="logo_wrapper">

								<a href="./" class="logo">
									<img src="{{ asset('font-assets/images/logo.png') }}" alt="">
									<span class="logo_text">
										<span class="highlight">24/7 TOWY</span>
										<span>Towing Services</span>
									</span>
								</a>

							</div>
							<!-- header toggler -->
							<span class="toggle_menu">
								<span></span>
							</span>
					<nav>
                        @include('front.partials.navbar')
                    </nav>
						</div>
					</div>
				</div>
			</header>

            @yield('content')

            <footer>
                @include('front.partials.footer')
            </footer>



			<section class="ds ms page_copyright section_padding_15">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="lightfont">24/7 Towy - Towing Services
								<i class="fa fa-heart highlight" aria-hidden="true"></i> All Rights Reserved &copy; 2017</p>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="{{ asset('font-assets/js/compressed.js') }}"></script>
	<script src="{{ asset('font-assets/js/main.js') }}"></script>
	<script src="{{ asset('font-assets/js/vendor/jquery-jvectormap-2.0.3.min.js') }}"></script>
	<script src="{{ asset('font-assets/js/vendor/jquery-jvectormap-world-merc.js') }}"></script>


</body>

</html>
