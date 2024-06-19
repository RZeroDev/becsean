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
                    <a class="navbar-brand" href="index.html">
                        <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/logo-mix.png')}}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{FrontHelper::getEnvFolder().asset('storage/front/assets/img/logo.png')}}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>
                
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="">
                        <a href="{{route('index')}}" class=" active" >Acceuil</a>
                    </li>
                    <li class="">
                        <a href="" class="" >Services</a>
                    </li>
                    <li class="">
                        <a href="project.html" class="" >Actualités</a>
                    </li>
                    <li class="">
                        <a href="#" class="" >A-propos</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="attr-right">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="button"><a href="#">Nous contactez</a></li>
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