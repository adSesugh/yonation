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
                <div class="col-lg-4 mb-2">
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
                            <a href="{{ route('blogs.detail') }}">Read More <span class="ps-1">&#8594;</span></a>
                        </div>
                        <!--end blog-content-->
                    </div>
                    <!--end blog-->
                </div>
                <!--end col-->
                <div class="col-lg-4 mb-2">
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
                <div class="col-lg-4 mb-2">
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
                <div class="col-lg-4 mb-2">
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
                <div class="col-lg-4 mb-2">
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
                <div class="col-lg-4 mb-2">
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
@stop