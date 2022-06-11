@extends('layouts.layoutFront')

@section('title') Contact | Keto @endsection
@section('key')Keto, hotels, contact, booking @endsection
@section('description') keto hotel is a hotel located in the United Arab Emirates on the coast.is one of the most luxurious hotels with the best offer for holidays and vacations @endsection

@section('sliderContent')
    <p class="naslov" >Keto -> <spna class="naslov2">Contact</spna></p>
@endsection



@section('content')
<!-- end header -->
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  contact -->
@include('parials.success-message')
@include('parials.error-message')

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               @include('forms.contact');
            </div>
            <div class="col-md-6">
                <div class="map_main">
                    <div class="map-responsive">
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=Dubai&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:600px;}</style><a href="https://www.embedgooglemap.net">google maps embed code generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:600px;}</style></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->
@endsection
