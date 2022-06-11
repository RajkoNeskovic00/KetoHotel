<!DOCTYPE html>
<html lang="en">
@include('fixed.admin.head')

<body class="animsition">
 <div class="page-wrapper">
@include('fixed.admin.navigation')

@yield('content')

@include('fixed.admin.footer')
@include('fixed.admin.scripts')
 </div>
</body>
</html>
