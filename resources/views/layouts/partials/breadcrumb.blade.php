<!--START Hero-->
<section class="breadcrumb-slider">
    <div class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url('{{ asset('images/bg1.jpeg') }}');">
                <div class="home-center">
                    <div class="home-content-center">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="hero-content text-center text-white">
                                        <nav class="text-white" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                            <ol class="breadcrumb text-white">
                                              <li class="breadcrumb-item fs-5"><a href="{{ route('index') }}">Home</a></li>
                                              <li class="breadcrumb-item text-white fs-5" aria-current="page">@yield('title')</li>
                                            </ol>
                                          </nav>
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
        </div>
        <!--end carousel-inner-->
    </div>
    <!--end carousel-->
</section>
<!--END HOME-->