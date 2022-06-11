<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body class="all">

<div class="main">

    <input type="checkbox" id="chk" aria-hidden="true">
    @if(auth()->check())
    <p class="text-danger">Hi, {{ auth()->user()->name }} you have registred, see more information!</p>
    @endif
    <div class="signup">
        <form method="post" action="{{route("registration")}}">
            @csrf
            <label for="chk" aria-hidden="true">Registation</label>
            <input type="text" name="name" placeholder="First name" >
            <input type="text" name="last_name" placeholder="Last name" >
            <input type="email" name="email" placeholder="Email" >
           <input type="hidden" name="id_uloga" value="2" >
            <input type="password" name="password" placeholder="Password" >

{{--            <input type="checkbox" name="newa" id="news">&nbsp;keep me informed of new events--}}

            <button @if(auth()->check()) disabled="disabled"  @endif  type="submit">Sign up</button>
            <small class="return"><a href="{{route('home')}}">Return to home page!</a></small>
        </form>
    </div>

    <div class="login">
        <form method="post" action="{{route('login')}}">
            @csrf
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button @if(auth()->check()) disabled="disabled"  @endif  type="submit">Login</button>
        </form>
        @if ($errors->has('message'))
            <span class="invalid-feedback">
                 <strong class="logGreska text-black-50">{{ $errors->first('message') }}</strong>
            </span>
        @endif


    </div>
</div>
</body>
</html>
