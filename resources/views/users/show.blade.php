@extends('layouts.base')

@section('content')
    <section class="content">

        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-body position-relative">
                        <form  action="{{ route('api.users.update', $user) }}" method="post" id="user-update-form" class="x-submit" data-then="reload">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="box box-body b-1 text-center no-shadow">
                                        <img src="{{ $user->avatar }}" id="product-image" class="img-fluid" alt="">
                                    </div>

                                    <div class="clear"></div>
                                </div>
                                <div class="col-md-8 col-sm-6">
                                    <div class="d-md-flex justify-content-between align-items-start">
                                        <h2 class="box-title mt-0 ">
                                            <div>{{ $user->name }}</div>
                                            <div class="fs-5 mt-3">
                                                <span class="fw-light">Unique ID - </span>
                                                <span>{{ $user->unique_id }}</span>
                                            </div>
                                        </h2>
                                        <a href="" class="text-warning">View bookings</a>
                                    </div>

                                    <h5 class="pro-price mb-0 mt-20">Booking Completed: <span style="padding: 5px 10px; background-color: green; border-radius: 10px; color: white;" >0</span></h5>
                                    <hr/>
                                    <div class="form-element col-12">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea name="bio" id="bio" rows="4" placeholder="Enter bio here..." class="form-control">{{ $user->bio }}</textarea>
                                    </div>
                                    <h4 class="box-title mt-20">Qualifications</h4>
                                    <ul class="list-icons list-unstyled">
                                        <li><i class="fa fa-check text-danger me-3"></i> Deep Tissue Massage</li>
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="nav-tabs-custom">

                                        <div class="tab-content">

                                            <div class="tab-pane active" id="settings">

                                                <div class="box no-shadow p-5">
                                                    <div class="form-horizontal form-element col-12 x-submit" data-then="reload">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 form-label">First Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control" id="inputName" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 form-label">First Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control" id="inputName" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail" class="col-sm-2 form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="inputEmail" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPhone" class="col-sm-2 form-label">Phone Number</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" id="inputPhone" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputSkills" class="col-sm-2 form-label">Gender</label>

                                                            <div class="col-sm-10">
                                                                <select type="text" class="form-control form-select" id="inputSkills" name="gender">
                                                                    <option value="M" @selected(old('gender', $user->gender) == $user->gender)>MALE</option>
                                                                    <option value="F" @selected(old('gender', $user->gender) == $user->gender)>FEMALE</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputSkills" class="col-sm-2 form-label">Location</label>

                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" value="{{ $user->location }}" id="inputSkills" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="gap-items">
                                                            <button class="btn btn-primary" type="submit">
                                                                <i class="fa fa-user-pen" aria-hidden="true"></i> Update Profile
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.tab-pane -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="d-flex gap-3 position-absolute" style="bottom: 100px; right: 20px">
                            <form action="{{ route('api.users.update', $user) }}" method="post" class="x-submit d-inline" data-then="reload">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="active_status" value="{{ $user->active_status ? 0 : 1 }}">
                                @if($user->active_status)
                                    <button type="submit" class="btn btn-success"> <i class="fas fa-user-check"></i> Active</button>
                                @else
                                    <button type="submit" class="btn btn-warning"> <i class="fas fa-user-alt-slash"></i> Suspended</button>
                                @endif
                            </form>
                            <button class="btn btn-danger"><i class="fa fa-user-times" aria-hidden="true"></i> Delete Account</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
