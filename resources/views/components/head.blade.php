<head>
    @php $setting =getSiteSetting(); @endphp
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>{!! $title ?? 'Huzur Design' !!}</title>
        <meta name="keywords" content="{!! $meta_keywords ?? $setting->keywords !!}">
		<meta name="description" content="{!! $meta_description ?? $setting->description !!}">
        <link rel="canonical" href="{{url()->current()}}"/>
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
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}?v=1">
		<!-- modernizr css -->
		<script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
	</head>
