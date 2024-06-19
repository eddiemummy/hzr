<!doctype html>
<html class="no-js" lang="en">
	<x-head/>
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

			<!-- PURCHASE-ONLINE-AREA START -->
			<x-purchase/>
			<!-- PURCHASE-ONLINE-AREA END -->
			<!-- BLGO-AREA START -->

			<!-- BLGO-AREA END -->
			<!-- SUBSCRIVE-AREA START -->
			<x-subscrive/>
			<!-- SUBSCRIVE-AREA END -->
			<!-- FOOTER START -->
			<x-foot/>
			<!-- FOOTER END -->
			<!-- QUICKVIEW PRODUCT -->
            <x-quickviewer/>
			<!-- END QUICKVIEW PRODUCT -->

		</div>
		<!-- WRAPPER END -->

		<!-- all js here -->
		<!-- jquery latest version -->
		<x-comps/>
	</body>
</html>
