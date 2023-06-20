<!DOCTYPE html>
<html lang="en">
@include('theme.admin.head')

<body>
    <div class="preloader">
    </div>
    @include('theme.admin.header')
    @yield('content')
    @include('theme.admin.sidebar')
    @include('theme.admin.footer')
    @include('theme.admin.js')
</body>

</html>
