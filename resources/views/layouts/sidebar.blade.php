<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.html">
                        StudSys
{{--                        <img src="{{asset('assets/compiled/svg/logo.svg')}}" alt="Logo" srcset="">--}}
                    </a>
                </div>
                <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
{{--                    Logout--}}
                    <div class="form-check form-switch fs-6">
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-primary btn-sm" type="submit">
                                Logout
                            </button>
                        </form>
{{--                        <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">--}}
{{--                        <label class="form-check-label"></label>--}}
                    </div>


                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li
                    class="sidebar-item  ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>


                </li>

                <li
                    class="sidebar-item  ">
                    <a href="{{ route('pelajar.index') }}" class='sidebar-link'>
{{--                        <i class="bi bi-grid-fill"></i>--}}
                        <i class="bi bi-stack"></i>
                        <span>Pelajar</span>
                    </a>


                </li>


{{--                <li--}}
{{--                    class="sidebar-item  has-sub">--}}
{{--                    <a href="#" class='sidebar-link'>--}}
{{--                        <i class="bi bi-stack"></i>--}}
{{--                        <span>Components</span>--}}
{{--                    </a>--}}

{{--                    <ul class="submenu ">--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-accordion.html" class="submenu-link">Accordion</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-alert.html" class="submenu-link">Alert</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-badge.html" class="submenu-link">Badge</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-breadcrumb.html" class="submenu-link">Breadcrumb</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-button.html" class="submenu-link">Button</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-card.html" class="submenu-link">Card</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-carousel.html" class="submenu-link">Carousel</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-collapse.html" class="submenu-link">Collapse</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-dropdown.html" class="submenu-link">Dropdown</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-list-group.html" class="submenu-link">List Group</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-modal.html" class="submenu-link">Modal</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-navs.html" class="submenu-link">Navs</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-pagination.html" class="submenu-link">Pagination</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-progress.html" class="submenu-link">Progress</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-spinner.html" class="submenu-link">Spinner</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-toasts.html" class="submenu-link">Toasts</a>--}}

{{--                        </li>--}}

{{--                        <li class="submenu-item  ">--}}
{{--                            <a href="component-tooltip.html" class="submenu-link">Tooltip</a>--}}

{{--                        </li>--}}

{{--                    </ul>--}}


{{--                </li>--}}

            </ul>
        </div>
    </div>
</div>
