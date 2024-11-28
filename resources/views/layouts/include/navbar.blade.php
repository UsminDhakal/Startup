<nav class="layout-navbar navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <div class="navbar-nav align-items-center">
            <h5 class="fw-bold text-light cursor-pointer m-0">
                <span class="text-light fw-light">
                    Home
                </span>
                <span class="text-light fw-light">
                    <a href="{{ url()->previous() }}">@yield('subPage')</a></span>
                @yield('breadcrum')
            </h5>
        </div>


        <ul class="navbar-nav flex-row align-items-center ms-auto">

            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow " href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online bg-white rounded-5">
                        <img src="{{ url('/') }}/logo.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" style="margin-top: 5px">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{ url('/') }}/admin/assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                    <small class="text-muted">
                                        User
                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        @if (Auth::check())
                            <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
                                @csrf
                                <i class="bx bx-power-off me-2"></i>
                                <button type="submit" class="align-middle btn btn-sm btn-default">Log Out</button>
                            </form>
                        @endif
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
