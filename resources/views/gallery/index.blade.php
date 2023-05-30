@extends('layouts.base')
@section('content')
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box no-shadow mb-0 bg-transparent">
                        <div class="box-header no-border">
                            <h3 class="box-title">Gallery</h3>
                            <ul class="box-controls pull-right d-md-flex d-none">
                                <li class="dropdown">
                                    <button class="btn btn-success add-photo"
                                            style="padding: 10px 30px; font-size: 14px;" data-bs-toggle="modal" data-bs-target="#myModal">Add Gallery Photo</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div  class="row fx-element-overlay">
                    @foreach($photos as $photo)
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="box">
                            <div class="fx-card-item">
                                <div class="fx-card-avatar fx-overlay-1"> <img
                                        src="{{ $photo->photo }}"
                                        alt="user" class="bbsr-0 bber-0">
                                    <div class="fx-overlay scrl-up">
                                        <ul class="fx-info">
                                            <li><a class="btn btn-outline image-popup-vertical-fit"
                                                   href="{{ $photo->photo }}">
                                                    <i class="fas fa-eye    "></i> </a></li>
                                            <li>
                                                <form action="{{ route('api.galleries.update', $photo) }}" method="post">
                                                    @method('put')
                                                    <input type="hidden" name='is_published' value="{{ !$photo->is_published }}">
                                                    <button class="btn btn-outline" type="submit"> <i
                                                                class="fas fa-check"></i> </button>
                                                </form>
                                            </li>
                                            <li><a class="btn btn-outline" href="javascript:void(0);"> <i
                                                            class="fas fa-trash    "></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    @endforeach
                </div>
            </section>
        </section>
        <!-- /.content -->
        <div id="myModal" class="modal fade in" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Upload Photo</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('api.galleries.store') }}" enctype="multipart/form-data" class="form-horizontal x-submit" data-then="reload">
                            <div class="form-group">
                                <div class="col-md-12 mb-3">
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                                <div class="col-md-12">
                                    <input type="file" name="photo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-danger float-end">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .mfp-img{
           width: 850px !important;
           max-width: 850px !important;
        }
    </style>
@endpush
