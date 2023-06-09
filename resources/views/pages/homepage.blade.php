@extends('layouts.app')


@section('content')

	<section class="carousel slide" id="banner" data-ride="carousel" data-pause="false">
		<div class="carousel-inner">
			<div class="carousel-item active" style="background-image:url({{ asset('assets') }}/img/banner/bg-1.png); background-size: cover; height: 100vh;">
				<div class="banner-caption">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="hero-text">
									<h1 class="animated fadeInUp">Convenient and affordable therapy with Moma</h1>
									<p class="animated fadeInUp">Reduce muscle tension and stress, lowers blood pressure, and discomfort.</p>
									<div class="">
										<a href="contact-us.html" class=" btn btn-primary animated fadeInUp">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-item" style="background-image:url({{ asset('assets') }}/img/banner/beauty.jpg); background-size: cover; height: 100vh;">
				<div class="banner-caption">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="hero-text">
									<h1 class="animated fadeInLeft">Rejuvenated Body & Soul</h1>
									<p class="animated fadeInLeft">Certified Relaxation Therapist to help you</p>
									<a href="contact-us.html" class=" btn btn-primary animated fadeInLeft">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-item" style="background-image:url({{ asset('assets') }}/img/banner/nuru-massage.jpg); background-size: cover; height: 100vh;">
				<div class="banner-caption">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="hero-text">
									<h1 class="animated fadeInRight">Prevention Equals Longevity</h1>
									<p class="animated fadeInRight">Start living better today</p>
									<a href="contact-us.html" class=" btn btn-primary animated fadeInRight">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<ol class="carousel-indicators">
				<li data-target="#banner" data-slide-to="0" class="active"></li>
				<li data-target="#banner" data-slide-to="1"></li>
				<li data-target="#banner" data-slide-to="2"></li>
			</ol>

		</div>
	</section>
	<!-- end banner -->

	<section class="section-spacing inverse-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span>Meet The Experts</span></h2>
						<p>Practice anywhere, anytime. Explore a new way to exercise and <br>
							learn more about yourself. We are providing the best. </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="team wow fadeIn">
						<div class="thumb">
							<img src="https://images.squarespace-cdn.com/content/v1/58bb313c9de4bbb44fa562c8/1618825770742-1P3JA9SV21WO3CX6047C/aboutus.jpg" alt="">
						</div>
						<div class="team-info text-center">
							<a href="my_profile">
                                <h3>Tasfia</h3>
                            </a>
							<h6>Hair Expert</h6>
						</div>
						<div class="team-overlay text-center">
							<a href="my_profile">
                                <h3>Tasfia</h3>
                            </a>
							<h6>Hair Expert</h6>

						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="team wow fadeIn">
						<div class="thumb">
							<img src="https://www.delucamassage.com/wp-content/uploads/2021/09/IMG_3044.jpg" alt="">
						</div>
						<div class="team-info text-center">
							<h3>Salina Gomej</h3>
							<h6>Message Expert</h6>
						</div>
						<div class="team-overlay text-center">
							<h3>Salina Gomej</h3>
							<h6>Message Expert</h6>

						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="team wow fadeIn">
						<div class="thumb">
							<img src="https://www.delucamassage.com/wp-content/uploads/2019/02/IMG-20211206-WA0015-768x1024.jpg" alt="">
						</div>
						<div class="team-info text-center">
							<h3>Julia Shorez</h3>
							<h6>Skin Therapist</h6>
						</div>
						<div class="team-overlay text-center">
							<h3>Julia Shorez</h3>
							<h6>Skin Therapist</h6>

						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="team wow fadeIn">
						<div class="thumb">
							<img src="https://cdn.shortpixel.ai/spai/q_lossy+ret_img+to_webp/https://elevationcw.com/wp-content/uploads/2022/01/dee-massage-therapist-640x800.jpg" alt="">
						</div>
						<div class="team-info text-center">
							<h3>Sharmin Akter</h3>
							<h6>Therapy Expert</h6>
						</div>
						<div class="team-overlay text-center">
							<h3>Sharmin Akter</h3>
							<h6>Therapy Expert</h6>

						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
					<a href="team.html" class="btn btn-primary">View More Experts</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end team member -->
	<section class="section-spacing">
		<div class="container">
			<h2 class="text-center text-light">Relax And Enjoy a Personalised <br> Therapy Session With Us.</h2>
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="fun-fact-img wow fadeIn">
						<img class="tilt-img" src="{{ asset('assets') }}/img/woman.svg" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 text-center">
							<div class="features-info">
								<span class="counter">800</span>
								<h3>Clients</h3>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 text-center">
							<div class="features-info">
								<span class="counter">50</span>
								<h3>Therapists</h3>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 text-center">
							<div class="features-info">
								<span class="counter">35</span>
								<h3>Procedures</h3>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 text-center">
							<div class="features-info">
								<span class="counter">890</span>
								<h3>Treatments</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end fun facts -->

	<section class="section-spacing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span>Our Services</span></h2>
						<p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a href="service-single.html"><img src="{{ asset('assets') }}/img/services/1.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Herbal Spa</a></h3>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a href="service-single.html"><img src="{{ asset('assets') }}/img/services/2.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Stone Message</a></h3>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="service-item wow fadeIn">
						<div class="thumb">
							<a href="service-single.html"><img src="{{ asset('assets') }}/img/services/3.jpg" alt=""></a>
						</div>
						<div class="service-info text-center">
							<h3><a href="service-single.html">Body Message</a></h3>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
					<a href="services.html" class="btn btn-primary">All Services</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end services -->

	<section class="section-spacing inverse-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="img-block wow fadeIn">
						<img src="{{ asset('assets') }}/img/why-choose/1.jpg" alt="">
						<div class="play-button">
							<a href="#" data-toggle="modal" data-target="#video-modal"><i class="fa fa-play"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="text-block wow fadeIn">
						<h2>The Better Way to Start Yoga</h2>
						<p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
						<ul>
							<li>Created from natural herbs</li>
							<li>100% safe for your skin</li>
							<li>Unique from other spa treatments</li>
							<li>Created by medical professionals of spa lab</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end why choose -->
@endsection
