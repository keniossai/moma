@extends('layouts.base')

@section('content')
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-xl-4 col-12">
                    <div class="box box-body">
                      <h6>
                        <span class="text-uppercase">Admin</span>
                        <span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">View</a></span>
                      </h6>
                      <br>
                      <p class="fs-26">{{ $admin_count }}</p>

                      <div class="progress progress-xxs mt-0 mb-10">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="fs-12">Total number of admin</div>
                    </div>
                </div>
                <!-- /.col -->

                <div class="col-xl-4 col-12">
                    <div class="box box-body">
                      <h6>
                        <span class="text-uppercase">Therapist</span>
                        <span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">View</a></span>
                      </h6>
                      <br>
                      <p class="fs-26">{{ $therapist_count }}</p>

                      <div class="progress progress-xxs mt-0 mb-10">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="fs-12">Total number of Therapist</div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xl-4 col-12">
                    <div class="box box-body">
                      <h6>
                        <span class="text-uppercase">Clients</span>
                      </h6>
                      <br>
                      <p class="fs-26">{{ $client_count }}</p>

                      <div class="progress progress-xxs mt-0 mb-10">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 52%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="flexbox fs-12">
                        <span>Total amount of client visited</span>
                      </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h3 class="page-title">Therapist</h3>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12 col-md-9">
					<div class="box">
					  <div class="media-list media-list-divided media-list-hover">

                          @foreach($therapists as $therapist )
                            <div class="media align-items-center">
                              <span class="badge badge-dot badge-danger"></span>
                              <a class="avatar avatar-lg status-success" href="#">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKJrU8aNjtiV87LSNBzom3DFr_aJvpUwTYwJ-ayXJ_IKlZnFen8d5Ug_MflhERsMQ2QBQ&usqp=CAU" alt="...">
                              </a>
                              <div class="media-body">
                                <h4>
                                  <a href="{{ route('users.show', $therapist) }}"><strong>{{ $therapist->name }}</strong></a>
                                </h4>
                              </div>
                              <div class="media-body">
                                <p>
                                  <a href="#"><strong>Nuru Massage</strong></a>
                                </p>
                              </div>
                              <div class="media-right gap-items">
                                <div class="btn-group">
                                  <a class="media-action lead" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('show') }}"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endforeach


                        @if(false)
                            <div class="media align-items-center">
                              <span class="badge badge-dot badge-warning"></span>
                              <a class="avatar avatar-lg" href="#">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWCXNoZalGIhwsDnKyPNhgtIztiGAk1okW0CMyR3Q-YU_1ggh1JlZuwIwOSeDORP6dsqA&usqp=CAU" alt="...">
                              </a>
                              <div class="media-body">
                                <h4>
                                  <a href="#"><strong>John Malice</strong></a>
                                </h4>
                              </div>
                              <div class="media-body">
                                <p>
                                  <a href="#"><strong>Body Massage</strong></a>
                                </p>
                              </div>

                              <div class="media-right gap-items">
                                <div class="btn-group">
                                  <a class="media-action lead" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                                  </div>
                                </div>

                              </div>
                            </div>

                            <div class="media align-items-center">
						  <span class="badge badge-dot badge-success"></span>
						  <a class="avatar avatar-lg status-warning" href="#">
							<img src="https://static.wixstatic.com/media/fd2b43_1dcb00a473e8471795fd96f3a500a99d~mv2.jpg/v1/crop/x_0,y_0,w_713,h_713/fill/w_560,h_560,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/Hailmasseur%20profile.jpg" alt="...">
						  </a>
						  <div class="media-body">
							<h4>
							  <a href="#"><strong>Melisa Coplam</strong></a>
							</h4>
						  </div>
						  <div class="media-body">
							<p>
							  <a href="#"><strong>Oil Massage</strong></a>
							</p>
						  </div>
						  <div class="media-right gap-items">
							<div class="btn-group">
							  <a class="media-action lead" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
							  <div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
							  </div>
							</div>
						  </div>
						</div>
                          @endif

					  </div>
					</div>
				</div>

			</div>
        </section>
    </div>
@endsection
