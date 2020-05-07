<!doctype html>
<html lang="en">

@include('partials/_head')

<body>

    @include('partials/_nav')
    
    @yield('welcome_page')
    @yield('contact')
    @yield('about')

    @include('partials/_footer')

    @include('partials/_javascript')
    
</body>
</html>