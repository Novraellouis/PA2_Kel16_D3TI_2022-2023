<!DOCTYPE html>
<html lang="en">
@include('theme.auth.head')

<body>
    <div class="preloader">
        @yield('content')
    </div>
    @include('theme.auth.footer')
    @include('theme.auth.js')
</body>

</html>
