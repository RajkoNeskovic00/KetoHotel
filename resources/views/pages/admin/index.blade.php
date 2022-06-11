@extends('layouts.layoutBack')
@section('key') Admin,keto,report @endsection
@section('desc') Admin panel for Keto hotel with all functions @endsection
@section('title') Report @endsection

@section('content')
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <div class="header-button">

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Overview</h2>

                        </div>
                    </div>
                </div>
                <div class="row m-t-25">
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{$data[0]}}</h2>
                                        <span>Users</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-badge-check"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{$data[1]}}</h2>
                                        <span>Reservations</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{$data[2]}}</h2>
                                        <span>Messages</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-airline-seat-legroom-reduced"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{$data[3]}}</h2>
                                        <span>Rooms</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-lg-12">
                            <div class="table-responsive table--no-card m-b-30">
                                <h3>Login/out and registration report</h3>
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Num.</th>
                                        <th>User</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                        <th>Date/Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count=1 @endphp
                                    @foreach($data[4] as $r)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$r->fullName}}</td>
                                            <td>{{$r->email}}</td>
                                            <td>{{$r->poruka}}</td>
                                            <td>{{$r->date}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-lg-12">
                            <div class="table-responsive table--no-card m-b-30">
                                <h3>Reservation report</h3>
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Num.</th>
                                        <th>User</th>
                                        <th>Code</th>
                                        <th>Room</th>
                                        <th>DateIn / TimeOut</th>
                                        <th>Time res.</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count=1 @endphp
                                    @foreach($data[5] as $r)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$r->ime." ".$r->prezime}}</td>
                                            <td>{{$r->broj_rezervacije}}</td>
                                            <td>{{$r->soba}}</td>
                                            <td>{{$r->datumOd." / ".$r->datumDo}}</td>
                                            <td>{{$r->vreme_rezervacije}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>

@endsection
