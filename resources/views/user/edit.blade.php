@extends('layouts.user')

@section('title') User Detail @endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-10">
                    <h5>{{ $user->fullname }} - Information</h5>
                </div>
                <div class="col-lg-2 text-right">
                    @if($user->treated)
                        <span class="badge badge-success px-2">Treated</span>
                    @else
                        <span class="badge badge-primary px-2">Pending</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="row">
                        @if(count($user->media) > 0)
                            <div class="col-lg-12 text-justify-center text-center">
                                <img class="img-rounded" src="{{ $user->media[0]->original_url }}" style="height: 150px;" alt="{{ $user->fullname }}">
                            </div>
                        @else
                            <div class="col-lg-12 text-justify-center text-center">
                                <h5 class="text-center mt-4">No Passport</h5>
                            </div>
                        @endif
                    </div>
                    <hr>
                    @if(isset($user->code))
                        <div class="form-group">
                            <label for="">Application</label>
                            <span>{{ $user->code }}</span>
                        </div>
                    @endif
                    @if(isset($user->email))
                        <div class="form-group">
                            <label for="" style="font-weight: 700">Email Address:</label>
                            <span>{{ $user->email }}</span>
                        </div>
                    @endif
                    @if(isset($user->phone))
                        <div class="form-group">
                            <label for="" style="font-weight: 700">Phone Number:</label>
                            <span>{{ $user->phone }}</span>
                        </div>
                    @endif
                    @if(isset($user->mobile_no))
                        <div class="form-group">
                            <label for="" style="font-weight: 700">Mobile Number:</label>
                            <span>{{ $user->mobile_no }}</span>
                        </div>
                    @endif
                    @if(isset($user->gender))
                        <div class="form-group">
                            <label for="" style="font-weight: 700">Gender:</label>
                            <span class="text-capitalize">{{ $user->gender }}</span>
                        </div>
                    @endif
                    @if(isset($user->birthdate))
                        <div class="form-group">
                            <label for="" style="font-weight: 700">Birth Date:</label>
                            <span>{{ \Carbon\Carbon::parse($user->birthdate)->format('d M, Y') }}</span>
                        </div>
                    @endif
                    <hr>
                    <div class="row">
                        <fieldset class="mx-2" style="border: aqua 1px">
                            <legend style="font-size: 16px; font-weight: 700">School Details</legend>
                            @if(isset($user->school_name))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Name:</label>
                                    <span class="text-capitalize">{{ $user->school_name }}</span>
                                </div>
                            @endif
                            @if(isset($user->degree_id))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Qualification:</label>
                                    <span class="text-capitalize">{{ $user->degree->name }}</span>
                                </div>
                            @endif
                            @if(isset($user->course))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Course:</label>
                                    <span class="text-capitalize">{{ $user->course }}</span>
                                </div>
                            @endif
                            @if(isset($user->year_from))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Year From:</label>
                                    <span class="text-capitalize">{{ $user->year_from }}</span>
                                </div>
                            @endif
                            @if(isset($user->year_to))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Year To:</label>
                                    <span class="text-capitalize">{{ $user->year_to }}</span>
                                </div>
                            @endif
                        </fieldset>
                    </div>
                    <hr>
                    <div class="row">
                        <fieldset class="mx-2" style="border: 2px;">
                            <legend style="font-size: 16px; font-weight: 700">Job Seeking</legend>
                            @if(isset($user->domain_id))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Name:</label>
                                    <span class="text-capitalize">{{ $user->domain->name }}</span>
                                </div>
                            @endif
                            @if(isset($user->job_id))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Course:</label>
                                    <span class="text-capitalize">{{ $user->job->title }}</span>
                                </div>
                            @endif
                        </fieldset>
                    </div>
                    <hr>
                    <div class="row">
                        <fieldset class="mx-2" style="border: aqua 1px">
                            <legend style="font-size: 16px; font-weight: 700">Father Information</legend>
                            @if(isset($user->father))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Name:</label>
                                    <span class="text-capitalize">{{ $user->father }}</span>
                                </div>
                            @endif
                            @if(isset($user->fcity))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">City:</label>
                                    <span class="text-capitalize">{{ $user->fcity }}</span>
                                </div>
                            @endif
                            @if(isset($user->fstate))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">State:</label>
                                    <span class="text-capitalize">{{ $user->fstate }}</span>
                                </div>
                            @endif
                        </fieldset>
                    </div>
                    <hr>
                    <div class="row">
                        <fieldset class="mx-2" style="border: aqua 1px">
                            <legend style="font-size: 16px; font-weight: 700">Mother Information</legend>
                            @if(isset($user->mother))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Name:</label>
                                    <span class="text-capitalize">{{ $user->mother }}</span>
                                </div>
                            @endif
                            @if(isset($user->mcity))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">City:</label>
                                    <span class="text-capitalize">{{ $user->mcity }}</span>
                                </div>
                            @endif
                            @if(isset($user->mstate))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">State:</label>
                                    <span class="text-capitalize">{{ $user->mstate }}</span>
                                </div>
                            @endif
                        </fieldset>
                    </div>
                    <hr>
                    <div class="row">
                        <fieldset class="mx-2" style="border: aqua 1px">
                            <legend style="font-size: 16px; font-weight: 700">Applicant Address</legend>
                            @if(isset($user->address))
                                <div class="mx-2">
                                    <label for="" style="font-weight: 700">Name:</label>
                                    <span class="text-capitalize">{{ $user->address }}</span>
                                </div>
                            @endif
                        </fieldset>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="row m-2 p-4 border">
                            {!! Form::model($user, ['method' => 'PATCH', 'class' => 'col-lg-12', 'route' => ['user.resume.update', $user->id], 'enctype' => 'multipart/form-data']) !!}
                                @csrf
                                <input type="hidden" name="resumeId" value="{{ $user->id }}">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <label for="comment" class="form-label">Passport Photograph with < 2MB</label>
                                        <div class="card-body" >
                                            <input type="file" name="photo" accept="image/jpeg,image/png,image/gif" onchange="loadFile(event)" />
                                            <div>
                                                <img id="output" height="200px" width="100%"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <label for="comment" class="form-label">Resume/CV with < 2MB</label>
                                        <div class="card-body" >
                                            <input type="file" name="resumecv" accept=".pdf" onchange="loadResume(event)" />
                                            <div>
                                                <iframe id="routput" style="width:100%; height:600px;" frameborder="0"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::submit() !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')

@endpush

@push('js')
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        var loadResume = function(event) {
            var routput = document.getElementById('routput');
            routput.src = URL.createObjectURL(event.target.files[0]);
            routput.onload = function() {
                URL.revokeObjectURL(`https://docs.google.com/gview?url=${routput.src}&embedded=true`) // free memory
            }
        };
    </script>
@endpush