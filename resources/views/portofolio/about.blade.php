<!DOCTYPE html>
<html>
	<head>
		<title>About</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="/assets/fonts/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/fonts/pe-icon/pe-icon.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="/assets/vendors/bootstrap/grid.css">
		<link rel="stylesheet" type="text/css" href="/assets/vendors/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/vendors/swiper/swiper.css">
		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:400,700">
		<link rel="stylesheet" type="text/css" id="app-stylesheet" href="/assets/css/main.css"><!--[if lt]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div class="page-wrap" id="root">
			
			<!-- header -->
			<header class="header header--fixed">
				<div class="header__inner">
					<div class="navbar-toggle" id="fs-button">
						<div class="navbar-icon"><span></span></div>
					</div>
				</div>
				
				<!-- fullscreenmenu__module -->
				<div class="fullscreenmenu__module" trigger="#fs-button">
					
					<!-- overlay-menu -->
					<nav class="overlay-menu">
						
						<!--  -->
						<ul class="wil-menu-list">
							<li><a href="{{ url('/') }}">Home</a>
							</li>
							<li class="current-menu-item"><a href="{{ url('/about') }}">About</a>
							</li>
							<li><a href="{{ url('/work') }}">Work</a>
							</li>
							<li><a href="{{ url('/contact') }}">Contact</a>
							</li>
						</ul><!--  -->
						
					</nav><!-- End / overlay-menu -->
					
				</div><!-- End / fullscreenmenu__module -->
				
			</header><!-- End / header -->
			
			<!-- Content-->
			<div class="wil-content">
				
				<!-- Section -->
				<section class="awe-section">
					<div class="container">
						
						<!-- page-title -->
						<div class="page-title pb-40">
							<h2 class="page-title__title">About me</h2>
							<p class="page-title__text">An IT student exploring technology and coding with curiosity.</p>
							<div class="page-title__divider"></div>
						</div><!-- End / page-title -->
						
					</div>
				</section>
				<!-- End / Section -->
				
				
				<!-- Section -->
				<section class="awe-section bg-gray">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-lg-5 "><img src="{{ asset('assets/img/profile.jpg') }}" alt="">
							</div>
							<div class="col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 ">
								
								<!--  -->
								<div class="mt-30">
									<h2 class="about__title">Deny Wahyudi Asaloei</h2>
									<p class="about__subtitle">Welcome to My Space!</p>
									<p class="about__text">Hi, I’m Deny Wahyudi Asaloei, an IT student with a passion for technology and coding. I enjoy exploring different areas of programming and continuously learning to enhance my skills. 
										In my free time, I like diving into new projects, experimenting with ideas, and finding innovative solutions to challenges. 
										Feel free to look around and get to know more about my journey in the world of tech!</p>
									
									<!-- progress -->
									<div class="progress">
										<h5 class="progress__title">python</h5>
										<div class="progress__wrap">
											<div class="progress__bar" data-progress-percent="80" data-timing="ease" data-duration="1000" data-delay="500"></div><span class="progress__number">80%</span>
										</div>
									</div><!-- End / progress -->
									
									
									
									<!-- progress -->
									<div class="progress">
										<h5 class="progress__title">php</h5>
										<div class="progress__wrap">
											<div class="progress__bar" data-progress-percent="50" data-timing="ease" data-duration="1000" data-delay="500"></div><span class="progress__number">50%</span>
										</div>
									</div><!-- End / progress -->
									
									<!-- progress -->
									<div class="progress">
										<h5 class="progress__title">java</h5>
										<div class="progress__wrap">
											<div class="progress__bar" data-progress-percent="70" data-timing="ease" data-duration="1000" data-delay="500"></div><span class="progress__number">70%</span>
										</div>
									</div><!-- End / progress -->
									<!-- progress -->
									<div class="progress">
										<h5 class="progress__title">dart</h5>
										<div class="progress__wrap">
											<div class="progress__bar" data-progress-percent="40" data-timing="ease" data-duration="1000" data-delay="500"></div><span class="progress__number">40%</span>
										</div>
									</div><!-- End / progress -->
									
								</div><!-- End /  -->
								
							</div>
						</div>
					</div>
				</section>
				<!-- End / Section -->
				
			</div>
			<!-- End / Content-->
			
			<!-- footer -->
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-6 ">
							<p class="footer__coppy">2018 &copy; Copyright <a href="http://awe7.com/">Awe7</a>. All rights Reserved.</p>
						</div>
						<div class="col-md-6 col-lg-6 ">
							<div class="footer__social">
								
								<!-- social-icon -->
								<a class="social-icon" href="https://www.instagram.com/denywa_/"><i class="social-icon__icon fa fa-instagram"></i>
								</a><!-- End / social-icon -->
								
								
								<!-- social-icon -->
								<a class="social-icon" href="https://github.com/denywa"><i class="social-icon__icon fa fa-github"></i>
								</a><!-- End / social-icon -->
							</div>
						</div>
					</div>
				</div>
			</div><!-- End / footer -->
			
		</div>
		<!-- Vendors-->
		<script type="text/javascript" src="/assets/vendors/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="/assets/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery-one-page/jquery.nav.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery.easing/jquery.easing.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery.waypoints/jquery.waypoints.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/swiper/swiper.jquery.js"></script>
		<script type="text/javascript" src="/assets/vendors/menu/menu.js"></script>
		<script type="text/javascript" src="/assets/vendors/typed/typed.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="/assets/js/main.js"></script>
	</body>
</html>