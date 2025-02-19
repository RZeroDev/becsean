@php
    use Illuminate\Support\Str;
@endphp

<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav inc-shape navbar-sticky navbar-default validnavs dark">

        <div class="container d-flex justify-content-between align-items-center">

            <div class="navbar-brand-left">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <img src="{{asset('storage/front/assets/img/logobecsean.jpg')}}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{asset('storage/front/assets/becsean.png')}}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp"
                    style="text-transform: none;">
                    <li class="">
                        <a href="{{route('index')}}" class="active">Accueil</a>
                    </li>
                    <li class="">
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('produits') }}" class="dropdown-toggle" data-toggle="dropdown">Produits</a>
                        <ul class="dropdown-menu">
                            @foreach(FrontHelper::allProductCategorie() as $productCategorie)
                                <li class="normal-case">
                                    <a href="{{ route('produits', $productCategorie) }}" style="text-transform: none !important;">{{ $productCategorie->name }}</a>
                                </li>
                            @endforeach


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('projects') }}" class="dropdown-toggle" data-toggle="dropdown">Projets</a>
                        <ul class="dropdown-menu" style="text-transform: none;">
                            @foreach(FrontHelper::allProjectCategorie() as $projectCategorie)
                                <li><a
                                        href="{{ route('projects', $projectCategorie->id) }}" style="text-transform: none !important;">{{ $projectCategorie->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('news') }}" class="dropdown-toggle" data-toggle="dropdown">Actualités</a>
                        <ul class="dropdown-menu" style="text-transform: none;">
                            @foreach(FrontHelper::allActualitiegorie() as $actualitiegorie)
                                <li><a href="{{ route('news', $actualitiegorie->id) }}" style="text-transform: none !important;">{{ $actualitiegorie->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="">
                        <a href="{{ route('about') }}">A-propos</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="attr-right">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="button"><a href="{{route('contact')}}">Nous contacter</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>

            <!-- Main Nav -->
        </div>
        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->

    </nav>
    <!-- End Navigation -->
</header>