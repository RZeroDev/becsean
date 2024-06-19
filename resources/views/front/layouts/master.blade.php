@include('front.layouts.includes.start')

<!-- Start Preloader
    ============================================= -->
@include('front.layouts.includes.preloader')
<!-- End Preloader -->

<!-- Start Header Top
    ============================================= -->
@include('front.layouts.includes.start_header')
<!-- End Header Top -->

<!-- Header
    ============================================= -->
@include('front.layouts.includes.header')
<!-- End Header -->

@yield('content')

<!-- Start Footer
    ============================================= -->
@include('front.layouts.includes.footer')
<!-- End Footer -->
@include('front.layouts.includes.end')
