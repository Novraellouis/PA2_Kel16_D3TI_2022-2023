<!DOCTYPE html>
<html lang="en">
@include('theme.app.head')

<body>
    <div class="preloader">
    </div>
    @include('theme.app.header')
    @yield('content')
    @include('theme.app.footer')
    @include('theme.app.js')
</body>
<script>
    $(document).ready(function() {
        $('.search-input').on('keyup', function() {
            var keyword = $(this).val();

            $.ajax({
                url: "{{ route('menu.search') }}",
                method: 'GET',
                data: { keyword: keyword },
                success: function(response) {
                    $('.single-special-menu-content .row').html(response);
                }
            });
        });
    });
</script>

</html>
