<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ $dash_index = route('welcome') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ $logo_url = asset('landing/img/logo.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ $logo_url }}" alt="" height="17">
                    </span>
                </a>

                <a href="{{ $dash_index }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ $logo_url }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ $logo_url }}" alt="" height="36">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="d-none d-sm-block ms-2">
                <h4 class="page-title">{{ Str::limit($title ?? '') }}</h4>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block me-2">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect"
                        id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img id="mu_company_logo" class="rounded-circle header-profile-user"
                         src="{{ asset('images/avatar_placeholder.png') }}" alt="{{ config('app.name') }}">
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    {{--<a class="dropdown-item" href="#">My Wallet</a>
                    <div class="dropdown-divider"></div>--}}
                    <form action="{{ route('logout') }}" method="post" id="topbar-logout-form" style="display: none">@csrf</form>
                    <a class="dropdown-item text-danger logout-btn"
                       onclick="document.getElementById('topbar-logout-form').submit()"
                       href="#/">Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
