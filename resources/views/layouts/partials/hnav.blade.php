<!-- STRAT NAVBAR -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('images/ynlogo.png') }}" alt="logo" style="height: 80px;" class="logo-light" />
            <img src="{{ asset('images/ynlogo.png') }}" alt="logo" style="height: 80px;" class="logo-dark" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="mdi mdi-menu"></span>
        </button>
        <!--end button-->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul id="navbar-navlist" class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{ route('about.index') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="{{ route('gallery.index') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog*') ? 'active' : '' }}" href="{{ route('blog.index') }}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
            <!--end navbar nav-->
            <div class="login-btn ms-lg-4 mt-2 mt-lg-0">
                <a href="{{ route('job.apply') }}" class="btn btn-primary rounded-pill btn-sm">
                    Register
                </a>
            </div>
        </div>
        <!--end collapse-->
    </div>
    <!--end container-->
</nav>
<!-- END NAVBAR -->