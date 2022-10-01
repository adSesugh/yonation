@extends('layouts.app')

@section('title') Create @stop

@section('content')
    <div class="row">
        {!! Form::open(['route' => ['blogs.store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            @csrf
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card position-relative">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Blog</h6>
                            </div>
                            <div class="card-body" >
                                <input type="file" name="photo" accept="image/jpeg,image/png,image/gif" onchange="loadFile(event)" />
                                <div>
                                    <img id="output" height="200px" width="100%"/>
                                </div>
                            </div>
                        </div>
        
                    </div>
                    <div class="col-lg-8">
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
                                    <label for="subtitle" class="form-label">Category</label>
                                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
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
                                Save Blog
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
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