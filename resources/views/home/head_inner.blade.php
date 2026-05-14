<body class="main-layout">

<!-- loader
<div class="loader_bg">
    <div class="loader">
        <img src="images/loading.gif" alt="#">
    </div>
</div>
 end loader -->

<!-- header -->
<header>
    <div class="header">
        <div class="container">
            <div class="row align-items-center">

                <!-- LOGO -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="images/logo.png" alt="logo">
                        </a>
                    </div>
                </div>

                <!-- NAVBAR -->
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navbar navbar-expand-md navbar-dark justify-content-end">

                        <button class="navbar-toggler" type="button"
                            data-toggle="collapse"
                            data-target="#mainNav"
                            aria-controls="mainNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="mainNav">
                            <ul class="navbar-nav ml-auto align-items-center">

                                <li class="nav-item active">
                                    <a class="nav-link" href="{{url('/')}}">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('our_about')}}">About</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('our_room')}}">Our Room</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('our_gallery')}}">Gallery</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('blog_us')}}">Blog</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('contact_us')}}">Contact Us</a>
                                </li>

                                @auth
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                                @endauth

                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Log In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                                @endguest

                            </ul>
                        </div>

                    </nav>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- end header -->
<style>

  
.header {
    background: #ffffff;
}


.logo img {
    max-height: 45px;
}


.navbar {
    padding: 0;
}

.navbar-nav .nav-item {
    margin: 0 12px;
}

.navbar-nav .nav-link {
    color: #000 !important;
    font-size: 14px;
    font-weight: 500;
    padding: 25px 0;
    line-height: 1;
    white-space: nowrap; 
}


.navbar-nav .nav-item.active .nav-link {
    color: red !important;
    border-bottom: 2px solid red;
    padding-bottom: 23px;
}


.navbar-nav .nav-link:hover {
    color: red !important;
}


.navbar-nav form button {
    margin-left: 10px;
    font-size: 13px;
    padding: 6px 14px;
}

</style>