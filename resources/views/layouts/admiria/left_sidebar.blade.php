<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}" class="waves-effect">
                        <i class="mdi mdi-account-supervisor-circle "></i>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.signals.index') }}" class="waves-effect">
                        <i class="mdi mdi-access-point-network "></i>
                        <span>Signals</span>
                    </a>
                </li>

                {{--<li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-email-outline"></i>
                        <span> Jobs </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ '' }}">Manage Jobs</a></li>
                        <li><a href="{{ '' }}">Post a Job</a></li>
                    </ul>
                </li>--}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
