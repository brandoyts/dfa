<!DOCTYPE html>
<html lang="en">
<head>
   @include('layouts.includes.head')
</head>
<body onload="brython()">
    @yield('content')
    @include('layouts.includes.footer')
</body>
</html>