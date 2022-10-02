@extends('layouts.app')

@section('title') Create @stop

@section('content')
    {!! Form::open(['route' => ['jobbank.store'], 'method' => 'POST']) !!}
        @csrf
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card position-relative">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Job Info</h6>
                        </div>
                        <div class="card-body" >
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="domain" class="form-label">Domain</label>
                                {!! Form::select('domain_id', $domains, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card position-relative">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Job Description</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea rows="10" placeholder="Brief Description" name="description" class="form-control" id="description"></textarea>
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
                            Save Job
                        </button>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@stop

@push('js')
    
@endpush