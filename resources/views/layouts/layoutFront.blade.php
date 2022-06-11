<!DOCTYPE html>
<html lang="en">
 @include('fixed.head')

 <body class="main-layout">
  @include('fixed.navigation')
  @include('fixed.slider')

  @yield('content')

  @include('fixed.footer')
  @include('fixed.scripts')

  @yield("scripts")
 </body>
</html>
