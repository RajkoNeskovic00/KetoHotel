@extends('layouts.layoutFront')

@section('title') Rooms | Keto @endsection
@section('key')Keto, hotels, room, booking @endsection
@section('description') keto hotel is a hotel located in the United Arab Emirates on the coast.is one of the most luxurious hotels with the best offer for holidays and vacations @endsection

@section('sliderContent')
    <p class="naslov" >Keto -> <spna class="naslov2">Rooms</spna></p>
@endsection




@section('content')

<!-- end header -->
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Our Rooms</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container " >
    <div class="row" >


@include('forms.roomForm',['category'=>$category,"qs"=>$qs])
<!-- our_room -->

<div  class="our_room col-md-12 " >
    <div class="container" >
        <div class="row" >
            <div class="col-md-12">
                <div class="titlepage">
                    <p  class="margin_0">Find a room for yours, now! </p>
                </div>
            </div>
        </div>
        <div class="row" id="sobe">
        @if(count($rooms)!=0)
            @foreach($rooms as $room)
                @include('parials.roomPrint',['p'=>$room])
            @endforeach
        @else
            <p>There is currently no room that meets the criteria</p>
        @endif
        </div>
        {{ $rooms->links("pagination::bootstrap-4") }}
    </div>
</div>
    </div>
</div>

<!-- end our_room -->

@endsection
