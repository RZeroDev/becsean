<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>{{ FrontHelper::getAppName() }} &bull; @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="Tailwind CSS Multipurpose Landing & Admin Dashboard Template">
        <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in/">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="2.2.0"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- favicon -->
    <link rel="shortcut icon"
        href="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/favicon-32x32.png') }}">
    <link href="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.css" rel="stylesheet">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Css -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link
        href="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/libs/jsvectormap/css/jsvectormap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/libs/tiny-slider/tiny-slider.css') }}"
        rel="stylesheet">
    <!-- Main Css -->
    <link href="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/libs/simplebar/simplebar.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/libs/%40iconscout/unicons/css/line.css') }}"
        type="text/css" rel="stylesheet">
    <link
        href="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/css/tailwind.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/ckeditor/style.css') }}">
    <script>
        window.addEventListener('load', function() {
            var preloader = document.getElementById('preloader');
            preloader.style.display = 'none';
        });
    </script>
    <style>
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #status .spinner {
            width: 40px;
            height: 40px;
            position: relative;
        }

        .double-bounce1,
        .double-bounce2 {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #333;
            opacity: 0.6;
            position: absolute;
            top: 0;
            left: 0;
            animation: bounce 2.0s infinite ease-in-out;
        }

        .double-bounce2 {
            animation-delay: -1.0s;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: scale(0.0)
            }

            50% {
                transform: scale(1.0)
            }
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            display: none;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 2rem;
        }
    </style>
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    <div class="overlay" id="overlay">
        Soumission en cours...
    </div>
    <!-- Loader Start -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader End -->
    

    <div class="page-wrapper toggled">
