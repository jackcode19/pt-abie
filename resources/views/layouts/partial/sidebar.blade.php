<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLogo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Sibungsu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="/profil/profil.png" class="img-circle elevation-2" alt="User Image"> --}}
            </div>
            <div class="info">
                <a href="#" class="d-block">
                  {{-- {{ Auth::user()->name }} --}}
               </a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">Master Data</li>
                <li class="nav-item">
                    <a href="/about/manage" class="nav-link {{ request()->is('about/manage') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            About
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('slider.manage') }}" class="nav-link {{ request()->is('team/*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Slider
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('service.manage') }}" class="nav-link {{ request()->is('service/*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Service
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('client.manage') }}" class="nav-link {{ request()->is('client/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Klien
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('article.manage') }}" class="nav-link {{ request()->is('article/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Artikel
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact.manage') }}" class="nav-link {{ request()->is('contact/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>
                            Kontak
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                        <p>
                            Master Product
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('product.manage') }}" class="nav-link  {{ request()->is('product/*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category.manage') }}" class="nav-link {{ request()->is('category/*') ? 'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Category Product</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
