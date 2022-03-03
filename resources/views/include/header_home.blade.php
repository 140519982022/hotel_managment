<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <div class="logo me-auto">
        <h1><a href="index.html">Delicious</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
        @guest
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
            <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
            <li><a class="nav-link scrollto" href="#events">Events</a></li>
            <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
            
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="{{route('customer_login')}}" class="signup-btn scrollto">Login</a>
        <a href="{{route('customer_signup')}}" class="login-btn scrollto">Signup</a>
        @endguest
        @auth
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            @if(auth()->user()->role_id == 1)
            <li><a class="nav-link scrollto" href="{{route('admin_dashboard')}}">Dashboard</a></li>
            @elseif(auth()->user()->role_id == 2)
            <li><a class="nav-link scrollto" href="{{route('customer_dashboard')}}">Dashboard</a></li>
            @endif()
            <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
            <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
            <li><a class="nav-link scrollto" href="#events">Events</a></li>
            <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
            
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="nav-link scrollto"  href="{{route('customer_logout')}}">Logout({{ \Illuminate\Support\Str::limit(auth()->user()->name, 8, $end='.') }})</a></li>
        </ul>
        @endauth

    </div>
</header>
  <!-- End Header -->