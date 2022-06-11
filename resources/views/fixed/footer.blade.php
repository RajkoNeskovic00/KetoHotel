<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class=" col-md-4">
                    <h3>Contact US</h3>
                    <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +014 234 499</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> keto.hotel.uae@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Menu Link</h3>
                    <ul class="link_menu">
                        @foreach($manu as $m)
                        <li @if(request()->routeIs($m->route))class="active" @endif><a href="{{route($m->route)}}">{{$m->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Social network</h3>

                    <ul class="social_icon">
                        <li><a href="https://www.facebook.com/hotelketo"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/TheDavronHotel/status/1145834275847192576"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/rajko-neskovic-2670a81ab/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/results?search_query=hotel+keto"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">

                        <p>
                            © 2022 - <small><a href="https://www.linkedin.com/in/rajko-neskovic-2670a81ab/">Rajko Nešković</a></small>

                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
