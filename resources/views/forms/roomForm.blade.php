
@php
    $perPage = [6, 12, 18];
    $sort=['Price-ASC','Price-DESC','name-ASC','name-DESC'];
@endphp
<div id="forma" class="col-md-12" >
    <div >
        <form method="GET" action="{{route("room")}}">
            <div class="form-row">
                <div class="col-md-4">
                    <input type="text"  value="{{ isset($qs["keyword"]) ? $qs["keyword"] : "" }}" placeholder="Search room"  class="form-control " name="keyword" id="">

                </div>
                <div class=" col-md-4 mt-4 contactus">
                    <select name="perPage"  id="inputState" class="contactus form-control">

                        @foreach($perPage as $p)
                            @if(isset($qs['perPage']) && $qs['perPage'] == $p)
                                <option selected value="{{ $p }}">{{ $p }}</option>
                            @else
                                <option value="{{ $p }}">{{ $p }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4 mt-4">
                    <select name="sortBy" id="inputState" class="form-control">

{{--                        <option>Price - High to low</option>--}}
{{--                        <option>Price - Low to High</option>--}}
{{--                        <option>Name - A to Z</option>--}}
{{--                        <option>Name - Z to A</option>--}}
                        @foreach($sort as $s)
                            @if(isset($qs["sortBy"]) && $qs["sortBy"] == $s)
                                <option selected value="{{ $s }}">{{ $s }}</option>
                            @else
                                <option value="{{ $s }}">{{ $s }}</option>
                            @endif
                        @endforeach

                    </select>
                </div>
                <div class="form-check form-check-inline">
                    @foreach($category as $c)
                    <input class="form-check-input" type="checkbox" {{ (isset($qs["category"]) && in_array($c->id_cat, $qs["category"])) ? "checked" : "" }} name="category[]" id="inlineCheckbox{{$c->id_cat}}" value="{{$c->id_cat}}"/>
                    <label class="form-check-label" for="inlineCheckbox{{$c->id_cat}}">{{$c->name}}</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    @endforeach
                </div>

                <input type="submit"  Value="Search" id="pretrazi" class="col-4 ml-5 btn btn-primary"/>
            </div>


        </form>
</div>
</div>

