@extends('dashboard.layouts.master')
@section('title', 'Modification de mail')
@section('content')
<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <h5 class="text-lg font-semibold">Modification de mail</h5>

            <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                {{ Breadcrumbs::render('emails.edit', $email->name) }}
            </ul>
        </div>

        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
            <div class="lg:col-span-6">
                <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <h3 class="text-xl leading-normal font-semibold">Veuillez remplir tous les champs</h3>

                    <form method="post" class="myForm" action="{{ route('emails.update', $email) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-5">
                            <div class="lg:col-span-12">
                                <label class="form-label font-semibold">Email : <span class="text-red-600">*</span></label>
                                <input type="email" class="form-control @error('name') is-invalid @enderror" placeholder="Adresse Mail" name="name" required="" value="{{ old('name', $email->name) }}">
                                @error('name')
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