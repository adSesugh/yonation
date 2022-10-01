@extends('layouts.guest')

@section('title') {{ $detail->title }} @stop

@section('content')
    @include('layouts.partials.breadcrumb')
@stop