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

                        <form class="mt-6 myForm" action="{{ route('settings.update',$setting->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Nom de l'entreprise:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="company_name" id="company_name" type="text" required
                                                value="{{ old('company_name',$setting->company_name) }}"
                                                class="form-control @error('company_name') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Nom de l'entreprise :">
                                        </div>
                                        @error('company_name')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Numéro de téléphone principale:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="company_phone" id="company_phone" type="text" required
                                                value="{{ old('company_phone',$setting->company_phone) }}"
                                                class="form-control @error('company_phone') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Numléro de téléphone principale:">
                                        </div>
                                        @error('company_phone')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Email de téléphone principale:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="company_email" id="company_email" type="email" required
                                                value="{{ old('company_email',$setting->company_email) }}"
                                                class="form-control @error('company_email') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Email de téléphone principale:">
                                        </div>
                                        @error('company_email')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Lien facebook de l'entreprise:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="company_facebook" id="company_facebook" type="text" 
                                                value="{{ old('company_facebook',$setting->company_facebook) }}"
                                                class="form-control @error('company_facebook') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Lien facebook de l'entreprise:">
                                        </div>
                                        @error('company_facebook')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Lien instagram de l'entreprise:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="company_instagram" id="company_instagram" type="text" 
                                                value="{{ old('company_instagram',$setting->company_instagram) }}"
                                                class="form-control @error('company_instagram') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Lien instagram de l'entreprise:">
                                        </div>
                                        @error('company_instagram')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Lien youtube de l'entreprise:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="company_youtube" id="company_youtube" type="text" 
                                                value="{{ old('company_youtube',$setting->company_youtube) }}"
                                                class="form-control @error('company_youtube') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Lien youtube de l'entreprise:">
                                        </div>
                                        @error('company_youtube')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Lien twitter de l'entreprise:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="company_twitter" id="company_twitter" type="text" 
                                                value="{{ old('company_twitter',$setting->company_twitter) }}"
                                                class="form-control @error('company_twitter') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Lien twitter de l'entreprise:">
                                        </div>
                                        @error('company_twitter')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Lien linkedin de l'entreprise:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="company_linkedin" id="company_linkedin" type="text" 
                                                value="{{ old('company_linkedin',$setting->company_linkedin) }}"
                                                class="form-control @error('company_linkedin') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Lien linkedin de l'entreprise:">
                                        </div>
                                        @error('company_linkedin')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Lien tiktok de l'entreprise:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="company_tiktok" id="company_tiktok" type="text" 
                                                value="{{ old('company_tiktok',$setting->company_tiktok) }}"
                                                class="form-control @error('company_tiktok') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Lien tiktok de l'entreprise:">
                                        </div>
                                        @error('company_tiktok')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Adress de l'entreprise:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="company_headquarters" id="company_headquarters" type="text" 
                                                value="{{ old('company_headquarters',$setting->company_headquarters) }}"
                                                class="form-control @error('company_headquarters') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Adress de l'entreprise:">
                                        </div>
                                        @error('company_headquarters')
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
