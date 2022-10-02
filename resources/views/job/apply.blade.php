@extends('layouts.auth')

@section('title') Register @stop

@section('content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image" style="width: 100px;"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Fill your Information!</h1>
                        </div>
                        {!! Form::open(['class' => 'user', 'route' => 'job.applyStore', 'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone">
                                </div>
                                <div class="col-sm-6">
                                    <input type="tel" class="form-control" name="mobile_no" id="mobile_no" placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="birthdate">Birth Date</label>
                                    <input type="date" class="form-control" name="birthdate" id="birthdate">
                                </div>
                                <div class="col-sm-6">
                                    <label for="gender">Gender</label>
                                    {!! Form::select('gender', $genders, null, ['class' => 'form-control', 'id' => 'gender']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="domain_id">Job Function</label>
                                    {!! Form::select('domain_id', $domains, null, ['class' => 'form-control', 'id'  => 'domain_id']) !!}
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="degree_id">Qualification</label>
                                        {!! Form::select('degree_id', $degrees, null, ['class' => 'form-control', 'id' => 'degree_id']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="school_name" id="school_name" placeholder="School Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="course" id="course" placeholder="Course Completed">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="year_from">Attended From Year</label>
                                    <input type="year" class="form-control" name="year_from" id="year_from" placeholder="Attended From Year">
                                </div>
                                <div class="col-sm-6">
                                    <label for="year_to">Attended To Year</label>
                                    <input type="year" class="form-control" name="year_to" id="year_to" placeholder="Attended To Year">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="photo">Passport upload</label>
                                    <input type="file" class="form-control" name="photo" id="photo" placeholder="Photo">
                                </div>
                                <div class="col-sm-6 align-middle">
                                    <label for="resume">Resume/CV upload</label>
                                    <input type="file" class="form-control" name="resumecv" id="resumecv" placeholder="Resume CV upload">
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
