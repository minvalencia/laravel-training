<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.compat.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.theme.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/morris/morris.css') }}" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/skins/default.css') }}" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />

        <!-- Head Libs -->
        <script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>

	</head>
	<body>
		<!-- start: page -->
		@yield('content')
		<!-- end: page -->

		<<!-- Vendor -->
        <script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
        <script src="{{ asset('assets/vendor/popper/umd/popper.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('assets/vendor/common/common.js') }}"></script>
        <script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
        <script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('assets/js/theme.js') }}"></script>

        <!-- Theme Custom -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        <!-- Theme Initialization Files -->
        <script src="{{ asset('assets/js/theme.init.js') }}"></script>

        <!-- Examples -->
        <script src="{{ asset('assets/js/examples/examples.dashboard.js') }}"></script>

	</body>
</html>
