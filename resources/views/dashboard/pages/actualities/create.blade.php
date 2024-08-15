@extends('dashboard.layouts.master')
@section('title', 'Ajout d\'un article')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Ajout d'un article</h5>

                    <ul class="tracking-[0.5px] inline-block mt-2">
                        {{ Breadcrumbs::render('actualities.create') }}
                    </ul>
                </div>

                <div>
                    <a href="{{ route('actualities.index') }}"
                        class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md "
                        type="button">
                        Liste
                    </a>
                </div>
            </div>
            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-12 md:col-span-6">

                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                        <h5 class="text-lg font-semibold">Remplissez tous les champs:</h5>

                        <form  class="mt-6 myForm" action="{{ route('actualities.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Titre de l'article:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="titre" id="titre" type="text" required
                                                value="{{ old('titre') }}"
                                                class="form-control @error('titre') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Titre :">
                                        </div> 
                                        @error('titre')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5" id="image_input">
                                    <div class="text-start">
                                        <label for="image" class="font-semibold">Image de l'article:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="image" class="size-4 absolute top-3 start-4"></i>
                                            <input name="image" id="image" type="file"
                                                class="form-control @error('image') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Image :">
                                            @error('image')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-12">
                                <label class="form-label font-semibold">Catégorie : <span class="text-red-600">*</span></label>
                                <select class="form-control @error('cate') is-invalid @enderror "name="cate" required="">
                                       @foreach($categorie as $cat)
                                          <option value="{{$cat->id}}">{{$cat->name}}</option>
                                          @endforeach
                                       </select>
                                @error('cate')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="grid grid-cols-1 py-2">
                                <div class="mb-5">
                                    <div class="text-start">
                                        <label for="contenu" class="font-semibold">Contenu de l'article:</label>
                                        <div class="form-icon relative mt-2">
                                            <textarea name="contenu" id="contenu"
                                                class="form-input ps-11 w-full py-5 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Contenu :">{{ old('contenu') }}</textarea>
                                        </div>
                                        @error('contenu')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="py-1 px-3 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md float-right">
                                Ajouter
                            </button>
                        </form>

                    </div>
                </div>
            </div><!--end grid-->
            <!-- End Content -->
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
        document.addEventListener('DOMContentLoaded', function() {
            const photoRadio = document.getElementById('photo');
            const videoRadio = document.getElementById('video');
            const urlInput = document.getElementById('url_input');
            const imageInput = document.getElementById('image_input');

            urlInput.style.display = 'none';

            photoRadio.addEventListener('change', function() {
                urlInput.style.display = 'none';
                imageInput.style.display = 'block';
            });

            videoRadio.addEventListener('change', function() {
                urlInput.style.display = 'block';
                imageInput.style.display = 'none';
            });
        });
    </script>
    <script>
        document.getElementById('image_secondaire').addEventListener('change', function(event) {
            const input = event.target;
            const maxFiles = 6;

            if (input.files.length > maxFiles) {
                alert(`La limite de séléction est de ${maxFiles} fichier.`);
                input.value = '';
            }
        });
    </script>
    <script>
        document.querySelector('.myForm').addEventListener('submit', function(event) {
            document.querySelector('.overlay').style.display = 'flex';
        });
    </script>

@endsection
