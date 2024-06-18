
        
    </div>


    <!--build:js-->
    <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/js/vendors/parallax.min.js') }}"></script>
    <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/js/vendors/aos.js') }}"></script>
    <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/js/vendors/massonry.min.js') }}"></script>
    <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/js/app.js') }}"></script>

    @yield('script')
    <!--endbuild-->
    @cookieconsentview
</body>


</html>