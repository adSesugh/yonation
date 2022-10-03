@extends('layouts.app')

@section('title') {{ $resume->fullname }} - Information @stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>{{ $resume->fullname }} - Information</h5>
        </div>
        <div class="card-body">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    @if(isset($resume->code))
                        <div class="form-group">
                            <label for="">Application</label>
                            <span>{{ $resume->code }}</span>
                        </div>
                    @endif
                    @if(isset($resume->email))
                        <div class="form-group">
                            <label for="" style="font-weight: 700">Email Address:</label>
                            <span>{{ $resume->email }}</span>
                        </div>
                    @endif
                    @if(isset($resume->phone))
                        <div class="form-group">
                            <label for="" style="font-weight: 700">Phone Number:</label>
                            <span>{{ $resume->phone }}</span>
                        </div>
                    @endif
                    @if(isset($resume->mobile_no))
                        <div class="form-group">
                            <label for="" style="font-weight: 700">Mobile Number:</label>
                            <span>{{ $resume->mobile_no }}</span>
                        </div>
                    @endif
                    @if(isset($resume->gender))
                        <div class="form-group">
                            <label for="" style="font-weight: 700">Gender:</label>
                            <span class="text-capitalize">{{ $resume->gender }}</span>
                        </div>
                    @endif
                    @if(isset($resume->birthdate))
                        <div class="form-group">
                            <label for="" style="font-weight: 700">Birth Date:</label>
                            <span>{{ \Carbon\Carbon::parse($resume->birthdate)->diffForHumans() }}</span>
                        </div>
                    @endif
                    <hr>
                    <div class="row">
                        <fieldset class="mx-2" style="border: aqua 1px">
                            <legend style="font-size: 16px; font-weight: 700">School Details</legend>
                            @if(isset($resume->school_name))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Name:</label>
                                    <span class="text-capitalize">{{ $resume->school_name }}</span>
                                </div>
                            @endif
                            @if(isset($resume->degree_id))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Qualification:</label>
                                    <span class="text-capitalize">{{ $resume->degree->name }}</span>
                                </div>
                            @endif
                            @if(isset($resume->course))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Course:</label>
                                    <span class="text-capitalize">{{ $resume->course }}</span>
                                </div>
                            @endif
                            @if(isset($resume->year_from))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Year From:</label>
                                    <span class="text-capitalize">{{ $resume->year_from }}</span>
                                </div>
                            @endif
                            @if(isset($resume->year_to))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Year To:</label>
                                    <span class="text-capitalize">{{ $resume->year_to }}</span>
                                </div>
                            @endif
                        </fieldset>
                    </div>
                    <hr>
                    <div class="row">
                        <fieldset class="mx-2" style="border: 2px;">
                            <legend style="font-size: 16px; font-weight: 700">Job Seeking</legend>
                            @if(isset($resume->domain_id))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Name:</label>
                                    <span class="text-capitalize">{{ $resume->domain->name }}</span>
                                </div>
                            @endif
                            @if(isset($resume->job_id))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Course:</label>
                                    <span class="text-capitalize">{{ $resume->job->title }}</span>
                                </div>
                            @endif
                        </fieldset>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        @if(count($resume->media) > 0)
                            <img src="{{ $resume->media[0]->original_url }}" style="height: 350px;" alt="{{ $resume->fullname }}">
                        @else
                            <div class="row">
                                <div class="col-lg-12 text-justify-center text-center">
                                    <h5 class="text-center mt-4">No Passport</h5>
                                </div>
                            </div>
                        @endif
                        <hr>
                        @if(count($resume->media) > 0)
                            <iframe src="https://docs.google.com/gview?url={{ $resume->media[1]->original_url }}&embedded=true" style="width:100%; height:500px;" frameborder="0"></iframe>
                        @else
                            <div class="row">
                                <div class="col-lg-12 text-justify-center text-center">
                                    <h5 class="text-center">No CV uploaded</h5>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('css')
@endpush

@push('js')
@endpush