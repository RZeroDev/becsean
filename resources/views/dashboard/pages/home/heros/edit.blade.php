@extends('dashboard.layouts.master')
@section('title', 'Hero')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Contenu du Hero</h5>

                    <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                        {{ Breadcrumbs::render('heros.edit', $hero->id) }}
                    </ul>
                </div>
            </div>
            <br>
            @include('dashboard.layouts.partials.alert')
            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-12 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                        <h5 class="text-lg font-semibold">Remplissez tous les champs</h5>
                        <form id="" class="myForm" action="{{ route('heros.update', $hero) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-12 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Titre:</label>
                                        <div class="form-icon relative mt -2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="title" id="title" type="text" 
                                                value="{{ old('title', $hero->title) }}"
                                                class="form-control @error('title') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder=" :">
                                        </div>
                                        @error('title')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Text du boutton:</label>
                                        <div class="form-icon relative mt -2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="actionText" id="actionText" type="text" 
                                                value="{{ old('actionText', $hero->actionText) }}"
                                                class="form-control @error('actionText') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder=" :">
                                        </div>
                                        @error('actionText')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Lien du boutton:</label>
                                        <div class="form-icon relative mt -2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="actionUrl" id="actionUrl" type="text" 
                                                value="{{ old('actionUrl', $hero->actionUrl) }}"
                                                class="form-control @error('actionUrl') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder=" :">
                                        </div>
                                        @error('actionUrl')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Image du héro:</label>
                                        <div class="form-icon relative mt -2">
                                            <i data-feather="image" class="size-4 absolute top-3 start-4"></i>
                                            <input name="image" id="image" type="file"
                                                class="form-control @error('image') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder=" :">
                                        </div>
                                        @error('image')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Video du héro:</label>
                                        <div class="form-icon relative mt -2">
                                            <i data-feather="image" class="size-4 absolute top-3 start-4"></i>
                                            <input name="video" id="video" type="file"
                                                class="form-control @error('video') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder=" :">
                                        </div>
                                        @error('video')
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
                                            <textarea name="description" id="key" type="text" rows="5"
                                                class="form-control @error('description') is-invalid @enderror " placeholder="Mots-clés de la page">{{ old('description', $hero->description) }}</textarea>
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
    <script>
        document.querySelector('.myForm').addEventListener('submit', function(event) {
            document.querySelector('.overlay').style.display = 'flex';
        });
    </script>
@endsection
