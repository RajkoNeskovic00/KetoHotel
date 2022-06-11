<!-- banner -->
<section class="banner_main">
    <div id="myCarousel" class="carousel slide banner" data-ride="carousel">

        <div class="carousel-inner">
            @foreach($slider as $s)
            <div class="carousel-item  @if($loop->index == 0) active @endif">
                <img class="first-slide" src="{{asset('assets/images/'.$s->image)}}" alt="{{$s->alt}}">
            </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="booking_ocline">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="book_room">
                        @yield('sliderContent')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
