@extends('layouts.base')

@section('content')
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h4 class="box-title">Basic Info</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form">
                          <div class="box-body">
                              <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                              <hr class="my-15">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" value="" placeholder="First Name">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control" placeholder="E-mail">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" placeholder="Phone">
                                  </div>
                                </div>
                              </div>

                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                              <button type="button" class="btn btn-danger me-1">
                                <i class="ti-trash"></i> Delete Account
                              </button>
                              <button type="submit" class="btn btn-primary">
                                <i class="ti-save-alt"></i> Update Profile
                              </button>
                          </div>
                      </form>
                    </div>
                    <!-- /.box -->
              </div>
                <!-- /.col -->
            </div>

        </section>
    </div>
@endsection
