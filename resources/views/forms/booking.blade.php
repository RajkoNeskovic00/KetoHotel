<h1>Book a Room Online</h1>
<form class="book_now" >
    @csrf
    <div class="row">
        <input type="hidden" name="id" id="id"  value="1">
        <input type="hidden" name="korID" id="korID"  value="{{auth()->check()?auth()->user()->id_korisnika : ""}}">
        <div class="col-md-6">
            <span>Full name: </span>
            <input class="online_book"  type="text" disabled id="nameFull"  name="nameFull" value="{{auth()->check()?auth()->user()->name." ".auth()->user()->last_name : ""}}">
        </div>
        <div class="col-md-6">
            <span>Email: </span>
            <input class="online_book"  type="text" disabled id="email" name="email" value="{{auth()->check()?auth()->user()->email : ""}}">
        </div>
        <div class="col-md-6">
            <span>Room name: </span>
            <input class="online_book"  type="text" disabled id="roomName" name="roomName" value="{{isset($dataForForm)?$dataForForm->name:""}}">
        </div>
        <div class="col-md-6">
            <span>Category: </span>
            <input class="online_book" id="category" disabled  value="{{isset($dataForForm)?$dataForForm->cat:""}}"  type="text" name="category">
        </div>
        <div class="col-md-6">
            <span>Arrival:</span>
            <input class="online_book" id="dateIn" placeholder="dd/mm/yyyy" type="date" name="dateIn">
        </div>
        <div class="col-md-6">
            <span>Departure:</span>
            <input class="online_book" id="dateOut" placeholder="dd/mm/yyyy" type="date" name="dateOut">
        </div>
        <div class="col-md-6">
            <span>Total price: </span>
            <input class="online_book" disabled id="cena"  type="text" value="{{isset($dataForForm)?$dataForForm->cena * ($dataForForm->popust/100) : ""}}" name="totalPrice">
        </div>
        <div id="message"></div>
        <div class="col-md-6">
            <button class="book_btn"  id="bookBtn" {{auth()->check()? :"disabled"}}>Book Now</button>
        </div>
    </div>
    <p class="errorRes "></p>
</form>
<span class="res text-success"></span>


