@extends('layouts.guest')

@section('title') {{ $detail->title }} @stop

@section('content')
    @include('layouts.partials.breadcrumb')
    <div class="row my-3">
        <div class="col-lg-8">
            <img src="{{ $detail->media[0]->getOrginalUrl() }}" alt="{{ Str::lower($detail->title) }}">
        </div>
        <div class="col-lg-4">

        </div>
    </div>
@stop