<header class="header">
    <nav class="navbar navbar-expand-lg">

        <!-- 🔍 Search Panel -->
        <div class="search-panel">
            <div class="search-inner d-flex justify-content-center align-items-center">
                <span class="close-btn">Close <i class="fa fa-close"></i></span>

                <form id="searchForm">
                    <div class="form-group">
                        <input type="search" name="search" placeholder="Search here...">
                        <button type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="container-fluid d-flex justify-content-between align-items-center">

            <!-- 🔹 Left Section -->
            <div class="navbar-header d-flex align-items-center">
                <a href="#" class="navbar-brand text-uppercase">
                    <span class="brand-big">
                        <strong class="text-primary">Dark</strong>Admin
                    </span>
                    <span class="brand-sm">
                        <strong class="text-primary">D</strong>A
                    </span>
                </a>

                <button class="sidebar-toggle ms-3">
                    <i class="fa fa-long-arrow-left"></i>
                </button>
            </div>

            <!-- 🔹 Right Menu -->
            <ul class="list-inline mb-0 d-flex align-items-center">

                <!-- Search -->
                <li class="list-inline-item">
                    <a href="#" class="nav-link search-open">
                        <i class="icon-magnifying-glass-browser"></i>
                    </a>
                </li>

                <!-- Messages -->
                <li class="list-inline-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link">
                        <i class="icon-email"></i>
                        <span class="badge dashbg-1">5</span>
                    </a>

                    <div class="dropdown-menu messages">

                        @foreach([
                            ['img'=>'avatar-3.jpg','name'=>'Nadia Halsey','time'=>'9:30am','status'=>'online'],
                            ['img'=>'avatar-2.jpg','name'=>'Peter Ramsy','time'=>'7:40am','status'=>'away'],
                            ['img'=>'avatar-1.jpg','name'=>'Sam Kaheil','time'=>'6:55am','status'=>'busy'],
                            ['img'=>'avatar-5.jpg','name'=>'Sara Wood','time'=>'10:30pm','status'=>'offline']
                        ] as $msg)

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="profile">
                                <img src="{{ asset('admin_css/img/'.$msg['img']) }}" class="img-fluid">
                                <div class="status {{ $msg['status'] }}"></div>
                            </div>

                            <div class="content">
                                <strong>{{ $msg['name'] }}</strong>
                                <span>Lorem ipsum dolor sit amet</span>
                                <small>{{ $msg['time'] }}</small>
                            </div>
                        </a>

                        @endforeach

                        <a href="#" class="dropdown-item text-center">
                            <strong>See All Messages</strong>
                        </a>
                    </div>
                </li>

                <!-- Tasks -->
                <li class="list-inline-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link">
                        <i class="icon-new-file"></i>
                        <span class="badge dashbg-3">9</span>
                    </a>

                    <div class="dropdown-menu tasks-list">

                        @foreach([
                            ['task'=>'Task 1','percent'=>40],
                            ['task'=>'Task 2','percent'=>20],
                            ['task'=>'Task 3','percent'=>70],
                            ['task'=>'Task 4','percent'=>30],
                            ['task'=>'Task 5','percent'=>65],
                        ] as $task)

                        <a href="#" class="dropdown-item">
                            <div class="d-flex justify-content-between">
                                <strong>{{ $task['task'] }}</strong>
                                <span>{{ $task['percent'] }}%</span>
                            </div>

                            <div class="progress">
                                <div class="progress-bar"
                                     style="width: {{ $task['percent'] }}%">
                                </div>
                            </div>
                        </a>

                        @endforeach

                    </div>
                </li>

                <!-- Language -->
                <li class="list-inline-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link">
                        <img src="{{ asset('admin_css/img/flags/16/GB.png') }}">
                        English
                    </a>
                </li>

                <!-- Logout -->
                <li class="list-inline-item">
                    <a href="#"
                       class="nav-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout <i class="icon-logout"></i>
                    </a>

                    <form id="logout-form"
                          action="{{ route('logout') }}"
                          method="POST"
                          class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </nav>
</header>