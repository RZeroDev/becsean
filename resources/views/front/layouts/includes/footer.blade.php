<footer class="bg-dark text-light" style="background-image: url({{ asset('storage/front/assets/img/shape/8.png')}});">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">

                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="footer-item about">
                        <img class="img-fluid" src="{{ asset('storage/front/assets/becsean.png')}}" width="" alt="Logo">
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-lg-2 col-md-6 item">
                    <div class="footer-item link">
                        <h4 class="widget-title">Lien rapides</h4>
                        <ul>
                            <li>
                                <a href="{{ route('index') }}" class="{{ Request::routeIs('index') ? 'active' : '' }}">Accueil</a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}" class="{{ Request::routeIs('services') ? 'active' : '' }}">Nos services</a>
                            </li>
                            <li>
                                <a href="{{ route('news') }}" class="{{ Request::routeIs('news') ? 'active' : '' }}">Actualités</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">A propos</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'active' : '' }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-lg-3 col-md-6 item">
                    <div class="footer-item recent-post">
                        <h4 class="widget-title">Articles récents</h4>
                        <ul>
                            @foreach (FrontHelper::allActuForFooter() as $item)
                                 <li>
                                <div class="thumb">
                                    <a href="{{ route('actuality.single', $item->slug) }}">
                                        <img src="{{ asset($item->image)}}" alt="Thumb">
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="meta-title">
                                        <span class="post-date">{{ $item->created_at->format('d M Y') }}</span>
                                    </div>
                                    <h5><a href="{{ route('actuality.single', $item->slug) }}">{{ Str::limit($item->title, 18, '...') }}</a></h5>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
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
                <!-- Single Item -->

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
        <img src="{{ asset('storage/front/assets/img/shape/7.png')}}" alt="Image Not Found">
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/{{ FrontHelper::getSettings()->company_whatsapp_number }}" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
</a>

<!-- CSS for Floating Button -->
<style>
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 40px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
}

.my-float {
    margin-top: 16px;
}

.footer-item .link ul li a.active {
    color: #25d366; /* Change this to your desired active color */
    font-weight: bold;
}
</style>

<!-- Font Awesome for WhatsApp Icon -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
