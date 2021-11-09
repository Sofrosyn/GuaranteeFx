<ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title">Main</li>

    <li>
        <a href="{{ route('home') }}" class="waves-effect">
            <i class="mdi mdi-view-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>
    @if(auth()->user()->is_subscribed)
        <li>
            <a href="{{ route('home.signals') }}" class="waves-effect">
                <i class="mdi mdi-access-point-network "></i>
                <span>Signals</span>
            </a>
        </li>
    @endif
</ul>
