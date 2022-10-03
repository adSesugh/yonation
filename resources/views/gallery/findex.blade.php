@extends('layouts.guest')

@section('title') Gallery @stop

@section('content')
    @include('layouts.partials.breadcrumb')
    <!--START GALLERY-->
    <section class="section pb-0" id="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h6 class="text-primary mb-0">Our Gallery</h6>
                        <h3 class="title-heading">Awesome Work</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-7">
                    <div class="filters-group-wrap">
                        <div class="filters-group">
                            <ul class="nav filter-options list-unstyled list-inline justify-content-center">
                                <li data-group="all" class="active nav-link list-inline-item" style="cursor: pointer;">Show All</li>
                                @foreach ($categories as $item)
                                    <li data-group="{{ Str::lower(Str::slug($item->name)) }}" class="nav-link list-inline-item" style="cursor: pointer;">{{ $item->name }}</li>
                                @endforeach
                            </ul>
                            <!--end portfolio-list-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <div class="container-fluid px-0 mt-5 mx-4 mb-4">
            <div class="row g-0" id="grid">
                @foreach ($galleries as $item)
                    @foreach ($item->media as $photo)
                        <div class="col-md-3 picture-item" data-groups='["{{ Str::lower(Str::slug($item->category->name)) }}"]'>
                            <div class="card portfolio overflow-hidden">
                                <div>
                                    <img src="{{ $photo->original_url }}" height="150" width="100%" alt="{{ $item->name }}" class="img-fluid" />
                                    <div class="portfolio-overlay"></div>
                                    <div class="portfolio-icon position-absolute top-50 start-50 translate-middle">
                                        <a href="{{ $photo->original_url }}" class="lightbox">
                                            <i class="mdi mdi-plus text-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-content p-3">
                                    <a href="#">
                                        <h5 class="text-white mb-0">{{ $item->name }}</h5>
                                    </a>
                                    <p class="text-white mb-0">{{ $item->category->name }}</p>
                                </div>
                            </div>
                            <!--end portfolio-->
                        </div>
                        <!--end col-->
                    @endforeach
                @endforeach
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>
    <!--end section-->
    <!--END GALLERY-->
@stop