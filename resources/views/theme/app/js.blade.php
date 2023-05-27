<script src="{{ asset('assets-customer/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/scrollCue.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/appear.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/fancybox.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets-customer/js/subscribe-custom.js') }}"></script>
<script src="{{ asset('assets-customer/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets-customer/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(session()->has('success'))
    toastr.options = {
        "progressBar": true,
        "timeOut": 2000,
        "closeButton": true
    }
    toastr.success("{{ session()->get('success') }}");
    @endif
    @if(session()->has('info'))
    toastr.options = {
        "progressBar": true,
        "timeOut": 2000,
        "closeButton": true
    }
    toastr.info("{{ session()->get('info') }}");
    @endif
    @if(session()->has('error'))
    toastr.options = {
        "progressBar": true,
        "timeOut": 2000,
        "closeButton": true
    }
    toastr.error("{{ session()->get('error') }}");
    @endif
</script>
@yield('script')
