@extends('dashboard.layouts.master')
@section('title', 'Détails de service')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <h5 class="text-lg font-semibold">Détails du service : {{ $service->title }}</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    {{ Breadcrumbs::render('services.show', $service->title) }}
                </ul>
            </div>

            <div class="p-6 rounded-md mt-6 shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="grid md:grid-cols-12 grid-cols-1 gap-6 items-center">
                    <div class="xl:col-span-4 lg:col-span-5 md:col-span-6">
                        <div class="tiny-single-item">
                            <div class="tiny-slide">
                                <img src="{{ asset(FrontHelper::getEnvFolder() . $service->main_image) }}"
                                    class="rounded-md shadow dark:shadow-gray-700" alt="">
                            </div><!--end content-->
                            @if ($service->images)
                                @foreach ($service->images as $image)
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
                            <h5 class="text-2xl font-semibold">{{ $service->title }}</h5>


                            <div class="mt-4">
                                <h5 class="text-lg font-semibold">Description :</h5>
                                <p class="text-slate-400 mt-2" style="text-align: justify;">
                                    {!! $service->description !!}
                                </p>


                            </div>



                            <div class="mt-4 flex items-center space-x-4">
                                <a href="{{ route('services.edit', $service) }}"
                                    class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md me-2 mt-2">Modifier</a>
                                <form action="{{ route('services.destroy', $service) }}" method="POST"
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

            <h5 class="text-lg font-semibold mt-4">Sous services</h5>
            @include('dashboard.layouts.partials.alert')
            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6" id="underservices">
                <div class="lg:col-span-3 md:col-span-5">
                    <div class="sticky top-20">
                        <ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md"
                            id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-start text-base font-semibold rounded-md w-full hover:text-indigo-600 duration-500"
                                    id="description-tab" data-tabs-target="#description" type="button" role="tab"
                                    aria-controls="description" aria-selected="true">Liste</button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 duration-500"
                                    id="addinfo-tab" data-tabs-target="#addinfo" type="button" role="tab"
                                    aria-controls="addinfo" aria-selected="false">Ajouter</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-9 md:col-span-7">
                    <div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                        <div class="" id="description" role="tabpanel" aria-labelledby="profile-tab">
                            @forelse($service->underservices as $underService)
                                <div class="mb-8">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="{{ asset(FrontHelper::getEnvFolder() . $underService->image) }}"
                                                class="h-11 w-11 rounded-full shadow" alt="">

                                            <div class="ms-3 flex-1">
                                                <a href="#"
                                                    class="text-lg font-semibold hover:text-indigo-600 duration-500">{{ $underService->title }}</a>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-4">
                                            <a href="{{ route('underServices.edit', $underService) }}"
                                                class="text-slate-400 hover:text-indigo-600 duration-500 ms-5"><i
                                                    class="fi fi-rr-edit"></i> Modifier</a>
                                            <form action="{{ route('underServices.destroy', $underService) }}"
                                                method="POST"
                                                onsubmit="return confirm('Voulez-vous vraiment effectuer cette action?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-slate-400 hover:text-red-600 duration-500 ms-5"><i
                                                        class="fi fi-rr-trash"></i>Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div
                                        class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-700 mt-6">

                                        <p class="text-slate-400 italic">
                                            {!! $underService->description !!}
                                        </p>
                                    </div>
                                </div>
                            @empty
                                <small>Aucun sous service enregistré pour ce service</small>
                            @endforelse
                        </div>

                        <div class="hidden" id="addinfo" role="tabpanel" aria-labelledby="addinfo-tab">
                            <div class="lg:col-span-12">
                                <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                    <h3 class="text-xl leading-normal font-semibold">Veuillez remplir tous les champs</h3>

                                    <form method="post" action="{{ route('underServices.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="service" value="{{ $service->id }}">
                                        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-5">
                                            <div class="lg:col-span-6">
                                                <label class="form-label font-semibold">Libellé : <span
                                                        class="text-red-600">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Libellé du sous service" name="title" required=""
                                                    value="{{ old('title') }}">
                                                @error('title')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="lg:col-span-6">
                                                <label class="form-label font-semibold">Image : <span
                                                        class="text-red-600">*</span></label>
                                                <input type="file"
                                                    class="form-control @error('image') is-invalid @enderror"
                                                    accept="image/*" name="image" required="">
                                                @error('image')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <div class="lg:col-span-12">
                                                <label class="form-label font-semibold">Description : <span
                                                        class="text-red-600">*</span></label>
                                                <textarea
                                                    class="form-input ps-11 w-full py-5 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 "
                                                    placeholder="Veuillez décrire le service" id="descriptio" name="description">{{ old('description') }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="lg:col-span-12">
                                                <button type="submit"
                                                    class="py-1 px-3 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"
                                                    style="float: right;">
                                                    Ajouter
                                                </button>
                                            </div>


                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
            <!-- End Content -->
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
