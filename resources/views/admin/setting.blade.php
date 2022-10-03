@extends('layouts.app')

@section('title') Settings @stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h6>{{ __('Website Settings') }}</h6>
        </div>
        <div class="card-body">
            <div class="row mx-4">
                {!! Form::open($settings, ['method' => 'POST', 'route' => ['settings.post']]) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
@endpush