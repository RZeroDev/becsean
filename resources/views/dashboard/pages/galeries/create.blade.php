@extends('dashboard.layouts.master')
@section('title', 'Ajout de galerie')
@section('content')
<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Ajout de Galerie</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                {{ Breadcrumbs::render('galeries.create') }}
            </ul>
        </div>

        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
            <div class="lg:col-span-12">
                <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <h3 class="text-xl leading-normal font-semibold">Veuillez remplir tous les champs</h3>

                    <form method="post" class="myForm" action="{{ route('galeries.store') }}" enctype="multipart/form-data">
                    	@csrf
                        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-5">
                           

                           


                            <div class="lg:col-span-12">
                                <label class="form-label font-semibold">Images (Vous pouvez sélectionner plusieurs images) : <span class="text-red-600">*</span></label>
                                <input type="file" class="form-control @error('galerie') is-invalid @enderror" accept="image/*" name="galerie[]" multiple>
                                @error('galerie')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           
                            <div class="lg:col-span-12">
                                <button type="submit"
                                    class="py-1 px-3 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md" style="float: right;">
                                    Ajouter
                                </button>
                            </div>
                            
                            
                        </div>
                        
                    </form>
                    
                </div>

            </div><!--end col-->

            
        </div><!--end grid-->
        <!-- End Content -->
    </div>
</div><!--end container-->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#description'))
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