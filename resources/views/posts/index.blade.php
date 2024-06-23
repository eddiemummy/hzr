<!doctype html>
<html class="no-js" lang="en">
    @php $setting = getSiteSetting(); @endphp
    <x-head>
        <x-slot:title>
            {!! $setting->title !!}
        </x-slot:title>
        <x-slot:meta_keywords>
            {!! $setting->keywords !!}
        </x-slot:meta_keywords>
        <x-slot:description>
            {!! $setting->description !!}
        </x-slot:description>
    </x-head>
{{--	@extends('components.head')--}}
{{--    @section('title',$setting->title)--}}
{{--    @section('keywords',$setting->keywords)--}}
{{--    @section('description',$setting->description)--}}
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
			<!-- sidebar-search End -->
			<!-- PRODUCT-AREA START -->
			<x-product :newProducts="$newProducts"/>
			<!-- PRODUCT-AREA END -->

			<!-- PURCHASE-ONLINE-AREA START -->
			<x-purchase :segments="$segments"/>
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
