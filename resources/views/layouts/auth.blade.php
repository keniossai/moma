<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-23.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 17:50:51 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Moma</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('admin/css/vendor.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="font/flaticon.css">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
</head>

<body>

    @yield('content')

    <!-- Vendor JS -->
    <script src="{{ asset('admin') }}/js/jquery-3.5.0.min.js"></script>
    <script src="{{ asset('admin') }}/js/vendor.js"></script>
    <script src="{{ asset('admin') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="https://kit.fontawesome.com/1fe647256e.js" crossorigin="anonymous"></script>
    <script src="{{ asset('admin') }}/js/feather.min.js"></script>
    <script src="{{ asset('admin') }}/js/main.js"></script>

    <!-- Custom JS -->
    <x-scripts.custom/>
    <script>
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $('#forget-password').on("click", function() {
            $("#login-form").slideUp('slow');
            $("#forget-password-form").fadeIn('slow');
        });
        $('#go-back').on("click", function() {
            $("#login-form").slideDown('slow');
            $("#forget-password-form").fadeOut('slow');
        });
    </script>
</body>

</html>
