<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="{{route('home')}}">
                    <img src="{{asset('assets/images/logo.png')}}" alt="logo" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{route('admin')}}">
                        <i class="fas fa-table"></i>Deashbord</a>
                </li>
                <li>
                    <a href="{{route('admin.rooms')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Rooms</a>
                </li>
                <li>
                    <a href="{{route('admin.users')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Users</a>
                </li>
                <li>
                    <a href="{{route('admin.cat')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>  Category</a>
                </li>
                <li>
                    <a href="{{route('admin.price')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Price</a>
                </li>
                <li>
                    <a href="{{route('admin.mes')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Messages </a>
                </li>
                <li>
                    <a href="{{route('adminMenu')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Menu </a>
                </li>
                <li>
                    <a href="{{route('adminContent')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Content room </a>
                </li>


            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a class="logo" href="{{route('home')}}">
            <img src="{{asset('assets/images/logo.png')}}" alt="logo" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{route('admin')}}">
                        <i class="fas fa-table"></i>Deashbord</a>
                </li>
                <li>
                    <a href="{{route('admin.rooms')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Rooms</a>
                </li>
                <li>
                    <a href="{{route('admin.users')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Users</a>
                </li>
                <li>
                    <a href="{{route('admin.cat')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>  Category</a>
                </li>
                <li>
                    <a href="{{route('admin.price')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Price</a>
                </li>
                <li>
                    <a href="{{route('admin.mes')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Messages </a>
                </li>
                <li>
                    <a href="{{route('adminMenu')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Menu </a>
                </li>
                <li>
                    <a href="{{route('adminContent')}}">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> Content room </a>
                </li>


            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
