<!doctype html>
<html lang="english">
@include('Frontend.layouts.header')

<body>

    <div class="preloader">
        <div class="content">
            <div class="box"></div>
        </div>
    </div>
    @yield('content')

    @include('Frontend.layouts.footer')

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
$(function(){
    $(document).on('click','#apply_coupon_btn',function(){
       var apply_coupon = $('#apply_coupon').val();
       $('#apply_coupon_code').val(apply_coupon);
       $('#apply_coupon_form').submit();
       // alert('ok');
    })
})
</script>


@yield('javascript')
</body>
</html>
