<footer class="bg-dark text-light" style="background-image: url({{ asset(FrontHelper::getEnvFolder().'storage/front/assets/img/shape/8.png')}});">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">

                <!-- Single Itme -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="footer-item about">
                        <img class="logo" src="{{ asset(FrontHelper::getEnvFolder().'storage/front/assets/img/logo-light.png')}}" alt="Logo">
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-2 col-md-6 item">
                    <div class="footer-item link">
                        <h4 class="widget-title">Lien utils</h4>
                        <ul>
                            <li>
                                <a href="{{ route('index') }}">Acceuil</a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">Nos services</a>
                            </li>
                            <li>
                                <a href="{{ route('news') }}">Actualités</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">A propos</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-3 col-md-6 item">
                    <div class="footer-item recent-post">
                        <h4 class="widget-title">Articles récents</h4>
                        <ul>
                            @foreach (FrontHelper::allActuForFooter() as $item)
                                 <li>
                                <div class="thumb">
                                    <a href="{{ route('actuality.single',$item->slug) }}">
                                        <img src="{{ asset($item->image)}}" alt="Thumb">
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="meta-title">
                                        <span class="post-date">{{ $item->created_at->format('d M Y') }}</span>
                                    </div>
                                    <h5><a href="{{ route('actuality.single',$item->slug) }}">{{ Str::limit($item->title, 18, '...') }} </a></h5>
                                </div>
                            </li>
                            @endforeach
                           
                        </ul>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-3 col-md-6 item">
                    <div class="footer-item contact">
                        <h4 class="widget-title">Contact</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="content">
                                    <strong>Address:</strong>
                                    {{ FrontHelper::getSettings()->company_headquarters }}
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <strong>Email:</strong>
                                    <a href="mailto:{{ FrontHelper::getSettings()->company_email }}">{{ FrontHelper::getSettings()->company_email }}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <strong>Phone:</strong>
                                    <a href="tel:{{ FrontHelper::getSettings()->company_phone }}">{{ FrontHelper::getSettings()->company_phone }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Single Itme -->

            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom text-center">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; Copyright 2024. Tout droits reservés <a href="mailto:hadicodemaster@gmail.com">Hadicodemaster@gmail.com</a></p>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </div>
    <div class="shape-right-bottom">
        <img src="{{ asset(FrontHelper::getEnvFolder().'storage/front/assets/img/shape/7.png')}}" alt="Image Not Found">
    </div>
</footer>
