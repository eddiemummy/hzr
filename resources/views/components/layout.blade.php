<!doctype html>
<html class="no-js" lang="en">
    {{ $heading }}
	<body>
{{--    <x-alert/>--}}
		<!-- WRAPPER START -->
		<div class="wrapper">

			<!-- Mobile-header-top Start -->

			<!-- Mobile-header-top End -->
			<!-- HEADER-AREA START -->

			<!-- HEADER-AREA END -->
			<!-- Mobile-menu start -->

			<!-- Mobile-menu end -->
			<!-- SLIDER-BANNER-AREA START -->
            {{ $slot }}
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
