<!DOCTYPE html>
<html lang="en" data-bs-theme="light">


<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon"
    href="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/favicon-32x32.png') }}">    <!--title-->
    <title>{{ FrontHelper::getAppName() }} &bull; @yield('title')</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&amp;display=swap" rel="stylesheet">
    <!-- Font -->
    <script async src="https://www.google.com/recaptcha/api.js"></script>
    <!--build:css-->
    <link rel="stylesheet" href="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/css/main.css') }}">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/css/custom.css') }}">
    <!--custom css end-->

    
    @cookieconsentscripts
    @laravelPWA
    
</head>

<body>

    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/logo-color.png') }}" alt="logo" width="113" height="36" class="img-fluid preloader-icon" style="width: 250px;">
            <div class="loading-bar" style="width: 250px;"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper bg-soft-blue">