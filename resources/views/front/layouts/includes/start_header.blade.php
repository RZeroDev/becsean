<div class="top-bar-area top-bar-style-one bg-dark text-light">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-8">
                <ul class="item-flex">
                    <li>
                        <i class="fas fa-clock"></i>Heures d'ouverture : Lundi- Samedi, 08:00 - 19:00
                    </li>
                    <li>
                        <a href="tel:{{ frontHelper::getSettings()->company_phone }}"><i class="fas fa-phone-alt"></i> {{ frontHelper::getSettings()->company_phone }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 text-end">
                <div class="social">
                    <ul>
                        <li>
                            <a href="{{frontHelper::getSettings()->company_facebook}}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{frontHelper::getSettings()->company_twitter}}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ frontHelper::getSettings()->company_youtube }}">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ frontHelper::getSettings()->company_instagram }}">
                                <i class="fab fa-instagram-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>