<div class="bg-white">
    <div class="container d-flex align-items-center justify-content-between top-bar py-3 ">
        <a href="{{ route('home') }}">
            <img class="logo" src="{{ asset('images/1000.jpeg') }}" alt="logo">
        </a>
        <p class="top-bar-text">Safety measures for fire, security protocols, and energy systems.</p>
        <div class="d-flex align-items-center gap-4 d-none d-lg-flex">
            <a href="#" class="d-flex align-items-center gap-2 widget">
                <div>
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div>
                    <h4>(219) 555-0114</h4>
                </div>
            </a>
        </div>
        <button class="menu-btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-bars"></i></button>
    </div>
</div>


<div class="offcanvas offcanvas-end mobile-menu" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header text-end">
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <div class="offcanvas-body ps-4">
        <ul class="navbar-nav d-flex flex-column me-auto mb-2 mb-lg-0 mb-5">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product.all') }}">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('client')}}">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
        </ul>
        <div class="d-flex flex-column gap-4">
            <a href="#" class="d-flex align-items-center gap-2 widget">
                <div>
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div>
                    <h4>(219) 555-0114</h4>
                </div>
            </a>
            <a href="#" class="d-flex align-items-center gap-2 widget">
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                    <h4>Dhaka Bangladesh</h4>
                </div>
            </a>
        </div>
    </div>
</div>
<nav class="navbar d-none d-lg-flex navbar-expand-lg flex-column p-0">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.all') }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client')}}">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
