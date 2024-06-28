<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLogo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Abie</span>
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
                  {{ Auth::user()->name }}  
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
                    <a href="{{ route('home.index') }}"
                        class="nav-link {{ request()->is('/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Home Page
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('career.manage') }}"
                        class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Career
                        </p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="{{ route('team.manage') }}"
                        class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Team
                        </p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="{{ route('testimonial.manage') }}"
                        class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tetsimonial
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('about.manage') }}" class="nav-link {{ request()->is('about/manage') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            About
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact.manage') }}" class="nav-link {{ request()->is('contact/manage') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>
                            Contact
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('slider.manage') }}" class="nav-link {{ request()->is('slider/*') ? 'active' : '' }}">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Slider
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="{{ route('banner.manage') }}" class="nav-link {{ request()->is('banner/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Banner
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Menu
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('slider.manage') }}" class="nav-link {{ request()->is('slider/*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('service.manage') }}" class="nav-link {{ request()->is('service/*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Service</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product.manage') }}" class="nav-link {{ request()->is('product/*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('article.manage') }}" class="nav-link {{ request()->is('article/*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Article</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gallery.manage') }}" class="nav-link {{ request()->is('gallery/*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gallery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('client.manage') }}" class="nav-link {{ request()->is('client/*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Client</p>
                            </a>
                        </li>
                         {{-- <li class="nav-item">
                            <a href="{{ route('career.manage') }}" class="nav-link {{ request()->is('career/*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Career</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Category
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('category-article.manage') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Category Article</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('category.manage') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Category Produk</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('product.manage') }}" class="nav-link {{ request()->is('team/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Product
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('article.manage') }}" class="nav-link {{ request()->is('team/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Article
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
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
                    <a href="{{ route('gallery.manage') }}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Gallery
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li> --}}
                
                {{-- <li class="nav-item">
                    <a href="{{ route('contact.manage') }}" class="nav-link {{ request()->is('gallery/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-phone"></i>
                        
                        <p>
                            Kontak
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li> --}}
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
