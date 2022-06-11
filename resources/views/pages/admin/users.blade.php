
@extends('layouts.layoutBack')
@section('key') Admin,keto,report @endsection
@section('desc') Admin panel for Keto hotel with all functions @endsection
@section('title') Users @endsection

@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive table--no-card m-b-30">
                                <h3>Users</h3>
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Num.</th>
                                        <th>Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Password</th>

                                        <th>Role</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count=1 @endphp
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->last_name}}</td>
                                            <td >{{$user->email}}</td>
                                            <td >{{$user->password}}</td>

                                            <td >{{$user->uloga}}</td>
                                            <td ><i data-id="{{$user->id_korisnika}}" class="zmdi zmdi-delete delUser"></i>&nbsp;&nbsp;/&nbsp;&nbsp;<i data-id="{{$user->id_korisnika}}" class="zmdi zmdi-edit editUser"></i></td>
                                        </tr>
                                    @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <form class="ml-3" method="post">
                            @include('forms.admin.userForm',['role'=>$role])

                            <button  id="insertUser" class="btn btn-primary">Add user</button>
                            <button  id="editUser" class="btn btn-primary">Edit</button>
                        </form>

                    </div>
                    <div class="errors text-danger"></div>
                    <div class="suc text-success"></div>


                </div>
            </div>
        </div>
    </div>

@endsection
