@extends('layouts.layoutFront')

@section('title') Blogs | Keto @endsection
@section('key')Keto, hotels, blog, post, booking @endsection
@section('description') keto hotel is a hotel located in the United Arab Emirates on the coast.is one of the most luxurious hotels with the best offer for holidays and vacations @endsection

@section('sliderContent')
    <p class="naslov" >Keto -> <spna class="naslov2">Blogs</spna></p>
@endsection



@section('content')
<!-- end header -->
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Blogs</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog -->
<div  class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">

                    <p class="margin_0">News blogs of hotel Keto in Dubai </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $b)
              @include('parials.blog',["blog"=>$b])
            @endforeach
        </div>
    </div>
</div>
<!-- end blog -->

@endsection
