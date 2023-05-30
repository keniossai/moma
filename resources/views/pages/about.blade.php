@extends('layouts.app')

@section('content')
    <section class="inner-page-banner" style="background-image:url({{ asset('assets') }}/img/banner/bg.png)">
        <div class="page-banner-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Our Services</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Our Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->

    <section class="section-spacing">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="img-block wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
						<img src="img/team/our-story.jpg" alt="">
						<div class="play-button">
							<a href="#" data-toggle="modal" data-target="#video-modal"><i class="fa fa-play"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="text-block wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
						<h2>Our history</h2>
						<p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae convallis varius. Nulla tristique risus ut justo pulvinar mattis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae convallis varius. Nulla tristique risus ut justo pulvinar mattis.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section class="section-spacing inverse-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span>Meet Our Experts</span></h2>
						<p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="team wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
						<div class="thumb">
							<img src="img/team/1.jpg" alt="">
						</div>
						<div class="team-info text-center">
							<h3>Tasfia</h3>
							<h6>Hair Expert</h6>
						</div>
						<div class="team-overlay text-center">
							<h3>Tasfia</h3>
							<h6>Hair Expert</h6>
							<ul class="social-icons">
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="team wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
						<div class="thumb">
							<img src="img/team/2.jpg" alt="">
						</div>
						<div class="team-info text-center">
							<h3>Salina Gomej</h3>
							<h6>Message Expert</h6>
						</div>
						<div class="team-overlay text-center">
							<h3>Salina Gomej</h3>
							<h6>Message Expert</h6>
							<ul class="social-icons">
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="team wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
						<div class="thumb">
							<img src="img/team/3.jpg" alt="">
						</div>
						<div class="team-info text-center">
							<h3>Julia Shorez</h3>
							<h6>Skin Therapist</h6>
						</div>
						<div class="team-overlay text-center">
							<h3>Julia Shorez</h3>
							<h6>Skin Therapist</h6>
							<ul class="social-icons">
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="team wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
						<div class="thumb">
							<img src="img/team/4.jpg" alt="">
						</div>
						<div class="team-info text-center">
							<h3>Sharmin Akter</h3>
							<h6>Therapy Expert</h6>
						</div>
						<div class="team-overlay text-center">
							<h3>Sharmin Akter</h3>
							<h6>Therapy Expert</h6>
							<ul class="social-icons">
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-12 text-center">
					<a href="contact-us.html" class="btn btn-primary">Contat Us</a>
				</div>
			</div>
		</div>
	</section>
    <!-- end services -->
@endsection
