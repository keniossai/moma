<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themecrazy.net/html/amella/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 11:02:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Moma - Therapy</title>
	<link rel="shortcut icon" href="{{ asset('assets') }}img/favicon.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
	<link href="{{ asset('assets') }}/css/animate.css" rel="stylesheet">
    <!-- Venobox CSS -->
	<link href="{{ asset('assets') }}/css/venobox.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{ asset('assets') }}/css/owl.carousel.min.css" rel="stylesheet">
	<!--Chosen-->
	<link href="{{ asset('assets') }}/css/chosen.css" rel="stylesheet">
	<!--Time picker-->
	<link href="{{ asset('assets') }}/css/bootstrap-timepicker.min.css" rel="stylesheet">
	<!--Date picker-->
	<link href="{{ asset('assets') }}/css/datepicker.css" rel="stylesheet">
	<!-- Font-awesome -->
	<link rel="stylesheet" href="{{ asset('assets') }}/fonts/font-awesome/css/font-awesome.min.css">
	<!-- Google font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,500;1,100&family=Montserrat:ital,wght@0,100;0,300;0,500;1,100;1,400&family=Open+Sans:wght@300;500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200&display=swap" rel="stylesheet">
	<!-- Main CSS -->
	<link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1fe647256e.js" crossorigin="anonymous"></script>

</head>

<body>
	<!--Preload-->
	<div class="preloader">
		<div class="preloader_image">
			<div class="sk-double-bounce">
				<div class="sk-child sk-double-bounce1"></div>
				<div class="sk-child sk-double-bounce2"></div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand" href="/">
				<img src="{{ asset('assets') }}/img/logo.png" alt="Logo">
			</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="main-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/">Home</a></li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('landing.about') }}">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('landing.service') }}">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-toggle="modal" data-target="#search">Find Therapist</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" href="gallery.html">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="blog.html">Blog</a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link" href="{{ route('landing.contact') }}">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">Login</a>
					</li>
					<li class="nav-item btn-appointment">
						<a class="nav-link" href="{{ route('register') }}">Join Moma</a>
					</li>
					<!-- <li class="nav-item btn-appointment">
						<a class="nav-link" href="#" data-toggle="modal" data-target="#appointment">Appointment</a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>
	<!-- end nav -->

    @yield('content')

    <section class="section-spacing">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="appoinment-text wow fadeIn">
						<h2>Make an Appointment?</h2>
						<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos, In massa urna pellentesque habitant morbi tristique senectus.</p>
						<p>Call us : 002-6666-8888 or fill out our online booking & equiry form and we’ll contact you.</p>
						<a href="#" data-toggle="modal" data-target="#appointment" class="btn btn-primary">Make Appointment</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="appoinment-img text-md-right text-center wow fadeIn">
						<img class="tilt-img" src="{{ asset('assets') }}/img/appointment/1.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end appointment -->
	<footer id="footer">
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="copyright">
							<p>Copyright &copy; 2023. All rights reserved.</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<ul class="payment-icons">
							<li><a href="#" target="_blank"><img src="{{ asset('assets') }}/img/mastercard.svg" alt=""></a></li>
							<li><a href="#" target="_blank"><img src="{{ asset('assets') }}/img/verve.svg" alt=""></a></li>
							<li><a href="#" target="_blank"><img src="{{ asset('assets') }}/img/paystack.svg" alt=""></a></li>
							<li><a href="#" target="_blank"><img src="{{ asset('assets') }}/img/visa.svg" alt=""></a></li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-4">
						<ul class="social-icons pull-right">
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- Bact to top -->
	<div class="back-top">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	<div class="search_button">
		<button class="btn" data-toggle="modal" data-target="#search"><i class="fa fa-search"></i></button>
	</div>

	<!-- Start Video Modal -->
	<div class="modal fade modal-vcenter" id="video-modal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle-o"></i></button>
                </div>
                <div class="modal-body">
					<iframe src="https://www.youtube.com/embed/iJwhEdrMUok" title="Expert Massage Techniques  Deep Tissue Massage" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" width="800" height="400" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
	<!-- End Video Modal -->

	<!-- Appointment Modal -->
    <div class="modal fade modal-vcenter" id="appointment" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2>REQUEST AN APPOINTMENT</h2>
                </div>
                <div class="modal-body">
					<form id="reservation-form" method="post" data-toggle="validator">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>First Name*</label>
									<input type="text" id="rfname" class="form-control" name="fname" required data-error="Please enter your first name">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" id="rlname" class="form-control" name="lname" >
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Email*</label>
									<input type="email" id="remail" class="form-control" name="email" required data-error="Please enter valid email address">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Phone*</label>
									<input type="tel" id="rphone" class="form-control" name="phone" required data-error="Please enter your phone number">
									<div class="help-block with-errors"></div>
								</div>
							</div>

						</div>

						<div class="form-group">
							<label>Address</label>
							<input type="text" id="raddress" class="form-control" name="address">
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label>Zip Code</label>
									<input type="text" id="rzipcode" class="form-control" name="zipcode">
								</div>
							</div>

							<div class="col-xs-12 col-sm-8">
								<div class="form-group">
									<label>City</label>
									<input type="text" id="rcity" class="form-control" name="city">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label>Service</label>
							<select id="rselect-service" class="select-option" name="service">
								<option value="Herbal Spa">Herbal Spa</option>
								<option value="Skin Care">Skin Care</option>
								<option value="Stone Message">Stone Message</option>
								<option value="Body Message">Body Message</option>
								<option value="Aromatherapy">Aromatherapy</option>
								<option value="Hydrotherapy">Hydrotherapy</option>
							</select>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Reservation Date*</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" id="rdate" class="form-control date-pic" name="date" placeholder="mm/dd/yyyy" required data-error="Please select reservation date">
									</div><!-- /.input group -->
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-6">
								<div class="bootstrap-timepicker">
									<div class="form-group">
										<label>Time picker*</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</div>
											<input type="text" id="rtime" name="time" class="form-control timepicker" required data-error="Please select reservation time">
										</div><!-- /.input group -->
										<div class="help-block with-errors"></div>
									</div><!-- /.form group -->
								</div>
							</div>
						</div>

						<div class="submit-block text-right">
							<a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
							<input value="Submit" name="submit" class="btn btn-primary" type="submit">
						</div>

						<div id="msgSubmitRes" class="h3 text-center hidden"></div>

					</form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-vcenter" id="search" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3>Search the app</h3>
                </div>
                <div class="modal-body">
					<form class="search_form" id="reservation-form" method="post" data-toggle="validator">
							<div class="col-md-12">
								<div class="form-group">
									<label>Therapist</label>
									<select id="rselect-service" class="select-option" name="service">
										<option value="Select Service"></option>
										<option value="Herbal Spa">Herbal Spa</option>
										<option value="Skin Care">Skin Care</option>
										<option value="Stone Message">Stone Message</option>
										<option value="Body Message">Body Message</option>
										<option value="Aromatherapy">Aromatherapy</option>
										<option value="Hydrotherapy">Hydrotherapy</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Service</label>
									<select id="rselect-service" class="select-option" name="service">
										<option value="Select Service"></option>
										<option value="Herbal Spa">Herbal Spa</option>
										<option value="Skin Care">Skin Care</option>
										<option value="Stone Message">Stone Message</option>
										<option value="Body Message">Body Message</option>
										<option value="Aromatherapy">Aromatherapy</option>
										<option value="Hydrotherapy">Hydrotherapy</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Location</label>
									<select id="rselect-service" class="select-option" name="service">
										<option value="Lagos">Lagos</option>
										<option value="Abuja">Abuja</option>
										<option value="Port Harcourt">Port Harcourt</option>
									</select>
								</div>
							</div>
						<div class="submit-block text-right">
							<button class="btn btn-primary" type="submit">Search</button>
						</div>

						<div id="msgSubmitRes" class="h3 text-center hidden"></div>

					</form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
	<script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('assets') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.easing.min.js"></script>
	<script src="{{ asset('assets') }}/js/wow.js"></script>
	<script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('assets') }}/js/venobox.min.js"></script>
	<script src="{{ asset('assets') }}/js/SmoothScroll.js"></script>
	<script src="{{ asset('assets') }}/js/tilt.jquery.js"></script>
	<script src="{{ asset('assets') }}/js/bootstrap-timepicker.min.js"></script>
	<script src="{{ asset('assets') }}/js/bootstrap-datepicker.js"></script>
	<script src="{{ asset('assets') }}/js/chosen.jquery.js"></script>
	<script src="mail/{{ asset('assets') }}/js/form-validator.min.js"></script>
	<script src="mail/{{ asset('assets') }}/js/contact-form-script.js"></script>
    <script src="{{ asset('assets') }}/js/script.js"></script>
    <script src="{{ asset('assets') }}/js/profile.js"></script>

</body>

</html>
