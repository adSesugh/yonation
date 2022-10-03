@extends('layouts.app')

@section('title') Settings @stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h6>{{ __('Website Settings') }}</h6>
        </div>
        <div class="card-body">
            <div class="row mx-4 text-justify-center text-center">
                <div class="col-lg-12">
                    {!! Form::model($settings, ['method' => 'POST', 'route' => ['settings.store']]) !!}
                        <div class="row mb-3">
                            <label for="app_name" class="col-sm-4 col-form-label">App Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="app_name" id="app_name" value="{{ $settings[0] }}" placeholder="App Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fb_url" class="col-sm-4 col-form-label">Facebook URL</label>
                            <div class="col-sm-6">
                                <input type="url" class="form-control" name="fb_url" value="{{ $settings[5] }}" id="fb_url">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="twt_url" class="col-sm-4 col-form-label">Twitter URL</label>
                            <div class="col-sm-6">
                                <input type="url" class="form-control" name="twt_url" value="{{ $settings[6] }}" id="twt_url">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="insta_url" class="col-sm-4 col-form-label">Instagram URL</label>
                            <div class="col-sm-6">
                                <input type="url" class="form-control" name="insta_url" value="{{ $settings[7] }}" id="insta_url">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="linkedin_url" class="col-sm-4 col-form-label">LinkedIn URL</label>
                            <div class="col-sm-6">
                                <input type="url" class="form-control" name="linkedin_url" value="{{ $settings[8] }}" id="linkedin_url">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="vision" class="col-sm-4 col-form-label">Vision Statement</label>
                            <div class="col-sm-8">
                                <textarea name="vision" id="vision" rows="4" class="form-control" placeholder="Vision Statement">{{ $settings[3] }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mission" class="col-sm-4 col-form-label">Mission Statement</label>
                            <div class="col-sm-8">
                                <textarea name="mission" id="mission" rows="4" class="form-control" placeholder="Mission Statement">{{ $settings[4] }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="short_history" class="col-sm-4 col-form-label">Brief History</label>
                            <div class="col-sm-8">
                                <textarea name="short_history" id="short_history" rows="6" class="form-control" placeholder="Brief History">{{ $settings[2] }}</textarea>
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
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
@endpush