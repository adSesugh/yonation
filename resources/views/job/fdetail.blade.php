@extends('layouts.guest')

@section('title') {{ $detail->title }} @stop

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
                <div class="card body">
                    @foreach ($blogs as $blog)
                        <div class="row border">
                            <div class="col-lg-2">
                                <img src="{{ $blog->media[0]->original_url }}" alt="{{ $blog->title }}" height="50px">
                            </div>
                            <div class="col-lg-10">
                                <h5>{{ $blog->title }}</h5>
                                <em>{{ $blog->category->name }}</em>
                                <p>{{ Str::limit($blog->description, 50) }} <a style="text-decoration: black" href="{{ route('blog.detail', $blog->slug) }}">Read me...</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop