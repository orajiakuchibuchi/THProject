<!doctype html>
<html lang="en">
<head>
    @include('landing.layouts.header')
</head>
<body>
    <div class="loading">Loading&#8230;</div>
    @yield('content')

    @include('landing.layouts.footer')
</body>
</html>