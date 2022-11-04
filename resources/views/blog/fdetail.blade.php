@extends('layouts.guest')

@section('title') {{ $detail->title }} @stop

@section('content')
    @include('layouts.partials.breadcrumb')
    <div class="row my-3 mx-4">
        <div class="col-lg-8">
            <img width="100%" src="{{ $detail->media[0]->original_url }}" alt="{{ Str::lower($detail->title) }}">
            <p></p>
            <p>{{ $detail->description }}</p>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
@stop