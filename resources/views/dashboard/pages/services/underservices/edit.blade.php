@extends('dashboard.layouts.master')
@section('title', 'Modification d\un sous service')
@section('content')
<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Modification du sous service : {{ $underService->title }}</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                {{ Breadcrumbs::render('underServices.edit', $underService->title) }}
            </ul>
        </div>

        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
            <div class="lg:col-span-12">
                <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <h3 class="text-xl leading-normal font-semibold">Veuillez remplir tous les champs</h3>

                    <form method="post" class="myForm" action="{{ route('underServices.update', $underService) }}" enctype="multipart/form-data">
                    	@csrf
                    	@method('put')
                    	<input type="hidden" name="service" value="{{ $underService->service_id }}">
                        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-5">
                            <div class="lg:col-span-12">
                                <label class="form-label font-semibold">Libellé : <span class="text-red-600">*</span></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Libellé du sous service" name="title" required value="{{ old('title', $underService->title) }}">
                                @error('title')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="lg:col-span-12">
                                <label class="form-label font-semibold">Description : <span class="text-red-600">*</span></label>
                                <textarea class="form-input ps-11 w-full py-5 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 " placeholder="Veuillez décrire le service" id="description" name="description">{{ old('description')?? $underService->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="lg:col-span-12">
                                <button type="submit"
                                    class="py-1 px-3 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md" style="float: right;">
                                    Modifier
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