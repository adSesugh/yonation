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
                                <li data-group="all" class="active nav-link list-inline-item" style="cursor: pointer;">
                                    Show All</li>
                                <li data-group="branding" class="nav-link list-inline-item" style="cursor: pointer;">
                                    Branding</li>
                                <li data-group="marketing" class="nav-link list-inline-item" style="cursor: pointer;">
                                    Marketing</li>
                                <li data-group="consulting" class="nav-link list-inline-item" style="cursor: pointer;">
                                    Consulting</li>
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
                <div class="col-md-3 picture-item" data-groups='["branding"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="images/01.jpg" alt="01" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute top-50 start-50 translate-middle">
                                <a href="images/01.jpg" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-3">
                            <a href="#">
                                <h5 class="text-white mb-0">Project Title</h5>
                            </a>
                            <p class="text-white mb-0">Branding</p>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["marketing"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('images/02.jpg') }}" alt="02" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute top-50 start-50 translate-middle">
                                <a href="{{ asset('images/02.jpg') }}" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-3">
                            <a href="#">
                                <h5 class="text-white mb-0">Project Title</h5>
                            </a>
                            <p class="text-white mb-0">Marketing</p>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["consulting"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('images/03.jpg') }}" alt="03" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute top-50 start-50 translate-middle">
                                <a href="{{ asset('images/03.jpg') }}" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-3">
                            <a href="#">
                                <h5 class="text-white mb-0">Project Title</h5>
                            </a>
                            <p class="text-white mb-0">Consulting</p>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end-col-->
                <div class="col-md-3 picture-item" data-groups='["marketing"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('images/04.jpg') }}" alt="04" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute top-50 start-50 translate-middle">
                                <a href="{{ asset('images/04.jpg') }}" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-3">
                            <a href="#">
                                <h5 class="text-white mb-0">Project Title</h5>
                            </a>
                            <p class="text-white mb-0">Marketing</p>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["branding"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('images/05.jpg') }}" alt="05" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute top-50 start-50 translate-middle">
                                <a href="{{ asset('images/05.jpg') }}" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-3">
                            <a href="#">
                                <h5 class="text-white mb-0">Project Title</h5>
                            </a>
                            <p class="text-white mb-0">Branding</p>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["consulting"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('images/06.jpg') }}" alt="06" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute top-50 start-50 translate-middle">
                                <a href="{{ asset('images/06.jpg') }}" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-3">
                            <a href="#">
                                <h5 class="text-white mb-0">Project Title</h5>
                            </a>
                            <p class="text-white mb-0">Consulting</p>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["marketing"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('images/07.jpg') }}" alt="07" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute top-50 start-50 translate-middle">
                                <a href="{{ asset('images/07.jpg') }}" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-3">
                            <a href="#">
                                <h5 class="text-white mb-0">Project Title</h5>
                            </a>
                            <p class="text-white mb-0">Marketing</p>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
                <div class="col-md-3 picture-item" data-groups='["branding"]'>
                    <div class="card portfolio overflow-hidden">
                        <div>
                            <img src="{{ asset('images/08.jpg') }}" alt="08" class="img-fluid" />
                            <div class="portfolio-overlay"></div>
                            <div class="portfolio-icon position-absolute top-50 start-50 translate-middle">
                                <a href="{{ asset('images/08.jpg') }}" class="lightbox">
                                    <i class="mdi mdi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-content p-3">
                            <a href="#">
                                <h5 class="text-white mb-0">Project Title</h5>
                            </a>
                            <p class="text-white mb-0">Branding</p>
                        </div>
                    </div>
                    <!--end portfolio-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>
    <!--end section-->
    <!--END GALLERY-->
@stop