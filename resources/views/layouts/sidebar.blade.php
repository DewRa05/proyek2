<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Posdu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin Mimin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">Profile</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Data Akun
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Akun Bidan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('akunuser') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Akun User</p>
                            </a>
                        </li>
                </li>
            </ul>
            </li>
            <li class="nav-header">Data - Data</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Kesehatan Anak
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/charts/chartjs.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Absen Posyandu</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('data.anak') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pertumbuhan Anak</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-header">Informasi</li>
            <li class="nav-item">
                <a href="{{ route('informasi') }}" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                        Informasi & Berita
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('jadwal') }}" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                        Jadwal
                    </p>
                </a>
            </li>
            <li class="nav-header">Setting</li>
            <li class="nav-item">
                <a href="{{ route('gantiPw') }}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Ganti Password
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
