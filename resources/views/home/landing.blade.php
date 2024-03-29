@extends('layouts.guest')

@section('title')
    Home
@stop

@section('content')
    @include('home.slider', $banners)
    <!--START ABOUT US-->
    <section class="section card mx-4 bg-blog border border-2 my-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about-title text-center mb-5">
                        <h6 class="text-primary text-uppercase mb-0">{{ translateText('About Us') }}</h6>
                        <h3 class="title-heading f-14">{{ translateText('We\'r a dynamic team of creatives people innovation') }}</h3>
                        <div class="title-border"></div>
                        <p class="text-muted pt-3 mx-md-5">{{ translateText("Yorubaland, indeed, the nation with one language, one culture and one people, is the hidden wealth of Africa.") }}</p>
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
                                    aria-selected="true">{{ translateText('History') }}</button>
                                <!--end nav-link-->
                            </li>
                            <!--end nav-item-->
                            <li class="nav-item mx-3" role="presentation">
                                <button class="nav-link rounded-3" id="vision-tab" data-bs-toggle="pill"
                                    data-bs-target="#vision" type="button" role="tab" aria-controls="vision"
                                    aria-selected="false">{{ translateText('Vision') }}</button>
                                <!--end nav-link-->
                            </li>
                            <!--end nav-item-->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-3" id="mission-tab" data-bs-toggle="pill"
                                    data-bs-target="#mission" type="button" role="tab" aria-controls="mission"
                                    aria-selected="false">{{ translateText('Mission') }}</button>
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
                                        <img src="images/history.jpeg" style="height: 450px;width: 450px;" alt="history" class="img-fluid rounded-circle" />
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-7">
                                    <div class="card border-0 p-3 ms-lg-4">
                                        <h4 class="about-title">{{ translateText('History') }}</h4>
                                        <p class="mt-4 pt-3 text-muted mb-2">
                                            <em>
                                                {{ translateText("The history of the Yoruba people begins in Ile-Ife(Ife Empire).") }}
                                            </em>
                                        </p>
                                        <p class="text-muted">
                                            {{ translateText(Str::limit('Oduduwa was the first divine king of the Yoruba people. It is said the Yoruba people believe that their civilization began at Ile-Ife where the gods descended to earth. The Ethnic group became popular internationally due to their trading with the Portuguese. The Yoruba have traditionally been among the most skilled and productive craftsmen of Africa. They worked at such trades as blacksmithing, weaving, leatherworking, glassmaking, and ivory and wood carving.', 259)) }}
                                        </p>
                                        <div class="d-flex">
                                            @if(!is_null(getSetting('fb_url')))
                                                <div class="about-social" style="padding-right: 0.3em">
                                                    <a href="{{ getSetting('fb_url') }}" target="_blank" class="text-primary">
                                                        <i class="mdi mdi-facebook f-24"></i>
                                                    </a>
                                                </div>
                                            @endif
                                            @if(!is_null(getSetting('twt_url')))
                                                <div class="about-social mx-1">
                                                    <a href="{{ getSetting('twt_url') }}" target="_blank" class="text-primary f-24">
                                                        <i class="mdi mdi-twitter"></i> 
                                                    </a>
                                                </div>
                                            @endif
                                            @if(!is_null(getSetting('insta_url')))
                                                <div class="about-social mx-1">
                                                    <a href="{{ getSetting('insta_url') }}" target="_blank" class="text-primary f-24">
                                                        <i class="mdi mdi-instagram"></i> 
                                                    </a>
                                                </div>
                                            @endif
                                            @if(!is_null(getSetting('linkedin_url')))
                                                <div class="about-social mx-1">
                                                    <a href="{{ getSetting('linkedin_url') }}" target="_blank" class="text-primary f-24">
                                                        <i class="mdi mdi-linkedin"></i> 
                                                    </a>
                                                </div>
                                            @endif
                                            @if(!is_null(getSetting('yt_url')))
                                                <div class="about-social mx-1">
                                                    <a href="{{ getSetting('yt_url') }}" target="_blank" class="text-primary f-24">
                                                        <i class="mdi mdi-youtube"></i> 
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mt-3">
                                            <a href="{{ route('about.index') }}" class="text-primary">{{ translateText("Learn More") }} <span
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
                                        <p class="mt-4 pt-3 text-muted mb-2">
                                            <em>
                                                Discover and invest in developmental research aimed at helping Yorubas in Yorubaland
                                            </em>
                                        </p>
                                        <p class="text-muted">
                                            Discover and invest in developmental research Invest in healthcare, education, children’s education, youth development, and rural development aimed at helping Yorubas in Yorubaland
                                        </p>
                                        <a href="{{ route('about.index') }}" class="text-primary">Learn More <span
                                                class="f-20">&#8594;</span></a>
                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end col-->
                                <div class="col-md-5">
                                    <div class="vision-img text-lg-end text-center mb-4 mb-lg-0">
                                        <img src="images/vision.jpg" style="height: 450px;width: 450px;" alt="vision" class="img-fluid rounded-circle" />
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
                                        <img src="images/mission.jpg" style="height: 450px;width: 450px;" alt="mission" class="img-fluid rounded-circle" />
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-7">
                                    <div class="card border-0 p-3 ms-lg-4">
                                        <h4 class="mb-4 pb-2 about-title">Our Mission</h4>
                                        <div class="mission-box ms-lg-4">
                                            <div class="d-flex align-items-center">
                                                <div class="mission-icon">
                                                    <i class="mdi mdi-rocket" aria-hidden="true"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <h5 class="mb-0">Mission</h5>
                                                    <p class="text-muted mb-0">
                                                        Our mission is to organize information and make it  accessible and Committed to significantly improving the lives of  many people as possible.
                                                    </p>
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

    {{-- <!--START JOBS-->
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
                @foreach ($jobs as $item)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('job.detail', $item->slug) }}">
                            <div class="card feature-box border-0 overflow-hidden mt-3 mt-lg-0">
                                <div class="bg-feature-icon position-absolute">
                                    <img src="{{ asset('images/consultation.svg') }}" alt="branding" height="130" />
                                </div>
                                <h6 class="mt-4">{{ $item->domain->name }}</h6>
                                <p class="mt-3 text-muted">{{ $item->title }}</p>
                            </div>
                        </a>
                        <!--end feature-box-->
                    </div>
                @endforeach
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!--END JOBS--> --}}

    <!--START GALLERY-->
    <section class="section pb-0 bg-blog bg-light" id="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-2">
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
        <div class="container-fluid px-4 mt-5">
            <div class="row g-0" id="grid">
                @foreach ($galleries as $item)
                    @foreach ($item->media as $photo)
                        <div class="col-md-3 picture-item" data-groups='["{{ Str::lower(Str::slug($item->category->name)) }}"]'>
                            <div class="card portfolio overflow-hidden">
                                <div>
                                    <img src="{{ $photo->original_url }}" height="200" alt="{{ $item->name }}" class="img-fluid" />
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

    <!--START PROCESS-->
    <section class="section" id="howitwork">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-lg-7">
                    <div class="text-center mb-2">
                        <h6 class="text-uppercase text-primary mb-0">Process</h6>
                        <h3 class="text-capitalize title-heading">Our work process</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="process-box text-center">
                        <img src="images/idea.svg" alt="idea" height="60" />
                        <div class="process-no mt-4">
                            <p class="mb-0">1</p>
                        </div>
                        <div class="card-body mt-3">
                            <h5>Job Opening</h5>
                            <p class="mt-3 text-muted">On-site</p>
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
                            <h5>Interview</h5>
                            <p class="mt-3 text-muted">Hiring</p>
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
                            <h5>On-boarding</h5>
                            {{-- <p class="mt-3 text-muted">Hiring</p> --}}
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
     {{-- <section class="pb-5">
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
    </section> --}}
    <!--END CLIENT-LOGO -->

    <!--START BLOG-->
    <section class="section bg-blog bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-2">
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
                    <div class="col-lg-4">
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
                                <a href="{{ route('blog.detail', $item->slug) }}">
                                    <h5>{{ $item->title }}</h5>
                                </a>
                                <p class="text-muted">{{ Str::limit($item->description, 120)}}</p>
                                <a href="{{ route('blog.detail', $item->slug) }}">Read More <span class="ps-1">&#8594;</span></a>
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

    <!--START CONTACT-->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-2">
                        <h6 class="text-primary text-uppercase mb-0">Contact</h6>
                        <h3 class="text-capitalize">Let's talk about everything!</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact">
                        <div class="text-center text-lg-start">
                            <h5 class="title-heading">Contact Information:</h5>
                            <p class="text-muted mt-4">We will like to hear from you. Please contact us using the provided channels</p>
                            <div class="contact-details mt-4 text-start">
                                <div class="row row-cols-lg-1 row-cols-md-2 row-cols-1">
                                    <div class="col">
                                        <p class="text-muted">
                                            <span class="text-dark f-19"><i class="mdi mdi-email"></i></span>
                                            info@iretiodoyoruba.org
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end contact-->
                    <div class="d-flex ">
                        @if(!is_null(getSetting('fb_url')))
                            <div class="about-social" style="padding-right: 0.3em">
                                <a href="{{ getSetting('fb_url') }}" target="_blank" class="text-primary">
                                    <i class="mdi mdi-facebook f-24"></i>
                                </a>
                            </div>
                        @endif
                        @if(!is_null(getSetting('twt_url')))
                            <div class="about-social mx-1">
                                <a href="{{ getSetting('twt_url') }}" target="_blank" class="text-primary f-24">
                                    <i class="mdi mdi-twitter"></i> 
                                </a>
                            </div>
                        @endif
                        @if(!is_null(getSetting('insta_url')))
                            <div class="about-social mx-1">
                                <a href="{{ getSetting('insta_url') }}" target="_blank" class="text-primary f-24">
                                    <i class="mdi mdi-instagram"></i> 
                                </a>
                            </div>
                        @endif
                        @if(!is_null(getSetting('linkedin_url')))
                            <div class="about-social mx-1">
                                <a href="{{ getSetting('linkedin_url') }}" target="_blank" class="text-primary f-24">
                                    <i class="mdi mdi-linkedin"></i> 
                                </a>
                            </div>
                        @endif
                        @if(!is_null(getSetting('yt_url')))
                            <div class="about-social mx-1">
                                <a href="{{ getSetting('yt_url') }}" target="_blank" class="text-primary f-24">
                                    <i class="mdi mdi-youtube"></i> 
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <!--edn col-->
                <div class="col-lg-7">
                    <span id="error-msg"></span>
                    <form method="post" name="myForm" action="{{ route('post.message') }}" class="form mt-4 mt-lg-0">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12 col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12 col-md-6">
                                <div class="mb-3">
                                    <input type="tel" class="form-control" id="number" name="number" placeholder="Number" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="mb-4 pb-3">
                                    <textarea class="form-control" name="note" placeholder="Leave a message here" id="comments"
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