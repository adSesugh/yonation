@extends('layouts.guest')

@section('title') {{ $detail->title }} @stop

@section('content')
    @include('layouts.partials.breadcrumb')
    <div class="row my-3 mx-4">
        <div class="col-lg-8">
            <div class="row">
                <h5>{{ $detail->title }}</h5>
            </div>
            <img width="100%" src="{{ $detail->media[0]->original_url }}" alt="{{ Str::lower($detail->title) }}">
            <div class="row my-2">
                <div class="col-lg-6">
                    {{ $detail->category->name }}
                </div>
                <div class="col-lg-6" style="align-items: flex-end; text-align:right;">
                    {{ \Carbon\Carbon::parse($detail->created_at)->format('F j, Y') }}
                </div>
            </div>
            <p>{{ $detail->description }}</p>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
@stop