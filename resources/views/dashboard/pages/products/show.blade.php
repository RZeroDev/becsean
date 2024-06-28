@extends('dashboard.layouts.master')
@section('title', 'Détails de produit')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <h5 class="text-lg font-semibold">Détails du produit : {{ $product->title }}</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    {{ Breadcrumbs::render('products.show', $product->title) }}
                </ul>
            </div>

            <div class="p-6 rounded-md mt-6 shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="grid md:grid-cols-12 grid-cols-1 gap-6 items-center">
                    <div class="xl:col-span-4 lg:col-span-5 md:col-span-6">
                        <div class="tiny-single-item">
                            <div class="tiny-slide">
                                <img src="{{ asset(FrontHelper::getEnvFolder() . $product->main_image) }}"
                                    class="rounded-md shadow dark:shadow-gray-700" alt="">
                            </div><!--end content-->
                            @if ($product->images)
                                @foreach ($product->images as $image)
                                    <div class="tiny-slide">
                                        <img src="{{ asset($image->url) }}" class="rounded-md shadow dark:shadow-gray-700"
                                            alt="">
                                    </div><!--end content-->
                                @endforeach
                            @endif

                        </div><!--end tiny slider-->
                    </div><!--end col-->

                    <div class="xl:col-span-8 lg:col-span-7 md:col-span-6">
                        <div class="lg:ms-6">
                            <h5 class="text-2xl font-semibold">{{ $product->title }}</h5>


                            <div class="mt-4">
                                <h5 class="text-lg font-semibold">Description :</h5>
                                <p class="text-slate-400 mt-2" style="text-align: justify;">
                                    {!! $product->description !!}
                                </p>


                            </div>



                            <div class="mt-4 flex items-center space-x-4">
                                <a href="{{ route('products.edit', $product) }}"
                                    class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md me-2 mt-2">Modifier</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST"
                                    onsubmit="return confirm('Voulez-vous vraiment effectuer cette action?');"
                                    class="align-middle">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md me-2 mt-2">Supprimer</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div><!--end grid-->
            </div>
          
        </div>
    </div><!--end container-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ClassicEditor
                .create(document.querySelector('#descriptio'))
                .then(editor => {})
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
