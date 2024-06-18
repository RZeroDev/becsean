@extends('dashboard.layouts.master')
@section('title', 'Modification d\'un témoignage')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Modification d'un témoignage: {{ $testimonial->fullname }}</h5>

                    <ul class="tracking-[0.5px] inline-block mt-2">
                        {{ Breadcrumbs::render('testimonials.edit', $testimonial->slug) }}
                    </ul>
                </div>
                <div class="dropdown d-inline-block float-end mb-4">
                    <button
                        class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md dropdown-toggle no-hover"
                        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('testimonials.show', $testimonial->slug) }}">Voir</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('testimonials.index') }}">Liste</a></li>
                        <li><a class="dropdown-item" href="{{ route('testimonials.create') }}">Ajouter</a></li>
                        <li>
                            <form action="{{ route('testimonials.destroy', $testimonial->slug) }}" method="POST"
                                id="deleteForm{{ $testimonial->id }}">
                                @csrf
                                @method('DELETE')
                                <a class="dropdown-item" href="#"
                                    onclick="deleteConfirmation(event, {{ $testimonial->id }})">Supprimer</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-12 md:col-span-6">

                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                        <h5 class="text-lg font-semibold">Remplissez tous les champs:</h5>

                        <form class="mt-6 myForm" action="{{ route('testimonials.update', $testimonial->slug) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Nom & Prénoms:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                            <input name="fullname" id="fullname" type="text" required
                                                value="{{ old('fullname', $testimonial->fullname) }}"
                                                class="form-control @error('fullname') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Nom & Prénoms :">
                                        </div>
                                        @error('fullname')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="image" class="font-semibold">Photo:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="image" class="size-4 absolute top-3 start-4"></i>
                                            <input name="photo" id="photo" type="file"
                                                class="form-control @error('photo') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Photo :">
                                            @error('photo')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Poste & fonction:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="poste" id="poste" type="text" required
                                                value="{{ old('poste', $testimonial->job) }}"
                                                class="form-control @error('poste') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Poste et fonction :">
                                        </div>
                                        @error('poste')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Note (Compris entre 1 et 5):</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="note" id="note" type="text" required
                                                value="{{ old('note', $testimonial->rate) }}"
                                                class="form-control @error('note') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Note:">
                                        </div>
                                        @error('note')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="text-start">
                                        <label for="contenu" class="font-semibold">Description du témoignage:</label>
                                        <div class="form-icon relative mt-2">
                                            <textarea name="description" id="description"
                                                class="form-input ps-11 w-full py-5 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Description du témoignage :">{{ old('description', $testimonial->description) }}</textarea>
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
                                Modifier
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
        function deleteConfirmation(event, id) {
            event.preventDefault();
            if (confirm('Êtes-vous sûr de vouloir supprimer cet témoignage ?')) {
                document.getElementById('deleteForm' + id).submit();
            }
        }
    </script>
    <script>
        document.querySelector('.myForm').addEventListener('submit', function(event) {
            document.querySelector('.overlay').style.display = 'flex';
        });
    </script>
@endsection
