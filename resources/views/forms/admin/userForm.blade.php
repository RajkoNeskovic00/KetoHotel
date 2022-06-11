<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" >
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lname">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" id="email" name="email" >
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" class="form-control" id="pass" name="pass"  >
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Role</label>
    <select id="role" name="role" class="form-select form-control" aria-label="Default select example">
    @foreach($role as $r)
            <option value="{{$r->id}}">{{$r->name}}</option>
    @endforeach
    </select>
</div>
