
@extends('layouts.layoutBack')
@section('key') Admin,keto,report @endsection
@section('desc') Admin panel for Keto hotel with all functions @endsection
@section('title') Menu @endsection

@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="table-responsive table--no-card m-b-30">
                                <h3>Contents rooms</h3>
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Num.</th>
                                        <th>Name</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count=1 @endphp
                                    @foreach($data as $m)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$m->naziv}} </td>
                                            <td ><i data-id="{{$m->id_sadrzaj_smestaj}}"  class="zmdi zmdi-delete delCon"></i> &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;<i  data-id="{{$m->id_sadrzaj_smestaj}}" class="zmdi zmdi-edit editCon"></i></td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                                                <form class="ml-3" method="post">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Content</label>
                                                        <input type="text" class="form-control" id="newCon" name="valueCon" aria-describedby="emailHelp" placeholder="Enter new content">
                                                    </div>

                                                    <button  id="insertCon" class="btn btn-primary">Add content</button>
                                                </form>
                                                <form class="ml-3" method="get">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Edit content</label>
                                                        <input type="text" class="form-control" id="editCon" name="valueEditCon"  name="valueCon" aria-describedby="emailHelp" >
                                                    </div>

                                                    <button  id="updateCon" class="btn btn-primary">Edit</button>
                                                </form>

                    </div>
                    <div class="errors text-danger"></div>
                    <div class="suc text-success"></div>


                </div>
            </div>
        </div>
    </div>

@endsection


