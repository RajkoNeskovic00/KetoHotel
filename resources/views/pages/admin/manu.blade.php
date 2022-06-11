
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
                                <h3>Menu</h3>
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Num.</th>
                                        <th>Value</th>
                                        <th>Route</th>



                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count=1 @endphp
                                    @foreach($data as $m)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$m->name}} </td>
                                            <td>{{$m->route}}</td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
{{--                        <form class="ml-3" method="post">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1">Price</label>--}}
{{--                                <input type="text" class="form-control" id="newPrice" name="value" aria-describedby="emailHelp" placeholder="Enter new price">--}}
{{--                            </div>--}}

{{--                            <button  id="insertPrice" class="btn btn-primary">Add price</button>--}}
{{--                        </form>--}}
{{--                        <form class="ml-3" method="get">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1">Edit price</label>--}}
{{--                                <input type="text" class="form-control" id="editPrice" name="valueUp" value="{{$data["valueEdit"]->Price ?? ''}}" name="valueEdit" aria-describedby="emailHelp" >--}}
{{--                            </div>--}}

{{--                            <button  id="updatePrice" class="btn btn-primary">Edit</button>--}}
{{--                        </form>--}}

                    </div>
                    <div class="errors text-danger"></div>
                    <div class="suc text-success"></div>


                </div>
            </div>
        </div>
    </div>

@endsection

