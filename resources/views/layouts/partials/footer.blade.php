<!--START FOOTER-->
<section class="bg-footer text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="footer-info text-center text-md-start">
                    <a href="#">
                        <img src="{{ asset('images/ynlogo.png') }}" alt="logo" height="80">
                    </a>
                    <p class="text-white-50 mt-4">YORUBA PEOPLE FIRST Building a universal community of united Yoruba descendants for Yorubaland’s development.</p>
                    <ul class="footer-social list-inline list-unstyled mt-3 justify-content-start">
                        @if(!is_null(getSetting('fb_url')))
                            <li class="social-link ms-0 list-inline-item">
                                <a href="{{ getSetting('fb_url') }}" target="_blank">
                                    <i class="mdi mdi-facebook"></i>
                                </a>
                            </li>
                        @endif
                        <!--end social-link-->
                        {{-- <li class="social-link list-inline-item">
                            <a href="#">
                                <i class="mdi mdi-whatsapp"></i>
                            </a>
                        </li> --}}
                        <!--end social-link-->
                        @if(!is_null(getSetting('twt_url')))
                            <li class="social-link list-inline-item">
                                <a href="{{ getSetting('twt_url') }}" target="_blank">
                                    <i class="mdi mdi-twitter"></i>
                                </a>
                            </li>
                        @endif
                        @if(!is_null(getSetting('insta_url')))
                            <li class="social-link list-inline-item">
                                <a href="{{ getSetting('insta_url') }}" target="_blank">
                                    <i class="mdi mdi-instagram"></i>
                                </a>
                            </li>
                        @endif
                        @if(!is_null(getSetting('linkedin_url')))
                            <li class="social-link list-inline-item">
                                <a href="{{ getSetting('linkedin_url') }}" target="_blank">
                                    <i class="mdi mdi-linkedin"></i>
                                </a>
                            </li>
                        @endif
                        @if(!is_null(getSetting('yt_url')))
                            <div class="social-link list-inline-item">
                                <a href="{{ getSetting('yt_url') }}" target="_blank">
                                    <i class="mdi mdi-youtube"></i> 
                                </a>
                            </div>
                        @endif
                        <!--end social-link-->
                    </ul>
                    <!--end footer-social-->
                </div>
                <!--end footer-info-->
            </div>
            <!--end col-->
            <div class="col-lg-3 col-6">
                <div class="footer-nav mt-4 mt-lg-2">
                    <h6 class="text-uppercase">Quick Links</h6>
                    <ul class="list-unstyled mt-3 f-15">
                        <li class="footer-item">
                            <a href="{{ route('index') }}" class="footer-link">Home</a>
                        </li>
                        <li class="footer-item">
                            <a href="{{ route('about.index') }}" class="footer-link">About Us</a>
                        </li>
                        {{-- <li class="footer-item">
                            <a href="#" class="footer-link">Jobs</a>
                        </li> --}}
                        <li class="footer-item">
                            <a href="{{ route('gallery.index') }}" class="footer-link">Gallery</a>
                        </li>
                        <li class="footer-item">
                            <a href="{{ route('blog.index') }}" class="footer-link">Blogs</a>
                        </li>
                    </ul>
                </div>
                <!--end footer-nav-->
            </div>
            <!--end col-->
            <div class="col-lg-5 col-6">
                <div class="footer-nav mt-4 mt-lg-2">
                    <h6 class="text-uppercase">Latest Blogs</h6>
                    <ul class="list-unstyled mt-3">
                        @forelse (getBlogs() as $item)
                            <li class="footer-item">
                                <a href="{{ route('blog.detail', $item->slug) }}" class="footer-link">
                                    <div class="row no-gutters">
                                        <div class="col-lg-3">
                                            <img src="{{ $item->media[0]->original_url }}" style="height: 80px;width: 100%;" alt="{{ $item->title }}">
                                        </div>
                                        <div class="col-lg-8">
                                            <h6>{{ $item->title }}</h6>
                                            <span>{{ $item->category->name }}</span>
                                            <span>{{ Str::limit($item->description, 55) }}</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @empty
                            <li class="footer-item">
                                No News published
                            </li>
                        @endforelse
                    </ul>
                </div>
                <!--end footer-nav-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<div class="footer-alt py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <p class="text-white-50 mb-0" style="font-size: 12px">
                        <script>document.write(new Date().getFullYear())</script> &copy; Yoruba Nation
                        <i class="mdi mdi-heart text-danger"></i>
                        {{-- <a class="text-white-50" href="#"><small>KeennessSolutions</small></a> --}}
                    </p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
<!--end footer-alt-->
<!--END FOOTER-->