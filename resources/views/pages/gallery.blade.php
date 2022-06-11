@extends('layouts.layoutFront')

@section('title') Galleries | Keto @endsection
@section('key')Keto, hotels,gallery, post, booking @endsection
@section('description') keto hotel is a hotel located in the United Arab Emirates on the coast.is one of the most luxurious hotels with the best offer for holidays and vacations @endsection

@section('sliderContent')
    <p class="naslov" >Keto -> <spna class="naslov2">Gallery</spna></p>
@endsection



@section('content')

<!-- end header -->
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>gallery</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- gallery -->
<div  class="gallery">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="gallery_img">
                    <figure><img src="{{asset('assets/images/gallery5.jpg')}}"

                                 alt="#"/></figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="gallery_img">
                    <figure><img src="{{asset('assets/images/gallery5.jpg')}}" alt="#"/></figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="gallery_img">
                    <figure><img src="{{asset('assets/images/gallery5.jpg')}}" alt="#"/></figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="gallery_img">
                    <figure><img src="{{asset('assets/images/gallery5.jpg')}}" alt="#"/></figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="gallery_img">
                    <figure><img src="{{asset('assets/images/gallery5.jpg')}}" alt="#"/></figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="gallery_img">
                    <figure><img src="{{asset('assets/images/gallery5.jpg')}}" alt="#"/></figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="gallery_img">
                    <figure><img src="{{asset('assets/images/gallery5.jpg')}}" alt="#"/></figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="gallery_img">
                    <figure><img src="{{asset('assets/images/gallery5.jpg')}}" alt="#"/></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end gallery -->
@endsection
