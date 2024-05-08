<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Sistem eDE </sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ (request ()-> segment(1)== 'utama')? 'active' :''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Utama</span>
        </a>
        <div id="collapseTwo" class="collapse {{ (request ()-> segment(1)== 'utama')? 'show' :''}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Laman Utama</h6>
                <a class="collapse-item {{ (request ()-> segment(2)== 'utama')? 'active' :''}}" href="/utama/utama">Laman Utama</a>
                <a class="collapse-item {{ (request ()-> segment(2)== '#')? 'active' :''}}" href="#">Senarai</a>
                <a class="collapse-item {{ (request ()-> segment(2)== 'borang')? 'active' :''}} " href="/utama/borang">Borang</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ (request ()-> segment(1)== 'utiliti')? 'active' :''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ (request ()-> segment(1)== 'utiliti')? 'show' :''}}" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Penyelenggaraan</h6>
                <a class="collapse-item {{ (request ()-> segment(2)== 'negeri')? 'active' :''}}" href="/utiliti/negeri">Negeri</a>
                <a class="collapse-item" href="utilities-border.html">Daerah</a>
                <a class="collapse-item" href="utilities-animation.html">Bandar</a>
                <a class="collapse-item" href="utilities-other.html">Pusat Tanggungjawab</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

  

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>