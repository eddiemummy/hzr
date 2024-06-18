<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Huzur Design</title>
		<meta name="description" content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
		<!-- Place favicon.ico in the root directory -->

		<!-- Google Font -->
		<link href='../../css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
		<link href='../../css-1?family=Bree+Serif' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
		<!-- nivo-slider css -->
        <link rel="stylesheet" href="{{ asset('lib/css/nivo-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/css/preview.css') }}">
		<!-- slick css -->
        <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
		<!-- lightbox css -->
        <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
		<!-- material-design-iconic-font css -->
        <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.css') }}">
		<!-- All common css of theme -->
        <link rel="stylesheet" href="{{ asset('css/default.css') }}">
		<!-- style css -->
        <link rel="stylesheet" href="{{ asset('style.min.css') }}">
        <!-- shortcode css -->
        <link rel="stylesheet" href="{{ asset('css/shortcode.css') }}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		<!-- modernizr css -->
		<script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
	</head>
	<body>
		<!-- WRAPPER START -->
		<div class="wrapper">

			<!-- Mobile-header-top Start -->
			<x-mobile-header/>
			<!-- Mobile-header-top End -->
			<!-- HEADER-AREA START -->

			<!-- HEADER-AREA END -->
			<!-- Mobile-menu start -->

			<!-- Mobile-menu end -->

			<!-- SLIDER-BANNER-AREA START -->

            <x-slider :sliders="$sliders" :products="$products"/>

			<!-- End Slider-section -->
			<!-- sidebar-search Start -->
			<x-search/>
			<!-- sidebar-search End -->
			<!-- PRODUCT-AREA START -->
			<x-product/>
			<!-- PRODUCT-AREA END -->
			<!-- DISCOUNT-PRODUCT START -->
			<x-discount/>
			<!-- DISCOUNT-PRODUCT END -->
			<!-- PURCHASE-ONLINE-AREA START -->
			<x-purchase/>
			<!-- PURCHASE-ONLINE-AREA END -->
			<!-- BLGO-AREA START -->

			<!-- BLGO-AREA END -->
			<!-- SUBSCRIVE-AREA START -->
			<x-subscrive/>
			<!-- SUBSCRIVE-AREA END -->
			<!-- FOOTER START -->
			<footer>
				<!-- Footer-area start -->
				<div class="footer-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">Contact Us</h3>
									<ul class="footer-contact">
										<li><span>Address :</span>28 Green Tower, Street Name,<br>New York City, USA</li>
										<li><span>Cell-Phone :</span>012345 - 123456789</li>
										<li><span>Email :</span>your-email@gmail.com</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">accounts</h3>
									<ul class="footer-menu">
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Account</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Wishlist</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Cart</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Sign In</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Check out</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">shipping</h3>
									<ul class="footer-menu">
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>New Products</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Top Sellers</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Manufactirers</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Suppliers</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Specials</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">your choice Products</h3>
									<div class="footer-product">
										<div class="row">
											<div class="col-sm-6 col-12">
												<div class="footer-thumb">
													<a href="#"><img src="img/footer/1.jpg" alt=""></a>
													<div class="footer-thumb-info">
														<p><a href="#">Furniture Product<br>Name</a></p>
														<h4 class="price-3">$ 60.00</h4>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-12">
												<div class="footer-thumb">
													<a href="#"><img src="img/footer/1.jpg" alt=""></a>
													<div class="footer-thumb-info">
														<p><a href="#">Furniture Product<br>Name</a></p>
														<h4 class="price-3">$ 60.00</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Footer-area end -->
				<!-- Copyright-area start -->
				<div class="copyright-area">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="copyright">
									<p class="mb-0">&copy; <a href=" https://themeforest.net/user/codecarnival/portfolio " target="_blank"> CodeCarnival  </a> 2022. All Rights Reserved.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="payment  text-md-end">
									<a href="#"><img src="img/payment/1.png" alt=""></a>
									<a href="#"><img src="img/payment/2.png" alt=""></a>
									<a href="#"><img src="img/payment/3.png" alt=""></a>
									<a href="#"><img src="img/payment/4.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Copyright-area start -->
			</footer>
			<!-- FOOTER END -->
			<!-- QUICKVIEW PRODUCT -->
            <x-quickviewer/>
			<!-- END QUICKVIEW PRODUCT -->

		</div>
		<!-- WRAPPER END -->

		<!-- all js here -->
		<!-- jquery latest version -->
		<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
		<!-- bootstrap js -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<!-- jquery.meanmenu js -->
        <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
		<!-- slick.min js -->
        <script src="{{ asset('js/slick.min.js') }}"></script>
		<!-- jquery.treeview js -->
        <script src="{{ asset('js/jquery.treeview.js') }}"></script>
		<!-- lightbox.min js -->
        <script src="{{ asset('js/lightbox.min.js') }}"></script>
		<!-- jquery-ui js -->
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
		<!-- jquery.nivo.slider js -->
        <script src="{{ asset('lib/js/jquery.nivo.slider.js') }}"></script>
        <script src="{{ asset('lib/home.js') }}"></script>
		<!-- jquery.nicescroll.min js -->
        <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
		<!-- countdon.min js -->
        <script src="{{ asset('js/countdon.min.js') }}"></script>
		<!-- wow js -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
		<!-- plugins js -->
        <script src="{{ asset('js/plugins.js') }}"></script>
		<!-- main js -->
        <script src="{{ asset('js/main.min.js') }}"></script>
	</body>
</html>
