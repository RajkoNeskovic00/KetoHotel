@extends('layouts.layoutFront')

@section('title') Room | Keto @endsection
@section('key') Keto, hotels, room, booking @endsection
@section('description') keto hotel is a hotel located in the United Arab Emirates on the coast.is one of the most luxurious hotels with the best offer for holidays and vacations @endsection

@section('sliderContent')
    <p class="naslov" >Keto -> <spna class="naslov2"> {{$room->name}}</spna></p>
@endsection


@section('content')
<main class="container1">

    <!-- Left Column / Headphones Image -->


    <div class="left-column">
        <img data-image="red" src="{{asset('assets/images/'.$room->image)}}" alt="{{$room->name}}">

    </div>


    <!-- Right Column -->
    <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
            <span class="roomsinglr" >Room</span>
            <h1>{{$room->name}}</h1>
            <p class="textDesc">{{$room->description}}</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

            <!-- Product Color -->
            <div class="product-color">
                <span class="naslovContent">Category: {{$room->cat}} </span><br/>
                <span class="naslovContent">Mark: @for($i=0;$i<$room->ocena;$i++) <i class="zmdi bojaI zmdi-star-circle"></i> @endfor</span><br/>
                <span class="naslovContent">Additional content: </span>
                    <ul>
                        @foreach($sadrzaj as $s)
                             <li>-> {{$s->naziv}}</li>
                        @endforeach
                    </ul>



            </div>


        </div>

        <!-- Product Pricing -->
        <div class="product-price">
            <span>Sale: {{$room->popust}}%</span>
            <span>Price per night: {{$room->cena}}$ </span>
            @if(auth()->check())
               <button  class="btnSinglePage btn btn-sm btn-outline-secondary"><a href="{{route('home',["room"=>$room->id])}}">Book now!</a></button>
            @else
                <p class="plaese">Please login for booking!</p>
            @endif
        </div>
    </div>
</main>
@endsection




