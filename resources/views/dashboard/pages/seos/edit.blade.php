@extends('dashboard.layouts.master')
@section('title', 'Reférencement SEO')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
               <div>
                <h5 class="text-lg font-semibold">Reférencement SEO sur la page {{ $seo->page }}</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    {{ Breadcrumbs::render('seos.edit', $seo->id) }}
                </ul>
               </div>
                <div class="dropdown d-inline-block float-end mb-4">
                    <button
                        class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md dropdown-toggle no-hover"
                        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('seos.show', $seo) }}">Voir</a></li>
                        <li><a class="dropdown-item" href="{{ route('seos.index') }}">Liste</a></li>
                    </ul>
                </div>
            </div>
            <br>

            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-12 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                        <h5 class="text-lg font-semibold"></h5>
                        <form id="" class="myForm" action="{{ route('seos.update', $seo) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-12 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Titre de la page:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="page" id="page" type="text" required
                                                value="{{ old('page', $seo->page) }}" readonly
                                                class="form-control @error('page') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder=" :">
                                        </div>
                                        @error('page')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-12 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Mots-clés:</label>
                                        <div class="form-icon relative mt-2">
                                            <textarea name="keywords" id="key" type="text" rows="5"
                                                class="form-control @error('keywords') is-invalid @enderror "
                                                placeholder="Mots-clés de la page">{{ old('keywords', $seo->keywords) }}</textarea>
                                        </div>
                                        @error('keywords')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-12 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Description:</label>
                                        <div class="form-icon relative mt-2">
                                            <textarea name="description" rows="5" id="contenu" type="text"
                                                class="form-control @error('description') is-invalid @enderror "
                                                placeholder="Description de la page"">{{ old('description', $seo->description) }}</textarea>
                                        </div>
                                        @error('description')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit"
                                class="py-1 px-3 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md float-right">
                                Mettre à jour
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div><!--end container-->
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            ClassicEditor
                .create(document.querySelector('#contenu'))
                .then(editor => {})
                .catch(error => {
                    console.error(error);
                });
        });
        document.addEventListener('DOMContentLoaded', function() {
            ClassicEditor
                .create(document.querySelector('#key'))
                .then(editor => {})
                .catch(error => {
                    console.error(error);
                });
        });
    </script> --}}
    <script>
        document.querySelector('.myForm').addEventListener('submit', function(event) {
            document.querySelector('.overlay').style.display = 'flex';
        });
    </script>
@endsection

