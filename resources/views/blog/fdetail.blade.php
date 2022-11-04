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
                <div class="col-lg-6" style="font-size: 12px;">
                    <span>Category: &nbsp;</span>{{ $detail->category->name }}
                </div>
                <div class="col-lg-6" style="align-items: flex-end; text-align:right;font-size:12px;">
                    <span>Post Date: &nbsp;</span>{{ \Carbon\Carbon::parse($detail->created_at)->format('F j, Y') }}
                </div>
            </div>
            <p style="border: 2px; border-radius: 20px;">{{ $detail->description }}</p>
        </div>
        <div class="col-lg-4">
            <div>
                <div class="card-header">Recent Blogs</div>
                <div class="card body">
                    @foreach ($blogs as $blog)
                        <div class="row border-bottom">
                            <div class="col-lg-12">
                                <img src="{{ $blog->media[0]->original_url }}" alt="{{ $blog->title }}" height="100px">
                                <h6>{{ $blog->title }}</h6>
                                <p>{{ Str::limit($blog->description, 25) }} <a style="text-decoration: black" href="{{ route('blog.detail', $blog->slug) }}">Read me...</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop