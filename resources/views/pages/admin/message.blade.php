@extends('layouts.layoutBack')
@section('key') Admin,keto,report @endsection
@section('desc') Admin panel for Keto hotel with all functions @endsection
@section('title') Message @endsection

@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="table-responsive table--no-card m-b-30">
                                <h3>Messages</h3>
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Num.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Text</th>
                                        <th>Date/Time</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count=1 @endphp
                                    @foreach($data as $mes)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$mes->name}} </td>
                                            <td>{{$mes->email}} </td>
                                            <td>{{$mes->phone}} </td>
                                            <td>{{$mes->message}} </td>
                                            <td>{{$mes->created_at}} </td>

                                            <td ><i data-id="{{$mes->id}}" class="zmdi zmdi-delete delMess"></i></td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="errors text-danger"></div>
                        <div class="suc text-success"></div>

                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
