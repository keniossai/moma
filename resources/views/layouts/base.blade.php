<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../images/favicon.ico">

    <title>Moma | Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/css/skin_color.css">

    <script src="https://kit.fontawesome.com/1fe647256e.js" crossorigin="anonymous"></script>
    @stack('styles')
</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">
<div id="loader"></div>

<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
        <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
            <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
        </a>
        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="logo">
            <!-- logo-->
            <div class="logo-lg">
                <span class="dark-logo"><img src="{{ asset('admin') }}/images/logo.png" alt="logo"></span>
            </div>
        </a>
    </div>
    <x-portal.nav/>
</header>

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu">
                    <li class="header">Dashboard & Apps</li>
                    <li class="treeview">
                        <a href="{{ route('dashboard') }}">
                            <span>DASHBOARD</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ route('users.index') }}">
                            <span>BOOKINGS</span>
                        </a>
                    </li>
                    @therapist
                    <li class="treeview">
                        <a href="{{ route('galleries.index') }}">
                            <span>GALLERY</span>
                        </a>
                    </li>
                    @endtherapist
                    @admin
                    <li class="treeview">
                        <a href="{{ route('users.index') }}">
                            <span>USER MANAGEMENT</span>
                        </a>
                    </li>
                    @endadmin
                    <li class="treeview">
                        <a href="chat">
                            <span>MESSAGE</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <span>NOTIFICATION</span>
                        </a>
                    </li>
                    @admin
                    <li class="treeview">
                        <a href="{{ route('settings') }}">
                            <span>SETTINGS</span>
                        </a>
                    </li>
                    @endadmin
                    <li class="treeview">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form-nav').submit();">
                            <span>LOGOUT</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div class="sidebar-footer">
        <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span class="icon-Settings-2"></span></a>
        <a href="mailbox.html" class="link" data-bs-toggle="tooltip" title="Email"><span class="icon-Mail"></span></a>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form-nav').submit();" class="link" data-bs-toggle="tooltip" title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
        <form id="logout-form-nav" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</aside>
<div class="content-wrapper" style="min-height: 376px;">

    @yield('content')

</div>
    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" target="_blank">Help Desk</a>
                </li>
            </ul>
        </div>
        &copy; 2023 <a href="#">Moma Therapy</a>. All Rights Reserved.
    </footer>

</div>
<!-- ./wrapper -->

<!-- Vendor JS -->
<script src="{{ asset('admin') }}/js/vendors.min.js"></script>
<script src="{{ asset('admin') }}/js/pages/chat-popup.js"></script>
<script src="{{ asset('admin') }}/assets/icons/feather-icons/feather.min.js"></script>

<script src="{{ asset('admin') }}/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
<script src="{{ asset('admin') }}/assets/vendor_components/moment/min/moment.min.js"></script>
<script src="{{ asset('admin') }}/assets/vendor_components/fullcalendar/fullcalendar.js"></script>

<!-- EduAdmin App -->
<script src="{{ asset('admin') }}/js/template.js"></script>
<script src="{{ asset('admin') }}/js/gallery.js"></script>
<script src="{{ asset('admin') }}/js/pages/dashboard.js"></script>
<script src="{{ asset('admin') }}/js/pages/calendar.js"></script>
<script src="{{ asset('admin') }}/js/animated-masonry-gallery.js"></script>
<script src="{{ asset('admin') }}/js/jquery.isotope.min.js"></script>
<script src="{{ asset('admin') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('admin') }}/js/jquery.magnific-popup-init.js"></script>

<!-- Custom JS -->
<x-scripts.custom/>
</body>
</html>
