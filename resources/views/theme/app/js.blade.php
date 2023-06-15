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
    @if (session('success'))
        toastr.options = {
            "progressBar": true,
            "timeOut": 2000,
            "closeButton": true
        }
        toastr.success("{{ session('success') }}");
    @endif
    @if (session()->has('info'))
        toastr.options = {
            "progressBar": true,
            "timeOut": 2000,
            "closeButton": true
        }
        toastr.info("{{ session()->get('info') }}");
    @endif
    @if (session()->has('error'))
        toastr.options = {
            "progressBar": true,
            "timeOut": 2000,
            "closeButton": true
        }
        toastr.error("{{ session()->get('error') }}");
    @endif
    // Function to calculate subtotal and update total price
    function calculateTotal() {
        var quantities = document.getElementsByClassName('quantity-input');
        var prices = document.getElementsByClassName('product-price');
        var totals = document.getElementsByClassName('product-total');
        var cartTotal = 0;

        for (var i = 0; i < quantities.length; i++) {
            var quantity = parseInt(quantities[i].value);
            var price = parseFloat(prices[i].innerText.replace(/[^0-9.-]+/g, "")); // Remove non-numeric characters

            var total = quantity * price;
            totals[i].innerText = formatCurrency(total);
            cartTotal += total;
        }

        var cartTotalElement = document.getElementById('cart-total');
        cartTotalElement.innerText = formatCurrency(cartTotal);
    }

    // Function to format currency with commas
    function formatCurrency(value) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        }).format(value);
    }

    // Add event listener to quantity input
    var quantityInputs = document.getElementsByClassName('quantity-input');
    for (var i = 0; i < quantityInputs.length; i++) {
        quantityInputs[i].addEventListener('change', calculateTotal);
    }

    // Initial calculation on page load
    calculateTotal();
</script>
@yield('script')
