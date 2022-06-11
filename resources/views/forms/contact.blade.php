<form id="request" class="main_form" method="post" >
    @csrf
    <div class="row">
        <div class="col-md-12 ">
            <input class="contactus" id="name" placeholder="Name" type="text" name="name">
            <div class="nameEro text-danger"></div>
            @error('name')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-md-12">
            <input class="contactus" id="email" placeholder="Email" type="text" name="email">
            <div class="nameEm text-danger"></div>
            @error('email')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-md-12">
            <input class="contactus" placeholder="Phone Number" id="phone" type="text" name="phone">
            <div class="nameTel text-danger"></div>
            @error('phone')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-md-12">
            <textarea class="textarea" id="message" placeholder="Message" type="text" name="message">Message</textarea>
            @error('message')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-md-12">
            <input type="button" name="contact" id="contact" class="colorBut"  value="Sent">
        </div>
    </div>
</form>
<div class="error"></div>
<div class="res"></div>
