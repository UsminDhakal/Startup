<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo d-flex" style="align-items: center; gap: 20px">
                <img src="{{ url('/') }}/logo.png" style="width: auto; height: 40px;" alt="">
                <h5 class="mt-3">{{Auth::user()->name}}</h5>
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ Route::currentRouteName() == 'admin.user.index' ? 'active' : '' }}">
            <a href="{{route("admin.user.index")}}" class="menu-link">
                <i class='menu-icon bx bx-user'></i>
                <div data-i18n="Analytics">Create User</div>
            </a>
        </li>

        <li class="menu-item {{ Route::currentRouteName() == 'admin.topic.index' ? 'active' : '' }}">
            <a href="{{route("admin.topic.index")}}" class="menu-link">
                <i class='menu-icon bx bxs-book-add'></i>
                <div data-i18n="Analytics">Topic</div>
            </a>
        </li>

        <li class="menu-item {{ Route::currentRouteName() == 'admin.fund.index' ? 'active' : '' }}">
            <a href="{{route("admin.fund.index")}}" class="menu-link">
                <i class='menu-icon bx bxs-wallet' ></i>
                <div data-i18n="Analytics">Funds</div>
            </a>
        </li>

    </ul>
</aside>
