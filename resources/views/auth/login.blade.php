@extends('layouts.auth')

@section('title') Login @stop

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-xl-10 col-lg-12 col-md-9 mt-4">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image">
                        <div class="text-right mt-2">
                            <a class="btn btn-sm btn-secondary" href="{{ route('index') }}">
                                <i class="fas fa-home"></i>
                                Back to Home
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input 
                                        name="email"
                                        type="email" 
                                        class="form-control form-control-user @error('email') is-invalid @enderror"
                                        id="email" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address..."
                                        value="{{ old('email') }}"
                                        required
                                        autofocus
                                    >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input 
                                        name="password"
                                        type="password" 
                                        class="form-control form-control-user @error('password') is-invalid @enderror"
                                        id="password" 
                                        placeholder="Password"
                                        required 
                                        autocomplete="current-password"
                                    >
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Login') }}
                                </button>
                                <hr>
                            </form>
                            {{-- <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
