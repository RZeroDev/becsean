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
                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/logobecsean.jpg')}}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/becsean.png')}}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="">
                        <a href="{{route('index')}}" class=" active" >Acceuil</a>
                    </li>
                    <li class="">
                        <a href="{{route('services')}}" class="" >Services</a>
                    </li>
                    {{-- <li class="">
                        <a href="{{route('produits')}}" class="" >Produits</a>
                    </li> --}}
                    <li class="dropdown">
                        <a href="{{ route('produits') }}" class="dropdown-toggle" data-toggle="dropdown" >Produits</a>
                        <ul class="dropdown-menu">
                            @foreach(FrontHelper::allProductCategorie() as $productCategorie)
                                <li><a href="{{ route('produits', $productCategorie) }}">{{ $productCategorie->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('projects') }}" class="dropdown-toggle" data-toggle="dropdown" >Projets</a>
                        <ul class="dropdown-menu">
                            @foreach(FrontHelper::allProjectCategorie() as $projectCategorie)
                                <li><a href="{{ route('projects', $projectCategorie->id) }}">{{ $projectCategorie->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    {{-- <li class="">
                        <a href="{{route('projects')}}" class="" >Projets</a>
                    </li> --}}
                    {{-- <li class="">
                        <a href="{{ route('news') }}" class="" >Actualités</a>
                    </li> --}}
                    <li class="dropdown">
                        <a href="{{ route('news') }}" class="dropdown-toggle" data-toggle="dropdown" >Actualités</a>
                        <ul class="dropdown-menu">
                            @foreach(FrontHelper::allActualitiegorie() as $actualitiegorie)
                                <li><a href="{{ route('news', $actualitiegorie->id) }}">{{ $actualitiegorie->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    {{-- <li class="">
                        <a href="{{ route('blogs') }}" class="" >Blogs</a>
                    </li> --}}
                    <li class="">
                        <a href="{{ route('about') }}" class="" >A-propos</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="attr-right">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="button"><a href="{{route('contact')}}">Nous contactez</a></li>
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
