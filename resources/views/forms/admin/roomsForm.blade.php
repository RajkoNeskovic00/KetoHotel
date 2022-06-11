
<div class="form-group col-lg-6 ">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" >
</div>
<div class="form-group col-lg-6">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="desc" name="desc">
</div>
<div class="form-group col-lg-6">
    <label for="exampleInputEmail1">Category</label>
    <select id="cat" name="cat" class="form-select form-control" aria-label="Default select example">
        @foreach($cat as $c)
        <option value="{{$c->id_cat}}">{{$c->name}}</option>
        @endforeach
    </select>
{{--    <input type="text" class="form-control" id="cat" name="cat" >--}}
</div>
<div class="form-group col-lg-6">
    <label for="exampleInputEmail1">Price</label>
    <select id="cena" name="cena" class="form-select form-control" aria-label="Default select example">
        @foreach($price as $c)
            <option value="{{$c->id_cena}}">{{$c->Price}} $</option>
        @endforeach
    </select>
{{--    <input type="text" class="form-control" id="cena" name="cena"  >--}}
</div>
<div class="form-group col-lg-6">
    <label for="exampleInputEmail1">Discount</label>
    <select id="discount" name="discount" class="form-select form-control" aria-label="Default select example">
        @foreach($disc as $c)
            <option value="{{$c->id}}">{{$c->value}} %</option>
        @endforeach
    </select>
{{--    <input type="text" class="form-control" id="discount" name="discount"  >--}}
</div>
<div class="form-group col-lg-6">
    <label for="exampleInputEmail1">Mark</label>
    <select id="mark" name="mark" class="form-select form-control" aria-label="Default select example">
        @foreach($mark as $c)
            <option value="{{$c->id_mark}}">{{$c->value}} </option>
        @endforeach
    </select>
{{--    <input type="text" class="form-control" id="mark" name="mark"  >--}}
</div>


<div class="form-group col-lg-6" id="edith">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control" id="image" name="image">
</div>

