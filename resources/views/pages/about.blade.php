@extends('layouts.layoutFront')

@section('title') AboutUs | Keto @endsection
@section('key')Keto, hotels, about, booking @endsection
@section('description') keto hotel is a hotel located in the United Arab Emirates on the coast.is one of the most luxurious hotels with the best offer for holidays and vacations @endsection

@section('sliderContent')
    <p class="naslov" >Keto -> <spna class="naslov2">About</spna></p>
@endsection



@section('content')
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about -->
<div class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="titlepage">

                    <p class="margin_0">“Standard room,” “Superior room,” “Deluxe room?”
                        And that means what exactly?

                        What do such terms mean to you as a guest? Nothing.
                        Hotels use them to mark their different room categories, but since terms like “standard” and “luxury” mean different things to different people, they unfortunately neither help to attract guests nor do they persuade to book. What follows next is a delightful image of the room and a list of the amenities, from extra pillows to rain showers, and that’s about it to describe a hotel room for most hotels.

                        With hotel room description writing samples like this, you won’t increase your sales

                    </p>
                    <p class="read_more " href="Javascript:void(0)">Soon new information!</p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="about_img">
                    <figure><img src="{{asset('assets/images/about.png')}}" alt="#"/></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->
@endsection
