<!-- Sidebar Navigation Start -->
<nav id="sidebar">

    <!-- Profile Section -->
    <div class="sidebar-header d-flex align-items-center">
        
        <div class="avatar">
            <img src="img/avatar-6.jpg" alt="Admin Image"
                class="img-fluid rounded-circle">
        </div>

        <div class="user-info">
            <h1 class="h5 mb-0">Mark Stephen</h1>
            <p class="mb-0">Web Designer</p>
        </div>

    </div>

    <!-- Sidebar Menu Title -->
    <span class="heading">Dashboard Menu</span>

    <!-- Sidebar Menu -->
    <ul class="list-unstyled sidebar-menu">

        <!-- Dashboard -->
        <li class="active">
            <a href="{{url('admin/dashboard')}}">
                <i class="icon-home"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Hotel Room -->
        <li>
            <a href="{{url('hotel_room')}}">
                <i class="icon-grid"></i>
                <span>Hotel Room Details</span>
            </a>
        </li>

        <!-- Room Credentials Dropdown -->
        <li>
            <a href="#roomDropdown"
                data-toggle="collapse"
                aria-expanded="false">

                <i class="icon-windows"></i>
                <span>Rooms Credentials</span>
            </a>

            <ul id="roomDropdown" class="collapse list-unstyled">

                <li>
                    <a href="{{url('view_room')}}">
                        View Room Details
                    </a>
                </li>

            </ul>
        </li>

        <!-- Booking Details -->
        <li>
            <a href="{{url('booking_room')}}">
                <i class="icon-grid"></i>
                <span>Booking Details</span>
            </a>
        </li>

        <!-- Gallery -->
        <li>
            <a href="{{url('gallery')}}">
                <i class="icon-picture"></i>
                <span>Gallery</span>
            </a>
        </li>

        <!-- Customer Message -->
        <li>
            <a href="{{url('message')}}">
                <i class="icon-mail"></i>
                <span>Customer Messages</span>
            </a>
        </li>

    </ul>

</nav>
<!-- Sidebar Navigation End -->