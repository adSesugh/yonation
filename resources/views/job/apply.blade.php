@extends('layouts.auth')

@section('title') Register @stop

@section('content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image" style="width: 100px;">
                    <div class="text-right mt-2">
                        <a class="btn btn-sm btn-secondary" href="{{ route('index') }}">
                            <i class="fas fa-home"></i>
                            Back to Home
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Fill your Information!</h1>
                        </div>
                        {!! Form::open(['class' => 'user', 'route' => 'job.applyStore', 'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" id="fullname" placeholder="Full Name">
                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Phone Number">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="tel" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" id="mobile_no" placeholder="Mobile Number">
                                    @error('mobile_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="birthdate">Birth Date</label>
                                    <input type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" id="birthdate">
                                    @error('birthdate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="gender">Gender</label>
                                    {!! Form::select('gender', $genders, null, ['class' => 'form-control', 'id' => 'gender']) !!}
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="domain_id">Job Function</label>
                                    {!! Form::select('domain_id', $domains, null, ['class' => 'form-control', 'id'  => 'domain_id']) !!}
                                    @error('domain_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="degree_id">Qualification</label>
                                        {!! Form::select('degree_id', $degrees, null, ['class' => 'form-control', 'id' => 'degree_id']) !!}
                                        @error('degree_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('school_name') is-invalid @enderror" name="school_name" id="school_name" placeholder="School Name">
                                @error('school_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('course') is-invalid @enderror" name="course" id="course" placeholder="Course Completed">
                                @error('course')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="year_from">Attended From Year</label>
                                    <input type="year" class="form-control @error('year_from') is-invalid @enderror" name="year_from" id="year_from" placeholder="Attended From Year">
                                    @error('year_from')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="year_to">Attended To Year</label>
                                    <input type="year" class="form-control @error('year_to') is-invalid @enderror" name="year_to" id="year_to" placeholder="Attended To Year">
                                    @error('year_to')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="photo">Passport upload</label>
                                    <input accept="image/jpeg,image/png,image/jpg" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo" placeholder="Photo">
                                    @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 align-middle">
                                    <label for="resume">Resume/CV upload</label>
                                    <input accept=".doc,.pdf,.docx" type="file" class="form-control @error('resumecv') is-invalid @enderror" name="resumecv" id="resumecv" placeholder="Resume CV upload">
                                    @error('resumecv')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Submit') }}
                            </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
