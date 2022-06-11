@if(session()->has('error'))
    <div class="container mt-4">
        <div class="alert alert-danger" role="alert">
            {{ session('error')}}
        </div>
    </div>
@endif

