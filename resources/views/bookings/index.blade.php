@extends('layouts.base')

@section('content')
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-xl-4 col-12">
                    <div class="box box-body">
                        <h6>
                            <span class="text-uppercase">Bookings</span>
                            {{-- <span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">View</a></span> --}}
                        </h6>
                        <br>
                        <p class="fs-46">{{ $bookings->count() }}</p>

                        <div class="progress progress-xxs mt-0 mb-10">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="fs-12">Total number of bookings</div>
                    </div>
                </div>
                <!-- /.col -->

                <div class="col-xl-4 col-12">
                    <div class="box box-body">
                        <h6>
                            <span class="text-uppercase">COMPLETED</span>
                            {{-- <span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">View</a></span> --}}
                        </h6>
                        <br>
                        <p class="fs-46">{{ $bookings->where('status', \App\Models\Booking::COMPLETED)->count() }}</p>

                        <div class="progress progress-xxs mt-0 mb-10">
                            <div class="progress-bar bg-purple" role="progressbar" style="width: 20%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="fs-12">Completed bookings</div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xl-4 col-12">
                    <div class="box box-body">
                        <h6>
                            <span class="text-uppercase">PENDING</span>
                        </h6>
                        <br>
                        <p class="fs-46">{{ $bookings->where('status', \App\Models\Booking::PENDING)->count() }}</p>

                        <div class="progress progress-xxs mt-0 mb-10">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="flexbox fs-12">
                            <span>Pending bookings</span>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h5 class="page-title">Showing a list of all bookings</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-9">
                    <div class="box">
                        <div class="box-header with-border">
                          <h4 class="box-title">Booking List</h4>
                          <div class="box-controls pull-right">
                            <div class="lookup lookup-circle lookup-right">
                              <input type="text" name="s">
                            </div>
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="table-responsive">
                              <table class="table table-hover">
                                <tbody><tr>
                                  <th>Client Name</th>
                                  <th>Therapist</th>
                                  <th></th>
                                  <th>Date/Time</th>
                                  <th>Status</th>
                                  <th>Phone</th>
                                  <th>Address</th>
                                </tr>
                                @admin
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td><a href="{{ route('users.show', $booking) }}"><h5>{{ $booking->client->name }}</h5></a></td>
                                            <td><h6>{{ $booking->therapist->name }}</h6></td>
                                            <td><h3>{{ $booking->users }}</h3></td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{ $booking->time }}</span> </td>
                                            <td><span class="badge badge-pill badge-danger">{{ $booking->status }}</span></td>
                                            <td>{{ $booking->phone }}</td>
                                            <td>{{ $booking->address }}</td>
                                        </tr>
                                    @endforeach
                                @endadmin
                                @therapist

                                @foreach ($bookings as $booking)
                                    <tr>
                                        <td><a href="{{ route('users.show', $booking) }}"><h5>{{ $booking->client->name }}</h5></a></td>
                                            <td><h6>{{ $booking->therapist->name }}</h6></td>
                                        <td><h3>{{ $booking->users }}</h3></td>
                                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{ $booking->time }}</span> </td>
                                        {{-- <td></td> --}}
                                        {{-- <td>$158.00</td> --}}
                                        <td><span class="badge badge-pill badge-success">{{ $booking->status }}</span></td>
                                        <td>{{ $booking->phone }}</td>
                                        <td>{{ $booking->address }}</td>
                                    </tr>
                                @endforeach

                                @endtherapist


                              </tbody></table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                      </div>

                </div>

            </div>
        </section>
    </div>
@endsection


