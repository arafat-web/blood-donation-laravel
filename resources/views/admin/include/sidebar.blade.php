<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : null }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Management
    </div>

    <li class="nav-item {{ request()->routeIs('add.donor') ? 'active' : null }}">
        <a class="nav-link" href="{{ route('add.donor') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Donor</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('donor.request') ? 'active' : null }}">
        <a class="nav-link" href="{{ route('donor.request') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Donor Request</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('donor.list') ? 'active' : null }}">
        <a class="nav-link" href="{{ route('donor.list') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Donor List</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('location.settings') ? 'active' : null }}">
        <a class="nav-link" href="{{route('location.settings')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Location Settings</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('donation.settings') ? 'active' : null }}">
        <a class="nav-link" href="{{route('donation.settings')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Donation Settings</span></a>
    </li>

    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Miscellaneous
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
