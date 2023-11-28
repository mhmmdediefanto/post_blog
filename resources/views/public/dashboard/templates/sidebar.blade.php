<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-text mx-3">EdFaN|BLOG</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ Request::is('dashboard/post*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/post">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Post</span></a>
    </li>
    <li class="nav-item {{ Request::is('dashboard/notification*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/notification">
            <i class="bi bi-bell"></i>
            <span>Notification Post</span>
            <span class="badge badge-danger ml-1">3</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    @can('admin')
    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ Request::is('dashboard/category*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/category">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Category</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ Request::is('dashboard/user*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/user">
            <i class="fas fa-fw fa-table"></i>
            <span>Data User</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    @endcan
    <!-- Divider -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
</ul>
