@extends('layouts.base')

@section('content')
<section class="content">
    <div class="col-lg-12">
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Settings</h4>
          </div>
          <!-- /.box-header -->
          <form class="form">
              <div class="box-body">
                  <h4 class="box-title text-info mb-0">Personal Info</h4>
                  <hr class="my-15">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name">
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
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Nationality</label>
                        <input type="text" class="form-control" placeholder="Nationality">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Hobby</label>
                        <input type="text" class="form-control" placeholder="Swimming">
                      </div>
                    </div>
                  </div>
                  <h4 class="box-title text-info mb-0 mt-20">Pricing</h4>
                  <hr class="my-15">
                  <div class="form-group"></div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Massage Type</label>
                        <select class="form-select">
                          <option>Select Massage</option>
                          <option>Nuru</option>
                          <option>Swedish</option>
                          <option>Deep Tissue</option>
                          <option>Aromatherapy</option>
                          <option>Shiatsu</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Budget</label>
                        <select class="form-select">
                          <option>Budget</option>
                          <option>5000</option>
                          <option>10000</option>
                          <option>20000</option>
                          <option>20000</option>
                        </select>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <button type="submit" class="btn btn-success">
                    Update Settings
                  </button>
              </div>
          </form>
        </div>
        <!-- /.box -->
    </div>
</section>
@endsection
