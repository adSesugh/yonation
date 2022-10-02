@extends('layouts.auth')

@section('title') Register @stop

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
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
                    {!! Form::open(['class' => 'user']) !!}
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="fullname" id="fullname" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="tel" class="form-control form-control-user" name="phone" id="phone" placeholder="Phone">
                            </div>
                            <div class="col-sm-6">
                                <input type="tel" class="form-control form-control-user" name="mobile_no" id="mobile_no" placeholder="Mobile Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="date" class="form-control form-control-user" name="birthdate" id="birthdate">
                            </div>
                            <div class="col-sm-6">
                                {!! Form::select('gender', ['M' => 'Male', 'F' => 'Female'], null, ["class" => "form-control", 'placeholder' => 'Gender']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="domain_id" id="domain_id" placeholder="Job Function">
                            </div>
                            <div class="col-sm-6">
                                {!! Form::text('degree_id', null, ["class" => "form-control form-control-user", 'placeholder' => 'Degree/Cerficate']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="school_name" id="school_name" placeholder="School Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="course" id="course" placeholder="Course Completed">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="year_from" id="year_from" placeholder="Attended From Date">
                            </div>
                            <div class="col-sm-6">
                                {!! Form::text('year_to', null, ["class" => "form-control form-control-user", 'placeholder' => 'Attended To Date']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="file" class="form-control form-control-user" name="photo" id="photo" placeholder="Photo">
                            </div>
                            <div class="col-sm-6">
                                {!! Form::file('resumecv', null, ["class" => "form-control form-control-user", 'placeholder' => 'CV']) !!}
                            </div>
                        </div>
                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Submit
                        </a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
