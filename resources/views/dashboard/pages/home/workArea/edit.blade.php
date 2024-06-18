@extends('dashboard.layouts.master')
@section('title', 'Processus de travail')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Contenu du processus de travail</h5>

                    <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                        {{ Breadcrumbs::render('workAreas.edit', $workArea->id) }}
                    </ul>
                </div>
            </div>
            <br>
            @include('dashboard.layouts.partials.alert')
            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-12 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                        <h5 class="text-lg font-semibold">Remplissez tous les champs</h5>
                        <form id="" class="myForm" action="{{ route('workAreas.update', $workArea) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Titre :</label>
                                        <div class="form-icon relative mt -2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="title" id="title" type="text" 
                                                value="{{ old('title', $workArea->title) }}"
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
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Numéro:</label>
                                        <div class="form-icon relative mt -2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="number" id="number" type="number" 
                                                value="{{ old('number', $workArea->number) }}"
                                                class="form-control @error('number') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder=" :">
                                        </div>
                                        @error('number')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-12 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Description:</label>
                                        <div class="form-icon relative mt -2">
                                            <textarea name="description" rows="8" id="contenu" type="text"
                                            class="form-control @error('description') is-invalid @enderror "
                                            placeholder="Description">{{ old('description', $workArea->description) }}</textarea>
                                        </div>
                                        @error('actionText')
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
