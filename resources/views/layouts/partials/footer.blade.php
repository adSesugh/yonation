<!--START FOOTER-->
<section class="bg-footer text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="footer-info text-center text-md-start">
                    <a href="#">
                        <img src="{{ asset('images/ynlogo.png') }}" alt="logo" height="100">
                    </a>
                    <p class="text-white-50 mt-4">YORUBA PEOPLE FIRST Building a universal community of united Yoruba descendants for Yorubaland’s development.</p>
                    <ul class="footer-social list-inline list-unstyled mt-3 justify-content-start">
                        @if(!is_null(getSetting('fb_url')))
                            <li class="social-link ms-0 list-inline-item">
                                <a href="{{ getSetting('fb_url') }}">
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
                                <a href="{{ getSetting('twt_url') }}">
                                    <i class="mdi mdi-twitter"></i>
                                </a>
                            </li>
                        @endif
                        @if(!is_null(getSetting('insta_url')))
                            <li class="social-link list-inline-item">
                                <a href="{{ getSetting('insta_url') }}">
                                    <i class="mdi mdi-instagram"></i>
                                </a>
                            </li>
                        @endif
                        @if(!is_null(getSetting('linkedin_url')))
                            <li class="social-link list-inline-item">
                                <a href="{{ getSetting('linkedin_url') }}">
                                    <i class="mdi mdi-linkedin"></i>
                                </a>
                            </li>
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
                            <a href="#" class="footer-link">Home</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-link">About Us</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-link">Jobs</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-link">Gallery</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-link">Blogs</a>
                        </li>
                    </ul>
                </div>
                <!--end footer-nav-->
            </div>
            <!--end col-->
            <div class="col-lg-3 col-6">
                <div class="footer-nav mt-4 mt-lg-2">
                    <h6 class="text-uppercase">Categories</h6>
                    <ul class="list-unstyled mt-3">
                        <li class="footer-item"><a href="#" class="footer-link">Agency</a></li>
                        <li class="footer-item"><a href="#" class="footer-link">Business</a></li>
                        <li class="footer-item"><a href="#" class="footer-link">Page Builder</a></li>
                        <li class="footer-item"><a href="#" class="footer-link">Portfolio</a></li>
                    </ul>
                </div>
                <!--end footer-nav-->
            </div>
            <!--end col-->
            <div class="col-lg-2 col-6">
                <div class="footer-nav mt-4 mt-lg-2">
                    <h6 class="text-uppercase">Support</h6>
                    <ul class="list-unstyled mt-3">
                        <li class="footer-item"><a href="#" class="footer-link"></a></li>
                        <li class="footer-item"><a href="#" class="footer-link"></a></li>
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
                        <script>document.write(new Date().getFullYear())</script> &copy; Yoruba Nation Designed By
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