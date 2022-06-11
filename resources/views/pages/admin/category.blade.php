
@extends('layouts.layoutBack')


@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="table-responsive table--no-card m-b-30">
                                <h3>Category</h3>
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
                                    @foreach($data as $cat)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$cat->name}}</td>

                                            <td ><i data-id="{{$cat->id_cat}}" id="" class="delCat zmdi zmdi-delete"></i>&nbsp;&nbsp;/&nbsp;&nbsp;<i data-id="{{$cat->id_cat}}"  class="zmdi zmdi-edit editCat"></i></td>
                                        </tr>
                                    @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <form class="ml-3" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <input type="text" class="form-control" id="newCat" name="value"  placeholder="Enter new category">
                            </div>

                            <button  id="insertCat" class="btn btn-primary">Add category</button>
                        </form>
                        <form class="ml-3" method="get">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Edit category</label>
                                <input type="text" class="form-control" id="editCat" name="valueUp" value="" name="valueEdit"  >
                            </div>

                            <button  id="updateCat" class="btn btn-primary">Edit</button>
                        </form>

                    </div>
                    <div class="errors text-danger"></div>
                    <div class="suc text-success"></div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
