<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="{{ route('home') }}" class="b-brand">
                <!-- <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div> -->

                <div class="b-bg">
                    <img src="{{ asset('Admin/assets/images/logo/logo.png')}}" alt="" srcset=""
                        style="height: 40px; width: 40px;">
                </div>
                <span class="b-title">Citrus Talent </span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                    class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <!-- <li class="nav-item pcoded-menu-caption">
                        <label>UI Element</label>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Components</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="bc_button.html" class="">Button</a></li>
                            <li class=""><a href="bc_badges.html" class="">Badges</a></li>
                            <li class=""><a href="bc_breadcrumb-pagination.html" class="">Breadcrumb & paggination</a></li>
                            <li class=""><a href="bc_collapse.html" class="">Collapse</a></li>
                            <li class=""><a href="bc_tabs.html" class="">Tabs & pills</a></li>
                            <li class=""><a href="bc_typography.html" class="">Typography</a></li>


                            <li class=""><a href="icon-feather.html" class="">Feather<span class="pcoded-badge label label-danger">NEW</span></a></li>
                        </ul>
                    </li> -->
                <li class="nav-item pcoded-menu-caption">
                    <label>Role</label>
                </li>
                <li data-username="roles management" class="nav-item {{ request()->is('roles') ? 'active' : '' }}">
                    <a href="{{ route('roles.index') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-lock"></i></span>
                        <span class="pcoded-mtext">Role</span>
                    </a>
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>User</label>
                </li>
                <li data-username="form elements advance componant validation masking wizard picker select"
                    class="nav-item {{ request()->is('users') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="pcoded-mtext">User</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Pages</label>
                </li>

                <li data-username="form elements advance componant validation masking wizard picker select"
                    class="nav-item {{ request()->is('models.new-request') ? 'active' : '' }}">
                    <a href="{{ route('models.new-request') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="pcoded-mtext">New Request</span>
                    </a>
                </li>

                <li data-username="Table bootstrap datatable footable"
                    class="nav-item {{ request()->is('models.approved-request') ? 'active' : '' }}">
                    <a href="{{ route('models.approved-request') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                        <span class="pcoded-mtext">Approved</span>
                    </a>
                </li>

                <li data-username="Table bootstrap datatable footable"
                    class="nav-item {{ request()->is('models.hold-request') ? 'active' : '' }}">
                    <a href="{{ route('models.hold-request') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-pause-circle"></i></span>
                        <span class="pcoded-mtext">On Hold</span>
                    </a>
                </li>

                <li data-username="Table bootstrap datatable footable"
                    class="nav-item {{ request()->is('models.rejected-request') ? 'active' : '' }}">
                    <a href="{{ route('models.rejected-request') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-x-circle"></i></span>
                        <span class="pcoded-mtext">Rejected</span>
                    </a>
                </li>

                <!-- <li class="nav-item pcoded-menu-caption">
                        <label>Chart & Maps</label>
                    </li>
                    <li data-username="Charts Morris" class="nav-item"><a href="chart-morris.html"
                            class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-pie-chart"></i></span><span
                                class="pcoded-mtext">Chart</span></a></li>
                    <li data-username="Maps Google" class="nav-item"><a href="map-google.html" class="nav-link "><span
                                class="pcoded-micon"><i class="feather icon-map"></i></span><span
                                class="pcoded-mtext">Maps</span></a></li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>
                    <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe"
                        class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-lock"></i></span><span
                                class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="auth-signup.html" class="" target="_blank">Sign up</a></li>
                            <li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a></li>
                        </ul>
                    </li>
                    <li data-username="Sample Page" class="nav-item"><a href="sample-page.html" class="nav-link"><span
                                class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span
                                class="pcoded-mtext">Sample page</span></a></li>
                    <li data-username="Disabled Menu" class="nav-item disabled"><a href="javascript:"
                            class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span
                                class="pcoded-mtext">Disabled menu</span></a></li> -->
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->