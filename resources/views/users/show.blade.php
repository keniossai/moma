@extends('layouts.base')

@section('content')
<section class="content">

    <div class="row">
      <div class="col-lg-12">
          <div class="box">
              <div class="box-body">
                  <div class="row">
                      <div class="col-md-4 col-sm-6">
                          <div class="box box-body b-1 text-center no-shadow">
                              <img src="https://www.bellanaija.com/wp-content/uploads/2014/02/Isio-Wanogho-Fayrouz-Valentine-Mixologist-BellaNaija-February-2014-001.jpg" id="product-image" class="img-fluid" alt="">
                          </div>

                          <div class="clear"></div>
                      </div>
                      <div class="col-md-8 col-sm-6">
                          <h2 class="box-title mt-0">{{ Auth::user()->name }}</h2>
                          <h1 class="pro-price mb-0 mt-20">$270</h1>
                          <hr>
                          <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</p>
                          <h4 class="box-title mt-20">Qualifications</h4>
                          <ul class="list-icons list-unstyled">
                              <li><i class="fa fa-check text-danger me-3"></i> Party Wear</li>
                              <li><i class="fa fa-check text-danger me-3"></i> Nam libero tempore, cum soluta nobis est</li>
                              <li><i class="fa fa-check text-danger me-3"></i> Omnis voluptas as placeat facere possimus omnis voluptas.</li>
                          </ul>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="nav-tabs-custom">

                            <div class="tab-content">

                              <div class="tab-pane active" id="settings">

                                <div class="box no-shadow p-5">
                                    <form class="form-horizontal form-element col-12">
                                      <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 form-label">First Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" name="first_name" value="{{ Auth::user()->first_name }}" class="form-control" id="inputName" placeholder="">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 form-label">First Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" name="last_name" value="{{ Auth::user()->last_name }}" class="form-control" id="inputName" placeholder="">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 form-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" id="inputEmail" placeholder="">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputPhone" class="col-sm-2 form-label">Phone Number</label>
                                        <div class="col-sm-10">
                                          <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control" id="inputPhone" placeholder="">
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 form-label">Location</label>

                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" value="{{ Auth::user()->location }}" id="inputSkills" placeholder="">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <div class="gap-items">
                                            <button class="btn btn-success"> <i class="fas fa-user-alt-slash    "></i> Suspend User</button>
                                            <button class="btn btn-warning"><i class="fa fa-user-times" aria-hidden="true"></i> Update Profile</button>
                                            <button class="btn btn-danger"><i class="fa fa-user-times" aria-hidden="true"></i> Delete Account</button>
                                        </div>
                                      </div>
                                    </form>
                                </div>
                              </div>
                              <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  </section>
@endsection
