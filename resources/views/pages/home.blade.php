@extends('layouts.layoutFront')

@section('title') Home | Keto @endsection
@section('key') Keto, hotels, sea, booking @endsection
@section('description') keto hotel is a hotel located in the United Arab Emirates on the coast.is one of the most luxurious hotels with the best offer for holidays and vacations @endsection

@section('sliderContent')
{{--        @php dd(url()->previous()) @endphp--}}
    @if(auth()->check() && ($idPoslateSobe !=null))
        @include('forms.booking')
    @else
        <p class="naslov" >Keto -> <spna class="naslov2">Hotel Dubai</spna></p>
    @endif

@endsection


@section('content')

<!-- body -->
{{--<body class="main-layout">--}}
<!-- our_room -->
<div  class="our_room">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Rooms</h2>
                    <p> Top rated rooms of our hotel </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($rooms as $room)
                @include('parials.roomPrint',['p'=>$room])
            @endforeach
        </div>
    </div>
</div>
{{--<!-- end our_room -->--}}
{{--<!-- gallery -->--}}
<div  class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>gallery</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($galleries as $gallery)
                @include('parials.gallery',['g'=>$gallery])
            @endforeach
        </div>
    </div>
</div>
{{--<!-- end gallery -->--}}
{{--<!-- blog -->--}}
<div  class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Blog</h2>
                    <p>The latest events with us and our hotel</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $b)
                @include('parials.blog',['blog'=>$b])
            @endforeach
        </div>
    </div>
</div>
{{--<!-- end blog -->--}}
@endsection




