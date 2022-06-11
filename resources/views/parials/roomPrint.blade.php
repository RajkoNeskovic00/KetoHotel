<div class="col-md-4 col-sm-6">
    <div id="serv_hover"  class="room">
        <div class="room_img">
            <figure><img src="{{asset('assets/images/'.$p->image)}}"  alt="{{$p->name}}"/></figure>
        </div>
        <div class="bed_room">
            <h3>{{$p->name}}</h3>
            <p>{{$p->description}}</p>
            <span class="span2">Price:  {{$p->Price}}$</span>
            <a href="{{route('room.show',["id"=>$p->id])}}"><span class="span">Details...</span></a>
        </div>
    </div>
</div>
