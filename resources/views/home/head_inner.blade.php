<body class="main-layout">

<!-- ===== Header Start ===== -->
<header class="header_area">
    <div class="container">
        <div class="row align-items-center">

            <!-- Logo Section -->
            <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="site_logo">
                    <a href="{{ url('/') }}">
                        <img src="images/logo.png" alt="Hotel Logo">
                    </a>
                </div>
            </div>

            <!-- Menu Section -->
            <div class="col-lg-9 col-md-9 col-sm-8">

                <nav class="navbar navbar-expand-lg navbar-light custom_nav">

                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarMenu"
                        aria-controls="navbarMenu"
                        aria-expanded="false"
                        aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar Links -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">

                        <ul class="navbar-nav nav_menu">

                            <li class="nav-item active">
                                <a href="{{ url('/') }}" class="nav-link">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('our_about') }}" class="nav-link">
                                    About
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('our_room') }}" class="nav-link">
                                    Rooms
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('our_gallery') }}" class="nav-link">
                                    Gallery
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('blog_us') }}" class="nav-link">
                                    Blog
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('contact_us') }}" class="nav-link">
                                    Contact
                                </a>
                            </li>

                            <!-- Auth User -->
                            @auth
                            <li class="nav-item ml-lg-3">

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf

                                    <button type="submit" class="logout_btn">
                                        Logout
                                    </button>
                                </form>

                            </li>
                            @endauth

                            <!-- Guest User -->
                            @guest

                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link login_btn">
                                    Login
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="register_btn">
                                    Register
                                </a>
                            </li>

                            @endguest

                        </ul>

                    </div>

                </nav>

            </div>

        </div>
    </div>
</header>
<!-- ===== Header End ===== -->


<style>

/* ===== Header ===== */

.header_area{
    width: 100%;
    background: #fff;
    padding: 12px 0;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    position: relative;
    z-index: 999;
}

/* ===== Logo ===== */

.site_logo img{
    max-height: 48px;
}

/* ===== Navbar ===== */

.custom_nav{
    padding: 0;
}

.nav_menu .nav-item{
    margin-left: 18px;
}

.nav_menu .nav-link{
    color: #111 !important;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 0.3px;
    transition: 0.3s ease;
    position: relative;
}

/* Hover Effect */

.nav_menu .nav-link:hover{
    color: #d60000 !important;
}

/* Active Menu */

.nav_menu .active .nav-link{
    color: #d60000 !important;
}

.nav_menu .active .nav-link::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 2px;
    background: #d60000;
}

/* ===== Buttons ===== */

.logout_btn{
    background: #dc3545;
    border: none;
    color: #fff;
    padding: 7px 16px;
    border-radius: 4px;
    font-size: 14px;
    transition: 0.3s;
}

.logout_btn:hover{
    background: #b52a37;
}

.register_btn{
    background: #111;
    color: #fff !important;
    padding: 8px 18px;
    border-radius: 5px;
    text-decoration: none;
    transition: 0.3s;
}

.register_btn:hover{
    background: #d60000;
    text-decoration: none;
}

/* ===== Responsive ===== */

@media(max-width:991px){

    .nav_menu{
        margin-top: 15px;
        text-align: center;
    }

    .nav_menu .nav-item{
        margin: 10px 0;
    }

    .register_btn{
        display: inline-block;
    }

}

</style>