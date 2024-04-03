<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-danger navbar-badge notif-count">0</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right notif-admin">
                <span onclick="getUrl()" style="cursor: pointer" class="dropdown-item dropdown-header">
                    Lihat Semua Notif
                </span>
                <div class="dropdown-divider"></div>
                {{-- <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a> --}}
                {{-- <div class="dropdown-divider"></div>
                <span href="#" class="dropdown-item dropdown-footer">See All Notifications</span> --}}
            </div>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li> --}}
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li> --}}
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
                {{-- {{ Auth::user()->name }} --}}
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <i class="fas fa-arrow-right mr-2"></i> 
                    {{-- {{ __('Logout') }} --}}
                </a>

                <form id="logout-form" action="" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
