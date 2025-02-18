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
