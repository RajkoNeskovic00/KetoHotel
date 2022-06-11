<div class="col-md-4">
    <div class="blog_box">
        <div class="blog_img">
            <figure><img src="{{asset('assets/images/'.$blog->image)}}" alt="{{$blog->alt}}"/></figure>
        </div>
        <div class="blog_room">
            <h3>{{$blog->title}}</h3>
            <span>{{$blog->sub_title}}</span>
            <p>{{$blog->description}}</p>
            <br/>
            <small>Date: {{explode(" ",$blog->created_at)[0]}}</small>
        </div>
    </div>
</div>
