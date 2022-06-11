@extends('layouts.layoutBack')
@section('key') Admin,keto,report @endsection
@section('desc') Admin panel for Keto hotel with all functions @endsection
@section('title') Rooms @endsection

@section('content')
    <?php use App\Models\Room; ?>
    <div class="page-container">
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="table-responsive table--no-card m-b-30">
                            <h3>Rooms</h3>
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>Num.</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Mark</th>
                                    <th>Image</th>
                                    <th>Content</th>
                                    <th>More</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php $count=1 @endphp
                                @foreach($all as $room)
                                <tr>
                                    <td>{{$count++}}</td>
                                    <td>{{$room->name}}</td>
                                    <td>{{$room->description}}</td>
                                    <td >{{$room->cat}}</td>
                                    <td >{{$room->cena}}</td>
                                    <td >{{$room->popust}}</td>
                                    <td >{{$room->ocena}}</td>
                                    <td >{{$room->image}}</td>
                                    <td>
                                        @foreach(\App\Models\Room::roomContent($room->id) as $c)
                                        {{$c->naziv}},
                                        @endforeach
                                    </td>

                                    <td ><i data-id="{{$room->id}}" class="zmdi zmdi-delete delRoom"></i>&nbsp;&nbsp;/&nbsp;&nbsp;<i data-id="{{$room->id}}" class="editRoom zmdi zmdi-edit"></i></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                    <form class="ml-3" enctype="multipart/form-data" >
                        @include('forms.admin.roomsForm',['cat'=>$cat,'price'=>$price, 'disc'=>$dics,'mark'=>$mark,'content'=>$content])

                        <button  id="insertRooms" class="btn btn-primary">Add room</button>
                        <button  id="editRooms" class="btn btn-primary">Edit</button>
                        <div class="errors text-danger"></div>
                        <div class="suc text-success"></div>
                    </form>

                    </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    </div>

@endsection
