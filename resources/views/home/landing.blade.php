@extends('layouts.guest')

@section('title')
    Home
@stop

@section('content')
    @include('home.slider', $banners)
    <!--START ABOUT US-->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about-title text-center mb-5">
                        <h6 class="text-primary text-uppercase mb-0">About Us</h6>
                        <h3 class="title-heading">We'r a dynamic team of creatives people innovation</h3>
                        <div class="title-border"></div>
                        <p class="text-muted pt-3 mx-md-5">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                    <!--end about-title-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center mb-4 pb-2">
                        <ul class="nav nav-pills about-tab" id="aboutus" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-3 active" id="history-tab" data-bs-toggle="pill"
                                    data-bs-target="#history" type="button" role="tab" aria-controls="history"
                                    aria-selected="true">History</button>
                                <!--end nav-link-->
                            </li>
                            <!--end nav-item-->
                            <li class="nav-item mx-3" role="presentation">
                                <button class="nav-link rounded-3" id="vision-tab" data-bs-toggle="pill"
                                    data-bs-target="#vision" type="button" role="tab" aria-controls="vision"
                                    aria-selected="false">Vision</button>
                                <!--end nav-link-->
                            </li>
                            <!--end nav-item-->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-3" id="mission-tab" data-bs-toggle="pill"
                                    data-bs-target="#mission" type="button" role="tab" aria-controls="mission"
                                    aria-selected="false">Mission</button>
                                <!--end nav-link-->
                            </li>
                            <!--end nav-item-->
                        </ul>
                        <!--nav-->
                    </div>

                    <div class="tab-content about-content" id="tabContent">
                        <div class="tab-pane fade show active" id="history" role="tabpanel"
                            aria-labelledby="history-tab">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="history-img text-lg-end text-center mb-4 mb-lg-0">
                                        <img src="images/history.jpg" alt="history" class="img-fluid rounded-circle" />
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-7">
                                    <div class="card border-0 p-3 ms-lg-4">
                                        <h4 class="about-title">History</h4>
                                        <p class="mt-4 pt-3 text-muted mb-2"><em>Lorem Ipsum has been the industry's
                                                standard dummy text ever make a type since the 1500s.</em></p>
                                        <p class="text-muted">
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. Lorem Ipsum has been the industry's standard dummy text
                                            ever since unknown printer took a galley of
                                            type and it to make a type specimen book.
                                        </p>
                                        <div class="d-flex">
                                            <div class="about-social">
                                                <a href="#" class="text-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </div>
                                            <div class="about-social mx-2">
                                                <a href="#" class="text-primary"><i class="mdi mdi-google"></i> </a>
                                            </div>
                                            <div class="about-social">
                                                <a href="#" class="text-primary"><i class="mdi mdi-instagram"></i> </a>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#" class="text-primary">Learn More <span
                                                    class="f-20">&#8594;</span></a>
                                        </div>
                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <div class="card border-0 p-3 me-lg-4">
                                        <h4 class="about-title">Vision</h4>
                                        <p class="mt-4 pt-3 text-muted mb-2"><em>Lorem Ipsum has been the industry's
                                                standard dummy text ever make a type since the 1500s.</em></p>
                                        <p class="text-muted">
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. Lorem Ipsum has been the industry's standard dummy text
                                            ever since unknown printer took a galley of
                                            type and it to make a type specimen book.
                                        </p>
                                        <a href="#" class="text-primary">Learn More <span
                                                class="f-20">&#8594;</span></a>
                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end col-->
                                <div class="col-md-5">
                                    <div class="vision-img text-lg-end text-center mb-4 mb-lg-0">
                                        <img src="images/vision.png" alt="vision" class="img-fluid rounded-circle" />
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end vision-tab-->
                        <div class="tab-pane fade mission-tab" id="mission" role="tabpanel"
                            aria-labelledby="mission-tab">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="mission-img text-lg-end text-center mb-4 mb-lg-0">
                                        <img src="images/mission.jpg" alt="mission" class="img-fluid rounded-circle" />
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-7">
                                    <div class="card border-0 p-3 ms-lg-4">
                                        <h4 class="mb-4 pb-2 about-title">Our Mission</h4>
                                        <div class="mission-box mt-3">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-eye mission-icon" aria-hidden="true"></i>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">Vision</h5>
                                                    <p class="text-muted mb-0">Lorem Ipsum is text printing and
                                                        typesetting.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end mission-box-->
                                        <div class="mission-box ms-lg-4">
                                            <div class="d-flex align-items-center">
                                                <div class="mission-icon">
                                                    <i class="mdi mdi-rocket" aria-hidden="true"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">Mission</h5>
                                                    <p class="text-muted mb-0">Lorem Ipsum is text printing and
                                                        typesetting.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end mission-box-->
                                        <div class="mission-box">
                                            <div class="d-flex align-items-center">
                                                <div class="mission-icon">
                                                    <i class="mdi mdi-bullseye" aria-hidden="true"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">Goal</h5>
                                                    <p class="text-muted mb-0">Lorem Ipsum is text printing and
                                                        typesetting.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end mission-box-->
                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end mission-tab-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!--END ABOUT US-->

    <!--START JOBS-->
    <section class="section bg-light" id="job">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5 pb-3">
                        <h6 class="text-uppercase text-primary mb-0">Amazing Features</h6>
                        <h3 class="mt-2 title-heading">The Power of Connecting across Job offers</h3>
                        <div class="title-border"></div>
                        <p class="text-muted mt-3 mx-md-5">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-box border-0 overflow-hidden mt-3 mt-lg-0">
                        <div class="feature-icon">
                            <img src="{{ asset('images/branding.svg') }}" alt="branding" height="60" />
                        </div>
                        <div class="bg-feature-icon position-absolute">
                            <img src="{{ asset('images/branding.svg') }}" alt="branding" height="130" />
                        </div>
                        <h5 class="mt-4">Branding</h5>
                        <p class="mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum since.</p>
                    </div>
                    <!--end feature-box-->
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-box border-0 overflow-hidden mt-3 mt-lg-0">
                        <div class="feature-icon">
                            <img src="{{ asset('images/growth.svg') }}" alt="growth" height="60" />
                        </div>
                        <div class="bg-feature-icon position-absolute">
                            <img src="{{ asset('images/growth.svg') }}" alt="growth" height="130" />
                        </div>
                        <h5 class="mt-4">Marketing Growthing</h5>
                        <p class="mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry Lorem Ipsum since.</p>
                    </div>
                    <!--end feature-box-->
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-box border-0 overflow-hidden mt-3 mt-lg-0">
                        <div class="feature-icon">
                            <img src="{{ asset('images/strategy.svg') }}" alt="strategy" height="60" />
                        </div>
                        <div class="bg-feature-icon position-absolute">
                            <img src="{{ asset('images/strategy.svg') }}" alt="strategy" height="130" />
                        </div>
                        <h5 class="mt-3">Strategy</h5>
                        <p class="mt-4 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry Lorem Ipsum since.</p>
                    </div>
                    <!--end feature-box-->
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-box border-0 overflow-hidden mt-3 mt-lg-0">
                        <div class="feature-icon">
                            <img src="{{ asset('images/consultation.svg') }}" alt="consultation" height="60" />
                        </div>
                        <div class="bg-feature-icon position-absolute">
                            <img src="{{ asset('images/consultation.svg') }}" alt="consultation" height="130" />
                        </div>
                        <h5 class="mt-4">Business Consulting</h5>
                        <p class="mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry Lorem Ipsum since.</p>
                    </div>
                    <!--end feature-box-->
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-box border-0 overflow-hidden mt-3 mt-lg-0">
                        <div class="feature-icon">
                            <img src="{{ asset('images/technology.svg') }}" alt="technology" height="60" />
                        </div>
                        <div class="bg-feature-icon position-absolute">
                            <img src="{{ asset('images/technology.svg') }}" alt="technology" height="130" />
                        </div>
                        <h5 class="mt-4">Technology</h5>
                        <p class="mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry Lorem Ipsum since.</p>
                    </div>
                    <!--end feature-box-->
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-box border-0 overflow-hidden mt-3 mt-lg-0">
                        <div class="feature-icon">
                            <img src="{{ asset('images/idea.svg') }}" alt="idea" height="60" />
                        </div>
                        <div class="bg-feature-icon position-absolute">
                            <img src="{{ asset('images/idea.svg') }}" alt="idea" height="130" />
                        </div>
                        <h5 class="mt-4">Bussiness idea</h5>
                        <p class="mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry Lorem Ipsum since.</p>
                    </div>
                    <!--end feature-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!--END JOBS-->

    <!--START GALLERY-->
    <section class="section pb-0" id="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h6 class="text-primary mb-0">Our Gallery</h6>
                        <h3 class="title-heading">Awesome Work</h3>
                        <div class="title-border"></div>
                        <p class="text-muted mt-3 mx-md-5">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard.</p>
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
        <div class="container-fluid px-0 mt-5">
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

    <!--START PROCESS-->
    <section class="section" id="howitwork">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h6 class="text-uppercase text-primary mb-0">Process</h6>
                        <h3 class="text-capitalize title-heading">our business work Process</h3>
                        <div class="title-border"></div>
                        <p class="text-muted mt-3 mx-md-5">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-md-4">
                    <div class="process-box text-center">
                        <img src="images/idea.svg" alt="idea" height="60" />
                        <div class="process-no mt-4">
                            <p class="mb-0">1</p>
                        </div>
                        <div class="card-body mt-3">
                            <h5>Idea</h5>
                            <p class="mt-3 text-muted">Lorem Ipsum is simply dummy text of the industry Lorem Ipsum.</p>
                        </div>
                    </div>
                    <!--end process-box-->
                </div>
                <!--end col-->
                <div class="col-md-4">
                    <div class="process-box text-center">
                        <img src="images/email-marketing.svg" alt="marketing" height="60" />
                        <div class="process-no mt-4">
                            <p class="mb-0">2</p>
                        </div>
                        <div class="card-body mt-3">
                            <h5>Marketing</h5>
                            <p class="mt-3 text-muted">Lorem Ipsum is simply dummy text of the industry Lorem Ipsum.</p>
                        </div>
                    </div>
                    <!--end process-box-->
                </div>
                <!--end col-->
                <div class="col-md-4">
                    <div class="process-box text-center">
                        <img src="images/investment.svg" alt="growth" height="60" />
                        <div class="process-no mt-4">
                            <p class="mb-0">3</p>
                        </div>
                        <div class="card-body mt-3">
                            <h5>Growth</h5>
                            <p class="mt-3 text-muted">Lorem Ipsum is simply dummy text of the industry Lorem Ipsum.</p>
                        </div>
                    </div>
                    <!--end process-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!--END PROCESS-->

     <!--START CLIENT-LOGO -->
     <section class="pb-5">
        <div class="container">
            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-1 justify-content-center">
                <div class="col">
                    <div class="client-logo text-center py-3">
                        <img src="images/01.png" alt="1" class="img-fluid" />
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="client-logo text-center py-3">
                        <img src="images/02.png" alt="2" class="img-fluid" />
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="client-logo text-center py-3">
                        <img src="images/03.png" alt="3" class="img-fluid" />
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="client-logo text-center py-3">
                        <img src="images/04.png" alt="4" class="img-fluid" />
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="client-logo text-center py-3">
                        <img src="images/05.png" alt="5" class="img-fluid" />
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--END CLIENT-LOGO -->

    <!--START BLOG-->
    <section class="section bg-blog bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h6 class="text-primary mb-0">Our Blog</h6>
                        <h3 class="title-heading text-capitalize">Read Our Latest News</h3>
                        <div class="title-border"></div>
                        <p class="text-muted mt-3 mx-md-5">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card blog border-0 rounded-3 mt-4 mt-lg-0">
                        <img src="images/01.jpg" alt="01" class="img-fluid rounded-top" />
                        <div class="position-absolute p-3">
                            <span class="badge bg-primary f-12 fw-normal">Business</span>
                        </div>
                        <div class="blog-content card-body mt-2">
                            <small class="f-12 float-end">04 min</small>
                            <ul class="list-inline text-muted f-12">
                                <li class="list-inline-item">March 25, 2022</li>
                                <li class="list-inline-item"><i class="fa fa-eye" aria-hidden="true"></i> 500</li>
                                <li class="list-inline-item"><i class="fa fa-comments-o" aria-hidden="true"> 116</i>
                                </li>
                            </ul>
                            <a href="#">
                                <h5>The growing technology Initiate Excellent Profit</h5>
                            </a>
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting...
                            </p>
                            <a href="#">Read More <span class="ps-1">&#8594;</span></a>
                        </div>
                        <!--end blog-content-->
                    </div>
                    <!--end blog-->
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="card blog border-0 rounded-3 mt-4 mt-lg-0">
                        <img src="images/02.jpg" alt="02" class="img-fluid rounded-top" />
                        <div class="position-absolute p-3">
                            <span class="badge bg-primary f-12 fw-normal">Business</span>
                            <span class="badge bg-success f-12 fw-normal">Marketing</span>
                        </div>
                        <div class="blog-content card-body mt-2">
                            <small class="f-12 float-end">10 min</small>
                            <ul class="list-inline text-muted f-12">
                                <li class="list-inline-item">March 25, 2022</li>
                                <li class="list-inline-item"><i class="fa fa-eye" aria-hidden="true"></i> 500</li>
                                <li class="list-inline-item"><i class="fa fa-comments-o" aria-hidden="true"> 116</i>
                                </li>
                            </ul>
                            <a href="#">
                                <h5>The growing technology Initiate Excellent Profit</h5>
                            </a>
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting...
                            </p>
                            <a href="#">Read More <span class="ps-1">&#8594;</span></a>
                        </div>
                        <!--end blog-content-->
                    </div>
                    <!--end blog-->
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="card blog border-0 rounded-3 mt-4 mt-lg-0">
                        <img src="images/03.jpg" alt="03" class="img-fluid rounded-top" />
                        <div class="position-absolute p-3">
                            <span class="badge bg-primary f-12 fw-normal">Consulting</span>
                        </div>
                        <div class="blog-content card-body mt-2">
                            <small class="f-12 float-end">10 min</small>
                            <ul class="list-inline text-muted f-12">
                                <li class="list-inline-item">March 25, 2022</li>
                                <li class="list-inline-item"><i class="fa fa-eye" aria-hidden="true"></i> 500</li>
                                <li class="list-inline-item"><i class="fa fa-comments-o" aria-hidden="true"> 116</i>
                                </li>
                            </ul>
                            <a href="#">
                                <h5>The growing technology Initiate Excellent Profit</h5>
                            </a>
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting...
                            </p>
                            <a href="#">Read More <span class="ps-1">&#8594;</span></a>
                        </div>
                        <!--end blog-content-->
                    </div>
                    <!--end blog-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!--END BLOG-->

    <!--START CONTACT-->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h6 class="text-primary text-uppercase mb-0">Contact</h6>
                        <h3 class="text-capitalize">Let's talk about everything!</h3>
                        <div class="title-border"></div>
                        <p class="text-muted mt-3 mx-md-5">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact">
                        <div class="text-center text-lg-start">
                            <h5 class="title-heading">Contact Information:</h5>
                            <p class="text-muted mt-4">It is a long established fact that a reader will be distracted by
                                the readable content of a page when looking at its layout.</p>
                            <div class="contact-details mt-4 text-start">
                                <div class="row row-cols-lg-1 row-cols-md-2 row-cols-1">
                                    <div class="col">
                                        <p class="text-muted">
                                            <span class="text-dark f-19"><i class="mdi mdi-map-marker"></i></span> 756
                                            Forest St. Fullerton, CA 92831
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted">
                                            <span class="text-dark f-19"><i class="mdi mdi-phone"></i></span> +234 706 347 9563
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted">
                                            <span class="text-dark f-19"><i class="mdi mdi-email"></i></span>
                                            example@design.com
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted">
                                            <span class="text-dark f-19"><i class="mdi mdi-fax"></i></span> +234 802 747 9193
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end contact-->
                </div>
                <!--edn col-->
                <div class="col-lg-7">
                    <span id="error-msg"></span>
                    <form method="post" name="myForm" onsubmit="return validateForm()" class="form mt-4 mt-lg-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Email" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12 col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12 col-md-6">
                                <div class="mb-3">
                                    <input type="tel" class="form-control" id="number" placeholder="Number" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="mb-4 pb-3">
                                    <textarea class="form-control" placeholder="Leave a message here" id="comments"
                                        style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <button type="submit" id="submit" name="send" value="Send Message"
                            class="btn btn-primary float-end">Send Messages</button>
                    </form>
                    <!--end form-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!--END CONTACT-->
@endsection