<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="{{ route('home') }}" class="b-brand">
                <div class="b-bg">
                    <img src="{{ asset('Admin/assets/images/logo/logo.png') }}" alt="" style="height: 40px; width: 40px;">
                </div>
                <span class="b-title">Citrus Talent</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>

        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                {{-- Common for All Users --}}
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>

                {{-- If role is admin --}}
                @role('admin')
                    <li class="nav-item pcoded-menu-caption">
                        <label>Role</label>
                    </li>
                    <li class="nav-item {{ request()->is('roles') ? 'active' : '' }}">
                        <a href="{{ route('roles.index') }}" class="nav-link">
                            <span class="pcoded-micon"><i class="feather icon-lock"></i></span>
                            <span class="pcoded-mtext">Role</span>
                        </a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>User</label>
                    </li>
                    <li class="nav-item {{ request()->is('users') ? 'active' : '' }}">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                            <span class="pcoded-mtext">User</span>
                        </a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>

                    <li class="nav-item {{ request()->is('models.new-request') ? 'active' : '' }}">
                        <a href="{{ route('models.new-request') }}" class="nav-link">
                            <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                            <span class="pcoded-mtext">New Request</span>
                        </a>
                    </li>

                    <li class="nav-item {{ request()->is('models.approved-request') ? 'active' : '' }}">
                        <a href="{{ route('models.approved-request') }}" class="nav-link">
                            <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                            <span class="pcoded-mtext">Approved</span>
                        </a>
                    </li>

                    <li class="nav-item {{ request()->is('models.hold-request') ? 'active' : '' }}">
                        <a href="{{ route('models.hold-request') }}" class="nav-link">
                            <span class="pcoded-micon"><i class="feather icon-pause-circle"></i></span>
                            <span class="pcoded-mtext">On Hold</span>
                        </a>
                    </li>

                    <li class="nav-item {{ request()->is('models.rejected-request') ? 'active' : '' }}">
                        <a href="{{ route('models.rejected-request') }}" class="nav-link">
                            <span class="pcoded-micon"><i class="feather icon-x-circle"></i></span>
                            <span class="pcoded-mtext">Rejected</span>
                        </a>
                    </li>
                @endrole

                {{-- If role is brand --}}
                @role('Brand')
                    <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>

                    <li class="nav-item {{ request()->is('models.approved-request') ? 'active' : '' }}">
                        <a href="{{ route('models.approved-request') }}" class="nav-link">
                            <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                            <span class="pcoded-mtext">Approved</span>
                        </a>
                    </li>
                @endrole
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
