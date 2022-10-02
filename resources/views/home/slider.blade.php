<!--START Hero-->
<section class="home-slider" id="home">
    <div id="hero-slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @if(count($banners) !== 0)
                @foreach ($banners as $key => $item)
                    <div class="carousel-item @if($key === 0) {{ 'active' }} @endif" style="background-image:url('{{ $item->media[0]->original_url }}');">
                        <div class="home-center">
                            <div class="home-content-center">
                                <div class="bg-overlay"></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="hero-content text-center text-white">
                                                <p class="hero-sub f-24 mb-0">{{ Str::upper($item->title) }}</p>
                                                <h1 class="hero-heading display-4 text-capitalize mt-3 font-weight-500">{{ $item->sub_title }}</h1>
                                                <p class="text-white-50 mt-4">{{ $item->description }}</p>
                                                <div class="mt-4 pt-2">
                                                    <a href="{{ route('about.index') }}" class="btn btn-primary rounded-pill mt-2">Discover More</a>
                                                    <a href="#howitwork" class="btn btn-outline-white rounded-pill mt-2 ms-2">How It work</a>
                                                </div>
        
                                            </div>
                                            <!--end homt-content-->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="carousel-item active" style="background-image:url('{{ asset('images/bg1.jpeg') }}');">
                    <div class="home-center">
                        <div class="home-content-center">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="hero-content text-center text-white">
                                            <p class="hero-sub f-24 mb-0 text-capitalize">{{ Str::lower('business app') }}</p>
                                            <h1 class="hero-heading display-4 text-capitalize mt-3 font-weight-500">best
                                                business planing</h1>
                                            <p class="text-white-50 mt-4">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. enim ad minim
                                                veniam,
                                                quis nostrud exercitation ullamco laboris nisi aliquip commodo
                                                consequat.
                                            </p>
                                            <div class="mt-4 pt-2">
                                                <a href="{{ route('about.index') }}" class="btn btn-primary rounded-pill mt-2">Discover More</a>
                                                <a href="#howitwork" class="btn btn-outline-white rounded-pill mt-2 ms-2">How It
                                                    work</a>
                                            </div>

                                        </div>
                                        <!--end homt-content-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end carousel-item-->
                <div class="carousel-item" style="background-image:url('{{ asset('images/bg2.jpeg') }}');">
                    <div class="home-center">
                        <div class="home-content-center">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="hero-content text-center text-white">
                                            <p class="hero-sub f-24 mb-0">Marketing</p>
                                            <h1 class="hero-heading display-4 text-capitalize mt-3 font-weight-500">
                                                digital Marketing Agency</h1>
                                            <p class="text-white-50 mt-4">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. enim ad minim
                                                veniam,
                                                quis nostrud exercitation ullamco laboris nisi aliquip commodo
                                                consequat.
                                            </p>
                                            <div class="mt-4 pt-2">
                                                <a href="{{ route('about.index') }}" class="btn btn-primary rounded-pill mt-2">Discover More</a>
                                                <a href="#howitwork" class="btn btn-outline-white rounded-pill mt-2 ms-2">How It
                                                    work</a>
                                            </div>

                                        </div>
                                        <!--end homt-content-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end carousal-item-->
                <div class="carousel-item"
                    style="background-image:url('{{ asset('images/bg3.jpeg') }}');background-position: center;">
                    <div class="home-center">
                        <div class="home-content-center">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="hero-content text-center text-white">
                                            <p class="hero-sub f-24 mb-0">Consulting</p>
                                            <h1 class="hero-heading display-4 text-capitalize mt-3 font-weight-500">
                                                Productized Consulting</h1>
                                            <p class="text-white-50 mt-4">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt labore et dolore magna aliqua. enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi aliquip commodo
                                                consequat.
                                            </p>
                                            <div class="mt-4 pt-2">
                                                <a href="{{ route('about.index') }}" class="btn btn-primary rounded-pill mt-2">Discover More</a>
                                                <a href="#howitwork" class="btn btn-outline-white rounded-pill mt-2 ms-2">How It
                                                    work</a>
                                            </div>

                                        </div>
                                        <!--end homt-content-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>

                    </div>
                </div>
            @endif
            <!--end carousel-item-->
        </div>
        <!--end carousel-inner-->
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-slider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--end carousel-->
</section>
<!--END HOME-->