<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="AdminLTE/img/logo.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>Library</b>Coop</span>
    </a>

<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="AdminLTE/img/user.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"></a>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('members')}}" class="nav-link">
                    <i class="nav-icon fa-regular fa-user"></i>
                    <p>Master User</p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-bars"></i>
                    <p>Master Menu
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-solid fa-arrow-right nav-icon"></i>
                            <p>Menu Buku</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-solid fa-arrow-right nav-icon"></i>
                            <p>Menu Peminjaman</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-solid fa-arrow-right nav-icon"></i>
                            <p>Menu Pengembalian</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa-regular fa-address-book"></i>
                    <p>Master Laporan
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-solid fa-circle nav-icon"></i>
                            <p>Pengembalian & Peminjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-solid fa-circle nav-icon"></i>
                            <p>Laporan Data User</p>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link">
                            <i class="nav-icon fa-regular fa-user"></i>
                            <p>Logout</p>
                        </a>
                    </li>
            </li>
        </ul>
    </nav>
</div>
</aside>
