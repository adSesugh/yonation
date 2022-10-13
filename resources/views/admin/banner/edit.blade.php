@extends('layouts.app')

@section('title') Create @stop

@section('content')
    {!! Form::model($banner, ['route' => ['banners.update', $banner->id], 'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}
        @csrf
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card position-relative">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Banner</h6>
                        </div>
                        <div class="card-body" >
                            <input type="file" name="banner" accept="image/jpeg,image/png,image/gif" onchange="loadFile(event)" />
                            <div>
                                @isset($banner->media[0])
                                    <img src="{{ $banner->media[0]->original_url }}" alt="{{ $banner->title }}" height="200px" width="100%">
                                @endisset
                                <img id="output" height="300px" width="100%"/>
                            </div>
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
                                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'id' => 'title']) !!}
                            </div>
                            <div class="mb-3">
                                <label for="subtitle" class="form-label">Sub Title</label>
                                {!! Form::text('sub_title', null, ['class' => 'form-control', 'placeholder' => 'Sub Title', 'id' => 'sub_title']) !!}
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Brief Description</label>
                                {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5, 'id' => 'description', 'placeholder' => 'Brief Description', 'maxLength' => 300]) !!}
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
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@stop

@push('js')
    <script>
        var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
        };
    </script>
@endpush