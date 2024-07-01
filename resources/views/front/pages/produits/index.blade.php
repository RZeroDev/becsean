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

                    <div class="col-lg-12 text-left">
                        <p>
                            @if($param)
                            {{ $productCategorie->name }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            @if($param)
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Tab Content -->
                    <div class="tab-content tab-content-info text-center" id="shop-tabContent">

                        <!-- Strt Product Grid Vies -->
                        <div class="tab-pane fade show active" id="grid-tab" role="tabpanel" aria-labelledby="grid-tab-control">
                            <ul class="vt-products columns-2">
                                @foreach (FrontHelper::allProductCat($productCategorie->id) as $product)
                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="product-image">
                                            <a href="{{ route('produit.single', $product->slug) }}">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . $product->main_image) }}" alt="Product">
                                            </a>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-title">
                                                <a href="{{ route('produit.single', $product->slug) }}">{{ $product->title }}</a>
                                            </h4>
                                                <a href="{{ route('produit.single', $product->slug) }}" class="cart-btn"> Voir plus</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Single product -->
                                    @endforeach


                                </ul>
                        </div>
                    </div>
                    <!-- End Tab Content -->
                    <!-- Pgination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <nav aria-label="navigation">
                                {{ FrontHelper::allProductCat($productCategorie->id)->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info text-center" id="shop-tabContent">

                            <!-- Strt Product Grid Vies -->
                            <div class="tab-pane fade show active" id="grid-tab" role="tabpanel" aria-labelledby="grid-tab-control">
                                <ul class="vt-products columns-4">
                                    @foreach (FrontHelper::allProduct() as $product)
                                    <!-- Single product -->
                                    <li class="product">
                                        <div class="product-contents">
                                                <div class="product-image">
                                                    <a href="{{ route('produit.single', $product->slug) }}">
                                                        <img src="{{ asset(FrontHelper::getEnvFolder() . $product->main_image) }}" alt="Product">
                                                    </a>
                                                </div>
                                                <div class="product-caption">
                                                    <h4 class="product-title">
                                                        <a href="{{ route('produit.single', $product->slug) }}">{{ $product->title }}</a>
                                                    </h4>
                                                    <a href="{{ route('produit.single', $product->slug) }}" class="cart-btn"> Voir plus</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Single product -->
                                    @endforeach


                                </ul>
                            </div>
                            <!-- End Product Grid Vies -->

                            <!-- Start Product List Vies -->
                            {{-- <div class="tab-pane fade" id="list-tab" role="tabpanel" aria-labelledby="list-tab-control">
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
                            </div> --}}
                            <!-- End Product List Vies -->


                        </div>
                        <!-- End Tab Content -->



                        <!-- Pgination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    {{ FrontHelper::allProduct()->links() }}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- End Shop -->

    @endsection
