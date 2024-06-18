<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/techwind/dashboard/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 16:34:19 GMT -->
<head>
        <meta charset="UTF-8">
        <title>{{ FrontHelper::getAppName() }} - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Tailwind CSS Multipurpose Landing & Admin Dashboard Template">
        <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in/">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="2.2.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/logo-color.png') }}">
        <link rel="stylesheet" href="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/css/custom.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- favicon -->
        <!-- Css -->
        <!-- Main Css -->
        <link href="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/libs/simplebar/simplebar.min.css')}}" rel="stylesheet">
        <link href="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/libs/%40iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet">
        <link href="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/libs/%40mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/css/tailwind.min.css')}}">

    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->


      @yield('content')

        <div class="fixed bottom-3 end-3">
            <a href="#" class="back-button size-9 inline-flex items-center justify-center tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full"><i data-feather="arrow-left" class="h-4 w-4"></i></a>
        </div>

        <!-- JAVASCRIPTS -->
        <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/js/plugins.init.js')}}"></script>
        <script src="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/js/app.js')}}"></script>
        <!-- JAVASCRIPTS -->
    </body>

<!-- Mirrored from shreethemes.in/techwind/dashboard/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 16:34:19 GMT -->
</html>