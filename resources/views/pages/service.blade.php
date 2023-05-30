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
                        <p class="service-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
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
                        <p class="service-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
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
                        <p class="service-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-item wow fadeIn">
                    <div class="thumb">
                        <a href="service-single.html"><img src="{{ asset('assets') }}/img/services/5.jpg" alt=""></a>
                    </div>
                    <div class="service-info text-center">
                        <h3><a href="service-single.html">Aromatherapy</a></h3>
                        <p class="service-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
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
                        <p class="service-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
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
                        <p class="service-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-primary">Load More</a>
            </div>
        </div>
    </div>
</section>
<!-- end services -->
@endsection
