<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">
            <img src="{{ asset('images/ynlogo.png') }}" height="60" />
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-laptop" aria-hidden="true"></i>
            <span>Dashboard</span></a>
    </li>
    {{-- <li class="nav-item {{ Request::is('messages*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('messages.index') }}">
            <i class="fa fa-comments" aria-hidden="true"></i>
            <span>Messages</span></a>
    </li> --}}
    <li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="fa fa-object-group" aria-hidden="true"></i>
            <span>Categories</span></a>
    </li>
    <li class="nav-item {{ Request::is('galleries*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('galleries.index') }}">
            <i class="fas fa-images" aria-hidden="true"></i>
            <span>Gallery</span></a>
    </li>
    <li class="nav-item {{ Request::is('jobbank*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('jobbank.index') }}">
            <i class="fas fa-hotdog" aria-hidden="true"></i>
            <span>Job Bank</span></a>
    </li>
    <li class="nav-item {{ Request::is('blogs*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('blogs.index') }}">
            <i class="fa fa-rss" aria-hidden="true"></i>
            <span>Blogs</span></a>
    </li>
    <li class="nav-item {{ Request::is('banners*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('banners.index') }}">
            <i class="fas fa-image" aria-hidden="true"></i>
            <span>Banners</span></a>
    </li>
    <li class="nav-item {{ Request::is('resumes*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('resumes.index') }}">
            <i class="fas fa-file-alt" aria-hidden="true"></i>
            <span>Resume Pool</span></a>
    </li>
    <li class="nav-item {{ Request::is('settings*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('settings.index') }}">
            <i class="fa fa-cogs" aria-hidden="true"></i>
            <span>Settings</span></a>
    </li>
    {{-- <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>Users</span></a>
    </li> --}}
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->