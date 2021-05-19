<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-map-marker"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Qonita Travel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Dashboard
    </div>

    <!-- Daftar Kategori Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-tachometer-alt fa-fw"></i>
            <span>Home</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Daftar Menu
    </div>

    <!-- Daftar Produk Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-boxes fa-fw"></i>
            <span>Daftar Paket Travel</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('admin/produk'); ?>">Daftar Paket</a>
                <a class="collapse-item" href="<?= base_url('admin/keberangkatan'); ?>">Daftar Keberangkatan</a>
                <a class="collapse-item" href="<?= base_url('admin/kategori'); ?>">Daftar Kategori</a>
            </div>
        </div>
    </li>

    <!-- Daftar Customer Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/customer'); ?>">
            <i class="fas fa-users fa-fw"></i>
            <span>Daftar Customer</span>
        </a>
    </li>

    <!-- Daftar Customer Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-folder fa-fw"></i>
            <span>Daftar Lap. Transaksi</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('admin/lapTransaksi'); ?>">Semua Transaksi</a>
                <!-- <a class="collapse-item" href="<?= base_url('admin'); ?>">Transaksi Sudah Bayar</a> -->
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Akses
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/registration'); ?>">
            <i class="fas fa-user-plus fa-fw"></i>
            <span>Tambah Admin</span></a>
    </li>

    <!-- logout menu sidebar -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-sign-out-alt fa-fw"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->