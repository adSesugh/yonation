@extends('layouts.guest')

@section('title') Blogs @stop

@section('content')
    @include('layouts.partials.breadcrumb')
     <!--START BLOG-->
     <section class="section bg-blog bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h6 class="text-primary mb-0">Our Blog</h6>
                        <h3 class="title-heading text-capitalize">Read Our Latest News</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-lg-4 mb-2">
                        <div class="card blog border-0 rounded-3 mt-4 mt-lg-0">
                            @if(count($item->media) > 0)
                                <img src="{{ $item->media[0]->original_url }}" alt="01" style="height: 250px;" class="img-fluid rounded-top" />
                            @else
                                <img src="images/01.jpg" alt="01" style="height: 250px;" class="img-fluid rounded-top" />
                            @endif
                            <div class="position-absolute p-3">
                                <span class="badge bg-primary f-12 fw-normal">{{ $item->category->name }}</span>
                            </div>
                            <div class="blog-content card-body mt-2">
                                <small class="f-12 float-end">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small>
                                <ul class="list-inline text-muted f-12">
                                    <li class="list-inline-item">{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</li>
                                    {{-- <li class="list-inline-item"><i class="fas fa-eye" aria-hidden="true"></i> 500</li>
                                    <li class="list-inline-item"><i class="fas fa-comments-o" aria-hidden="true"> 116</i> --}}
                                    </li>
                                </ul>
                                <a href="{{ route('blogs.show', $item->slug) }}">
                                    <h5>{{ $item->title }}</h5>
                                </a>
                                <p class="text-muted">{{ Str::limit($item->description, 120)}}</p>
                                <a href="{{ route('blogs.show', $item->slug) }}">Read More <span class="ps-1">&#8594;</span></a>
                            </div>
                            <!--end blog-content-->
                        </div>
                        <!--end blog-->
                    </div>
                    <!--end col-->
                @endforeach
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!--END BLOG-->
@stop