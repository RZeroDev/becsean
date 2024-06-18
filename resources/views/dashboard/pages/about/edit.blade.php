@extends('dashboard.layouts.master')
@section('title', 'Page à propos')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Contenu de la page à propos</h5>

                    <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                        {{ Breadcrumbs::render('aboutPolitiques.edit', $aboutPolitique->id) }}
                    </ul>
                </div>
            </div>
            <br>
            @include('dashboard.layouts.partials.alert')
            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-12 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                        <h5 class="text-lg font-semibold">Remplissez tous les champs</h5>
                        <form class="myForm" action="{{ route('aboutPolitiques.update', $aboutPolitique) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Titre :</label>
                                        <div class="form-icon relative mt -2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="firstTitle" id="firstTitle" type="text" required
                                                value="{{ old('firstTitle', $aboutPolitique->firstTitle) }}"
                                                class="form-control @error('firstTitle') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder=" :">
                                        </div>
                                        @error('firstTitle')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Second titre:</label>
                                        <div class="form-icon relative mt -2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="secondTitle" id="secondTitle" type="text" required
                                                value="{{ old('secondTitle', $aboutPolitique->secondTitle) }}"
                                                class="form-control @error('secondTitle') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder=" :">
                                        </div>
                                        @error('secondTitle')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-12 mb-5">
                                    <div class="mb-5">
                                        <div class="text-start">
                                            <label for="contenu" class="font-semibold">Description 1:</label>
                                            <div class="form-icon relative mt-2">
                                                <textarea name="firstDescription" id="firstDescription"
                                                    class="form-input ps-11 w-full py-5 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                    placeholder="Message :">{{ old('firstDescription', $aboutPolitique->firstDescription) }}</textarea>
                                            </div>
                                            @error('firstDescription')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-12 mb-5">
                                    <div class="mb-5">
                                        <div class="text-start">
                                            <label for="contenu" class="font-semibold">Description 2:</label>
                                            <div class="form-icon relative mt-2">
                                                <textarea name="secondDescription" id="contenu"
                                                    class="form-input ps-11 w-full py-5 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                    placeholder="Message :">{{ old('secondDescription', $aboutPolitique->secondDescription) }}</textarea>
                                            </div>
                                            @error('secondDescription')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            ClassicEditor
                .create(document.querySelector('#contenu'))
                .then(editor => {})
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
     <script>
        document.querySelector('.myForm').addEventListener('submit', function(event) {
            document.querySelector('.overlay').style.display = 'flex';
        });
    </script>
@endsection
