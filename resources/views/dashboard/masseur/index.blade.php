@extends('layouts.base')


@section('content')
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="box bg-primary">
                        <div class="box-body d-flex px-0">
                            <div class="flex-grow-1 p-30 flex-grow-1 bg-img dask-bg bg-none-md"
                                style="background-position: right bottom; background-size: 60% 100%; background-image: url({{ asset('assets/img/custom-1.svg') }})">
                                <div class="row">
                                    <div class="col-12 col-xl-7">
                                        <h2>Hello, <strong>John!</strong></h2>
                                        <p class="text-white-50 my-10 fs-16">
                                            Your profile is yet to be approved
                                        </p>
                                        <p class="text-white-50 my-10 fs-16">
                                            Progress is <strong class="text-warning">very good!</strong>
                                        </p>
                                    </div>
                                    <div class="col-12 col-xl-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 col-12">
                    <div class="box box-body">
                      <h6>
                        <span class="text-uppercase">Gallery</span>
                        <span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">View</a></span>
                      </h6>
                      <br>
                      <p class="fs-26">0</p>

                      <div class="progress progress-xxs mt-0 mb-10">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="fs-12">Total number of admin</div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xl-6 col-12">
                    <div class="box box-body">
                      <h6>
                        <span class="text-uppercase">Clients</span>
                      </h6>
                      <br>
                      <p class="fs-26">0</p>

                      <div class="progress progress-xxs mt-0 mb-10">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 52%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="flexbox fs-12">
                        <span>Total amount of client visited</span>
                      </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>
@endsection
