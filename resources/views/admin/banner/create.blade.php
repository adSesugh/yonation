@extends('layouts.app')

@section('title') Create @stop

@section('content')
    <div class="row">
        <form method="POST"  action="{{ route('banners.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card position-relative">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Banner</h6>
                            </div>
                            <div class="card-body" >
                                <input type="file" name="banner" />
                                <div>Picture</div>
                            </div>
                        </div>
        
                    </div>
                    <div class="col-lg-6">
                        <div class="card position-relative">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Other Details</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                </div>
                                <div class="mb-3">
                                    <label for="subtitle" class="form-label">Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="Sub Title">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Brief Description</label>
                                    <textarea rows="5" placeholder="Brief Description" name="description" class="form-control" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 text-right">
                        <div class="mb-3">
                            <button class="btn btn-sm btn-primary" type="submit">
                                <i class="fas fa-save" aria-hidden="true"></i>
                                Save Banner
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop