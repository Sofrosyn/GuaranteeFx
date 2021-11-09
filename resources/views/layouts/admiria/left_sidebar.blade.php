<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            @if(request()->routeIs('admin.*'))
                @include('layouts.admiria.sidebar_admin_menu')
            @else
                @include('layouts.admiria.sidebar_customer_menu')
            @endif
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
