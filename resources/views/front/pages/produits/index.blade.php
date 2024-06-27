@extends('front.layouts.master')
@section('title', 'Acceuil')
@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    @include('front/layouts/includes/breadcrumb')
    <!-- End Breadcrumb -->

        <!-- Start Shop
    ============================================= -->
    <div class="validtheme-shop-area default-padding">
        <div class="container">
            <div class="shop-listing-contentes">

                <div class="row item-flex center">

                    <div class="col-lg-7">
                        <div class="content">
                            <!-- Tab Nav -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="grid-tab-control" data-bs-toggle="tab" data-bs-target="#grid-tab" type="button" role="tab" aria-controls="grid-tab" aria-selected="true">
                                        <i class="fas fa-th-large"></i>
                                    </button>

                                    <button class="nav-link" id="list-tab-control" data-bs-toggle="tab" data-bs-target="#list-tab" type="button" role="tab" aria-controls="list-tab" aria-selected="false">
                                        <i class="fas fa-th-list"></i>
                                    </button>
                                </div>
                            </nav>
                            <!-- End Tab Nav -->
                        </div>
                    </div>

                    <div class="col-lg-5 text-right">
                        <p>
                            Showing 1–10 of 47 results
                        </p>
                        <select name="cars" id="cars">
                            <option value="volvo">Short by latest</option>
                            <option value="saab">Short by Recent</option>
                            <option value="mercedes">Short by Popular</option>
                            <option value="audi">Short by Relevant</option>
                          </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Tab Content -->
                    <div class="tab-content tab-content-info text-center" id="shop-tabContent">

                        <!-- Strt Product Grid Vies -->
                        <div class="tab-pane fade show active" id="grid-tab" role="tabpanel" aria-labelledby="grid-tab-control">
                            <ul class="vt-products columns-4">

                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="product-image">
                                            <a href="{{ route('produit.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/products/1.png') }}" alt="Product">
                                            </a>
                                            <div class="shop-action">
                                                <ul>
                                                    <li class="cart">
                                                        <a href="#"><span>Add to cart</span></a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="#"><span>Add to wishlist</span></a>
                                                    </li>
                                                    <li class="quick-view">
                                                        <a href="#"><span>Quick view</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-tags">
                                                <a href="#">Crop</a>
                                                <a href="#">Organic</a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="{{ route('produit.single') }}">Strawberry</a>
                                            </h4>
                                            <div class="price">
                                                <span>$12.00</span>
                                            </div>
                                            <a href="#" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single product -->

                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="product-image">
                                            <span class="onsale">Sale!</span>
                                            <a href="{{ route('produit.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/products/2.png') }}" alt="Product">
                                            </a>
                                            <div class="shop-action">
                                                <ul>
                                                    <li class="cart">
                                                        <a href="#"><span>Add to cart</span></a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="#"><span>Add to wishlist</span></a>
                                                    </li>
                                                    <li class="quick-view">
                                                        <a href="#"><span>Quick view</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-tags">
                                                <a href="#">Vegetables</a>
                                                <a href="#">Winter</a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="{{ route('produit.single') }}">Organic Carrot</a>
                                            </h4>
                                            <div class="price">
                                                <span><del>$8.00</del></span>
                                                <span>$5.00</span>
                                            </div>
                                            <a href="#" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single product -->

                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="product-image">
                                            <a href="{{ route('produit.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/products/3.png') }}" alt="Product">
                                            </a>
                                            <div class="shop-action">
                                                <ul>
                                                    <li class="cart">
                                                        <a href="#"><span>Add to cart</span></a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="#"><span>Add to wishlist</span></a>
                                                    </li>
                                                    <li class="quick-view">
                                                        <a href="#"><span>Quick view</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-tags">
                                                <a href="#">Fruits</a>
                                                <a href="#">Juicy</a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="{{ route('produit.single') }}">Fresh Red Seedless</a>
                                            </h4>
                                            <div class="price">
                                                <span>$14.00</span>
                                            </div>
                                            <a href="#" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single product -->

                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="product-image">
                                            <a href="{{ route('produit.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/products/4.png') }}" alt="Product">
                                            </a>
                                            <div class="shop-action">
                                                <ul>
                                                    <li class="cart">
                                                        <a href="#"><span>Add to cart</span></a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="#"><span>Add to wishlist</span></a>
                                                    </li>
                                                    <li class="quick-view">
                                                        <a href="#"><span>Quick view</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-tags">
                                                <a href="#">Fruits</a>
                                                <a href="#">Juicy</a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="{{ route('produit.single') }}">Organic Sweet Corn</a>
                                            </h4>
                                            <div class="price">
                                                <span>$8.00</span>
                                            </div>
                                            <a href="#" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single product -->

                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="product-image">
                                            <a href="{{ route('produit.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/products/5.png') }}" alt="Product">
                                            </a>
                                            <div class="shop-action">
                                                <ul>
                                                    <li class="cart">
                                                        <a href="#"><span>Add to cart</span></a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="#"><span>Add to wishlist</span></a>
                                                    </li>
                                                    <li class="quick-view">
                                                        <a href="#"><span>Quick view</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-tags">
                                                <a href="#">Fish</a>
                                                <a href="#">Health</a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="{{ route('produit.single') }}">Fresh Fish</a>
                                            </h4>
                                            <div class="price">
                                                <span>$25.00</span>
                                            </div>
                                            <a href="#" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single product -->

                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="product-image">
                                            <a href="{{ route('produit.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/products/6.png') }}" alt="Product">
                                            </a>
                                            <div class="shop-action">
                                                <ul>
                                                    <li class="cart">
                                                        <a href="#"><span>Add to cart</span></a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="#"><span>Add to wishlist</span></a>
                                                    </li>
                                                    <li class="quick-view">
                                                        <a href="#"><span>Quick view</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-tags">
                                                <a href="#">Seasonal</a>
                                                <a href="#">Fruit</a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="{{ route('produit.single') }}">Fresh Bananah</a>
                                            </h4>
                                            <div class="price">
                                                <span><del>$18.00</del></span>
                                                <span>$13.00</span>
                                            </div>
                                            <a href="#" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single product -->

                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="product-image">
                                            <a href="{{ route('produit.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/products/7.png') }}" alt="Product">
                                            </a>
                                            <div class="shop-action">
                                                <ul>
                                                    <li class="cart">
                                                        <a href="#"><span>Add to cart</span></a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="#"><span>Add to wishlist</span></a>
                                                    </li>
                                                    <li class="quick-view">
                                                        <a href="#"><span>Quick view</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-tags">
                                                <a href="#">Seasonal</a>
                                                <a href="#">Vegetables</a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="{{ route('produit.single') }}">Organic Cucumber</a>
                                            </h4>
                                            <div class="price">
                                                <span>$3.00</span>
                                            </div>
                                            <a href="#" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single product -->

                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="product-image">
                                            <a href="{{ route('produit.single') }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/products/8.png') }}" alt="Product">
                                            </a>
                                            <div class="shop-action">
                                                <ul>
                                                    <li class="cart">
                                                        <a href="#"><span>Add to cart</span></a>
                                                    </li>
                                                    <li class="wishlist">
                                                        <a href="#"><span>Add to wishlist</span></a>
                                                    </li>
                                                    <li class="quick-view">
                                                        <a href="#"><span>Quick view</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-tags">
                                                <a href="#">Vegetables</a>
                                                <a href="#">Fruit</a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="{{ route('produit.single') }}">Green Avocado</a>
                                            </h4>
                                            <div class="price">
                                                <span>$6.00</span>
                                            </div>
                                            <a href="#" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single product -->

                            </ul>
                        </div>
                        <!-- End Product Grid Vies -->

                        <!-- Start Product List Vies -->
                        <div class="tab-pane fade" id="list-tab" role="tabpanel" aria-labelledby="list-tab-control">
                            <ul class="vt-products colums-2">

                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="row align-center">
                                            <div class="col-lg-5 col-md-5">
                                                <div class="product-image">
                                                    <a href="{{ route('produit.single') }}">
                                                        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/products/5.png') }}" alt="Product">
                                                    </a>
                                                    <div class="shop-action">
                                                        <ul>
                                                            <li class="cart">
                                                                <a href="#"><span>Add to cart</span></a>
                                                            </li>
                                                            <li class="wishlist">
                                                                <a href="#"><span>Add to wishlist</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-7">
                                                <div class="product-caption">
                                                    <div class="product-tags">
                                                        <a href="#">Fish</a>
                                                        <a href="#">Health</a>
                                                    </div>
                                                    <h4 class="product-title">
                                                        <a href="{{ route('produit.single') }}">Fresh organic Fish</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span>$26.00</span>
                                                    </div>
                                                    <a href="#" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single product -->

                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="row align-center">
                                            <div class="col-lg-5 col-md-5">
                                                <div class="product-image">
                                                    <a href="{{ route('produit.single') }}">
                                                        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/products/1.png') }}" alt="Product">
                                                    </a>
                                                    <div class="shop-action">
                                                        <ul>
                                                            <li class="cart">
                                                                <a href="#"><span>Add to cart</span></a>
                                                            </li>
                                                            <li class="wishlist">
                                                                <a href="#"><span>Add to wishlist</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-7">
                                                <div class="product-caption">
                                                    <div class="product-tags">
                                                        <a href="#">Crop</a>
                                                        <a href="#">Organic</a>
                                                    </div>
                                                    <h4 class="product-title">
                                                        <a href="{{ route('produit.single') }}">Strawberry</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span><del>$28.00</del></span>
                                                        <span>$17.00</span>
                                                    </div>
                                                    <a href="#" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single product -->

                            </ul>
                        </div>
                        <!-- End Product List Vies -->


                    </div>
                    <!-- End Tab Content -->



                    <!-- Pgination -->
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers">
                            <li><a class="previous page-numbers" href="#"><i class="fas fa-angle-left"></i></a></li>

                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop -->

    @endsection
