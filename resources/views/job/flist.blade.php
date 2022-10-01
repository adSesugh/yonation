@extends('layouts.guest')

@section('title') Jobs @stop

@section('content')
    @include('layouts.partials.breadcrumb')
    <div class="row mt-2 mx-4">
        <div class="col-lg-8">
            <div>
                <div class="card-header">Job Opportunities</div>
                <div class="card-body">
                    @foreach ($jobs as $item)
                        <div class="row border">
                            <h5>{{ $item->title }}</h5>
                            <em>{{ $item->domain->name }}</em>
                            <p>{{ Str::limit($item->description, 250) }} <a style="text-decoration: black" href="{{ route('job.detail', $item->slug) }}">Read me...</a></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div>
                <div class="card-header">Recent Blogs</div>
                <div class="col-lg-12">
                @foreach ($blogs as $blog)
                    <div class="row mb-2">
                        <div class="col-lg-3">
                            @if(count($blog->media) > 0)
                                <img src="{{ $blog->media[0]->original_url }}" alt="{{ $blog->title }}" height="80px" width="100px">
                            @endif
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <h6>{{ $blog->title }}</h6>
                            <span>{{ Str::limit($blog->description, 20) }} <a style="text-decoration: black" href="{{ route('blog.detail', $blog->slug) }}">Read me...</a> <hr></span>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@stop