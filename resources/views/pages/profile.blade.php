@extends('layouts.app')

@section('content')
<style>


    .card-wrapper{
        width: 100%;
        margin: 0 auto;
    }
    .section-spacing{
        padding: 0px;
    }
    .profile_img{
        width: 100%;
        display: block;
    }
    .img-display{
        overflow: hidden;
    }
    .img-showcase{
        display: flex;
        width: 100%;
        transition: all 0.5s ease;
    }
    .img-showcase img{
        min-width: 100%;
    }
    .img-select{
        display: flex;
    }
    .img-item{
        margin: 0.3rem;
    }
    .img-item:nth-child(1),
    .img-item:nth-child(2),
    .img-item:nth-child(3){
        margin-right: 0;
    }
    .img-item:hover{
        opacity: 0.8;
    }
    .product-content{
        padding: 2rem 1rem;
    }
    .product-title{
        font-size: 3rem;
        text-transform: capitalize;
        font-weight: 700;
        position: relative;
        color: #fff;
        margin: 1rem 0;
    }

    .product-link{
        text-decoration: none !important;
        text-transform: capitalize;
        font-weight: 400;
        font-size: 0.9rem;
        display: inline-block;
        margin-bottom: 0.5rem;
        background: #53bd02;
        border-radius: 50px;
        color: #fff;
        padding: 2px 1.3rem;
        transition: all 0.5s ease;
    }
    .product-link:hover{
        text-decoration: none !important;
        color: #fff;
    }
    .product-rating{
        color: #ffc107;
    }
    .product-rating span{
        font-weight: 600;
        color: #252525;
    }
    .product-price{
        margin: 1rem 0;
        font-size: 1rem;
        font-weight: 700;
    }
    .product-price span{
        font-weight: 400;
    }
    .last-price span{
        color: #f64749;
        text-decoration: line-through;
    }
    .new-price span{
        color: #256eff;
    }
    .product-detail h2{
        text-transform: capitalize;
        color: #fff;
        padding-bottom: 0.6rem;
    }
    .product-detail p{
        font-size: 0.9rem;
        padding: 0.3rem;
        opacity: 0.8;
        color: #fff;
    }
    .product-detail ul{
        margin: 1rem 0;
        font-size: 0.9rem;
    }
    .product-detail ul li{
        margin: 0;
        list-style: none;
        background: url(https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/checked.png) left center no-repeat;
        background-size: 18px;
        padding-left: 1.7rem;
        margin: 0.4rem 0;
        font-weight: 600;
        opacity: 0.9;
        color: #fff;
    }
    .product-detail ul li span{
        font-weight: 400;
    }
    .purchase-info{
        margin: 1.5rem 0;
    }
    .purchase-info input,
    .purchase-info .btn{
        border: 1.5px solid #ddd;
        border-radius: 25px;
        text-align: center;
        padding: 0.45rem 0.8rem;
        outline: 0;
        margin-right: 0.2rem;
        margin-bottom: 1rem;
    }
    .purchase-info input{
        width: 60px;
    }
    .purchase-info .btn-appointment{
        background: #A63D10;
        color: #fff;
        padding: 11px 30px;
        border-radius: 25px;
        text-transform: capitalize;
        opacity: 16;
        border: none;
        cursor: pointer;
    }
    .purchase-info .btn:first-of-type{
        background: #f06204;
    }
    .purchase-info .btn:last-of-type{
        background: #03b952;
    }
    .purchase-info .btn:hover{
        opacity: 0.9;
    }
    .social-links{
        display: flex;
        align-items: center;
    }
    .social-links a{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        color: #000;
        border: 1px solid #000;
        margin: 0 0.2rem;
        border-radius: 50%;
        text-decoration: none;
        font-size: 0.8rem;
        transition: all 0.5s ease;
    }
    .social-links a:hover{
        background: #000;
        border-color: transparent;
        color: #fff;
    }

    .card_profile{
        margin-top: 200px;
    }

    @media screen and (min-width: 992px){
        .card_profile{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 1.5rem;
            background: #000
        }
        .card-wrapper{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .product-imgs{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .product-content{
            padding-top: 0;
        }
    }

    </style>
<div class="container">
    <div class="card-wrapper">
        <div class="card card_profile">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <img class="profile_img"
                            src="https://www.abmt.org.uk/uploads/5/4/7/1/54710663/ash6787_orig.jpg"
                            alt="shoe image">
                        <img class="profile_img"
                            src="https://www.abmt.org.uk/uploads/5/4/7/1/54710663/ash6787_orig.jpg"
                            alt="shoe image">
                        <img class="profile_img"
                            src="https://www.abmt.org.uk/uploads/5/4/7/1/54710663/ash6787_orig.jpg"
                            alt="shoe image">
                        <img class="profile_img"
                            src="https://www.abmt.org.uk/uploads/5/4/7/1/54710663/ash6787_orig.jpg"
                            alt="shoe image">
                    </div>
                </div>
                <div class="img-select">
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img class="profile_img"
                                src="https://www.abmt.org.uk/uploads/5/4/7/1/54710663/ash6787_orig.jpg"
                                alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="2">
                            <img class="profile_img"
                                src="https://www.abmt.org.uk/uploads/5/4/7/1/54710663/ash6787_orig.jpg"
                                alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="3">
                            <img class="profile_img"
                                src="https://www.abmt.org.uk/uploads/5/4/7/1/54710663/ash6787_orig.jpg"
                                alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="4">
                            <img class="profile_img"
                                src="https://www.abmt.org.uk/uploads/5/4/7/1/54710663/ash6787_orig.jpg"
                                alt="shoe image">
                        </a>
                    </div>
                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <h2 class="product-title">Tanya Olayemi</h2>
                <p class="product-link">Available</p>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>

                <div class="product-detail">
                    <h2>about Tanya: </h2>
                    <p>After 11 years of military service to this great country, I made the decision to serve in a different capacity. With a background in aircraft maintenance, I experienced first-hand the need for chronic and acute pain relief. A recent graduate of Cortiva Institute, I believe I found my calling!</p>

                    <ul>
                        <li>Certified: <span>Yes</span></li>
                        <li>Verified: <span>Yes</span></li>
                    </ul>
                </div>

                <div class="purchase-info">
                    <button type="button" class="nav-item btn-appointment" data-toggle="modal" data-target="#appointment">
                        Book Tanya
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-vcenter" id="appointment" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2>REQUEST AN APPOINTMENT</h2>
            </div>
            <div class="modal-body">
                <form id="reservation-form" method="post" data-toggle="validator" class="p-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Full Name*</label>
                                <input type="text" id="rfname" class="form-control" name="full_name" required data-error="Please enter your first name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="email" id="remail" class="form-control" name="email" required data-error="Please enter valid email address">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Phone*</label>
                                <input type="tel" id="rphone" class="form-control" name="phone" required data-error="Please enter your phone number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Location</label>
                                <select name="" class="form-control" id="">
                                    <option>Select Location</option>
                                    <option>Lagos</option>
                                    <option>Abuja</option>
                                    <option>Port Harcourt</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" id="raddress" class="form-control" name="address">
                    </div>

                    <div class="row">

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
                        <input value="Proceed" name="submit" class="btn btn-primary" type="submit">
                    </div>

                    <div id="msgSubmitRes" class="h3 text-center hidden"></div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
