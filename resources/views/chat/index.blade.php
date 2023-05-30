@extends('layouts.base')

@section('content')
<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="box">
                    <div class="box-header">
                        <ul class="nav nav-tabs customtab nav-justified" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="javascript:void()" role="tab">Chat </a> </li>
                        </ul>
                    </div>
                    <div class="box-body">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="messages" role="tabpanel">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 685px;"><div class="chat-box-one-side3" style="overflow: hidden; width: auto; height: 685px;">
                                    <div class="media-list media-list-hover">
                                        <div class="media">
                                          <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="..."></a>
                                          <div class="media-body">
                                            <p>
                                              <a class="hover-primary" href="#"><strong>Mical Clark</strong></a>
                                              <span class="float-end fs-10">10:00pm</span>
                                            </p>
                                            <p>Nullam facilisis velit.</p>
                                          </div>
                                        </div>

                                        <div class="media">
                                          <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/3.jpg" alt="..."></a>
                                          <div class="media-body">
                                            <p>
                                              <a class="hover-primary" href="#"><strong>Colin Nathan</strong></a>
                                              <span class="float-end fs-10">10:00pm</span>
                                            </p>
                                            <p>Nullam facilisis velit.</p>
                                          </div>
                                        </div>
                                    </div>
                                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 368.308px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box bg-lightest">
                          <div class="box-header">
                            <div class="media align-items-top p-0">
                              <a class="avatar avatar-lg status-success mx-0" href="#">
                                <img src="https://trello-members.s3.amazonaws.com/62d0069988bc432cf3bcd773/602d069e2882d1b3294ff15da16ba97c/30.png" class="rounded-circle" alt="...">
                              </a>
                                <div class="d-lg-flex d-block justify-content-between align-items-center w-p100">
                                    <div class="media-body mb-lg-0 mb-20">
                                        <p class="fs-16">
                                          <a class="hover-primary" href="#"><strong>Theron Trump</strong></a>
                                        </p>
                                          <p class="fs-12">Last Seen 10:30pm ago</p>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="box-body">
                              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 580px;"><div class="chat-box-one2" style="overflow: hidden; width: auto; height: 580px;">
                                  <div class="card d-inline-block mb-3 float-start me-2 no-shadow bg-lighter max-w-p80">
                                    <div class="position-absolute pt-1 pe-2 r-0">
                                        <span class="text-extra-small text-muted">09:25</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-row pb-2">
                                            <a class="d-flex" href="#">
                                                <img alt="Profile" src="../images/avatar/1.jpg" class="avatar me-10">
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                    <div class="min-width-zero">
                                                        <p class="mb-0 fs-16 text-dark">Sarah Kortney</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-text-start ps-55">
                                            <p class="mb-0 text-semi-muted">What do you think about our plans for this product launch?</p>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="card d-inline-block mb-3 float-start me-2 no-shadow bg-lighter max-w-p80">
                                    <div class="position-absolute pt-1 pe-2 r-0">
                                        <span class="text-extra-small text-muted">09:28</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-row pb-2">
                                            <a class="d-flex" href="#">
                                                <img alt="Profile" src="../images/avatar/1.jpg" class="avatar me-10">
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                    <div class="min-width-zero">
                                                        <p class="mb-0 fs-16 text-dark">Sarah Kortney</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-text-start ps-55">
                                            <p class="mb-0 text-semi-muted">It looks to me like you have a lot planned before your deadline. I would suggest you push your deadline back so you have time to run a successful advertising campaign.</p>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="card d-inline-block mb-3 float-end me-2 bg-primary max-w-p80">
                                    <div class="position-absolute pt-1 pe-2 r-0">
                                        <span class="text-extra-small">09:41</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-row pb-2">
                                            <a class="d-flex" href="#">
                                                <img alt="Profile" src="../images/avatar/2.jpg" class="avatar me-10">
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                    <div class="min-width-zero">
                                                        <p class="mb-0 fs-16">Mimi Carreira</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-text-start ps-55">
                                            <p class="mb-0 text-semi-muted">I would suggest you discuss this further with the advertising team.</p>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="card d-inline-block mb-3 float-end me-2 bg-primary max-w-p80">
                                    <div class="position-absolute pt-1 pe-2 r-0">
                                        <span class="text-extra-small">09:41</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-row pb-2">
                                            <a class="d-flex" href="#">
                                                <img alt="Profile" src="../images/avatar/2.jpg" class="avatar me-10">
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                    <div class="min-width-zero">
                                                        <p class="mb-0 fs-16">Mimi Carreira</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-text-start ps-55">
                                            <p class="mb-0 text-semi-muted">I am very busy at the moment and on top of everything, I forgot my umbrella today.</p>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="card d-inline-block mb-3 float-start me-2 no-shadow bg-lighter max-w-p80">
                                    <div class="position-absolute pt-1 pe-2 r-0">
                                        <span class="text-extra-small text-muted">09:25</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-row pb-2">
                                            <a class="d-flex" href="#">
                                                <img alt="Profile" src="../images/avatar/1.jpg" class="avatar me-10">
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                    <div class="min-width-zero">
                                                        <p class="mb-0 fs-16 text-dark">Sarah Kortney</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-text-start ps-55">
                                            <p class="mb-0 text-semi-muted">What do you think about our plans for this product launch?</p>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="card d-inline-block mb-3 float-start me-2 no-shadow bg-lighter max-w-p80">
                                    <div class="position-absolute pt-1 pe-2 r-0">
                                        <span class="text-extra-small text-muted">09:28</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-row pb-2">
                                            <a class="d-flex" href="#">
                                                <img alt="Profile" src="../images/avatar/1.jpg" class="avatar me-10">
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                    <div class="min-width-zero">
                                                        <p class="mb-0 fs-16 text-dark">Sarah Kortney</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-text-start ps-55">
                                            <p class="mb-0 text-semi-muted">It looks to me like you have a lot planned before your deadline. I would suggest you push your deadline back so you have time to run a successful advertising campaign.</p>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="card d-inline-block mb-3 float-end me-2 bg-primary max-w-p80">
                                    <div class="position-absolute pt-1 pe-2 r-0">
                                        <span class="text-extra-small">09:41</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-row pb-2">
                                            <a class="d-flex" href="#">
                                                <img alt="Profile" src="../images/avatar/2.jpg" class="avatar me-10">
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                    <div class="min-width-zero">
                                                        <p class="mb-0 fs-16">Mimi Carreira</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-text-start ps-55">
                                            <p class="mb-0 text-semi-muted">I would suggest you discuss this further with the advertising team.</p>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="card d-inline-block mb-3 float-end me-2 bg-primary max-w-p80">
                                    <div class="position-absolute pt-1 pe-2 r-0">
                                        <span class="text-extra-small">09:41</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-row pb-2">
                                            <a class="d-flex" href="#">
                                                <img alt="Profile" src="../images/avatar/2.jpg" class="avatar me-10">
                                            </a>
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                    <div class="min-width-zero">
                                                        <p class="mb-0 fs-16">Mimi Carreira</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-text-start ps-55">
                                            <p class="mb-0 text-semi-muted">I am very busy at the moment and on top of everything, I forgot my umbrella today.</p>
                                        </div>
                                    </div>
                                  </div>
                              </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 243.064px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                          </div>
                          <div class="box-footer no-border">
                             <div class="d-md-flex d-block justify-content-between align-items-center bg-dark p-5 rounded10 b-1 overflow-hidden">
                                    <input class="form-control b-0 py-10" type="text" placeholder="Say something...">
                                    <div class="d-flex justify-content-between align-items-center mt-md-0 mt-30">

                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-primary">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection


