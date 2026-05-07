     <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('hotel_room')}}"> <i class="icon-grid"></i> Hotel Room Details </a></li>
              
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Rooms Creditials </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('view_room')}}">View Room Details</a></li>
                 
                  
                  </ul>
                </li>
          <li><a href="{{url('booking_room')}}"> <i class="icon-grid"></i> View Booking Details </a></li>
            <li><a href="{{url('gallery')}}"> <i class="icon-user"></i> View Gallery  </a></li>
              <li><a href="{{url('message')}}"> <i class="icon-user"></i>  Customer Message  </a></li>
      </nav>
      <!-- Sidebar Navigation end-->