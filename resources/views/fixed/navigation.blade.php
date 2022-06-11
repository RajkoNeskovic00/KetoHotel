<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                @foreach($manu as $m)
                                <li class="nav-item @if(request()->routeIs($m->route)) active @endif">
                                    <a class="nav-link" href="{{route($m->route)}}">{{$m->name}}</a>
                                </li>
                                @endforeach

                                    @if( auth()->check() )
                                        <li class="nav-item">
                                            <a class="nav-link font-weight-bold text-danger" href="{{ auth()->user()->id_uloga == 1 ? route('admin') : route('home')}}">Hi,  {{  auth()->user()->id_uloga== 1 ? "ADMIN" : auth()->user()->name }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                                        </li>
{{--                                        <li class="nav-item">--}}
{{--                                            <a class="nav-link" href="{{route('forms')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>--}}
{{--                                        </li>--}}
                                    @else
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('forms')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                                        </li>
                                    @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>s
</header>
<!-- end header inner -->
<!-- end header -->
