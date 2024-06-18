@extends('dashboard.layouts.master')
@section('title', 'Paramètres')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <h5 class="text-lg font-semibold">Paramètres</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    {{ Breadcrumbs::render('settings.index') }}
                </ul>
            </div>
            @include('dashboard.layouts.partials.alert')
            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-12 md:col-span-6">

                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                        <h5 class="text-lg font-semibold">Remplissez les champs:</h5>

                        <form class="mt-6 myForm" action="{{ route('analytics',$setting->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-12 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Google Analytics:</label>
                                        <div class="form-icon relative mt-2">
                                           <textarea class="form-control" name="analytics" placeholder="Google Analytics:" id="" cols="30" rows="10">{{ old('analytics', $setting->analytics) }}</textarea>
                                        </div>
                                        @error('analytics')
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
        document.querySelector('.myForm').addEventListener('submit', function(event) {
            document.querySelector('.overlay').style.display = 'flex';
        });
    </script>
@endsection
