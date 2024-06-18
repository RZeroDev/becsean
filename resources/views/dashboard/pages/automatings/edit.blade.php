@extends('dashboard.layouts.master')
@section('title', 'Paramètres des réseaux sociaux')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <h5 class="text-lg font-semibold">Paramètres des réseaux sociaux</h5>

                <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                    {{ Breadcrumbs::render('automatings.index') }}
                </ul>
            </div>
            @include('dashboard.layouts.partials.alert')
            <form id="settings-form" class="myForm" action="{{ route('automatings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="valeur_champs" id="valeur_champs" value="">
                
                <!-- Informations LinkedIn -->
                <div class="grid grid-cols-12 px-6 py-6 gap-6">
                    <div class="col-span-12 sm:col-span-5 lg:col-span-4">
                        <h6 class="mb-1">Informations LinkedIn</h6>
                    </div>
                    <div class="col-span-12 sm:col-span-7 lg:col-span-8">
                        <div class="mb-3">
                            <label class="text-black">ID Client LinkedIn :</label>
                            <input name="linkedin_client_id" type="text"
                                value="{{ old('linkedin_client_id', $linkedinClientId) }}"
                                class="form-control  @error('linkedin_client_id') is-invalid @enderror input rounded-md h-11 w-full border border-gray6 text-black company-name-input"
                                placeholder="ID Client LinkedIn">
                            @error('linkedin_client_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="text-black">Secret Client LinkedIn :</label>
                            <input name="linkedin_client_secret" type="text"
                                value="{{ old('linkedin_client_secret', $linkedinClientSecret) }}"
                                class="form-control  @error('linkedin_client_secret') is-invalid @enderror input rounded-md h-11 w-full border border-gray6 text-black company-name-input"
                                placeholder="Secret Client LinkedIn">
                            @error('linkedin_client_secret')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="text-black">URL de rappel LinkedIn :</label>
                            <input name="linkedin_callback" type="text"
                                value="{{ old('linkedin_callback', $linkedinCallback) }}"
                                class="form-control @error('linkedin_callback') is-invalid @enderror input rounded-md h-11 w-full border border-gray6 text-black company-name-input"
                                placeholder="URL de rappel LinkedIn">
                            @error('linkedin_callback')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="text-black">Token d'accès LinkedIn :</label>
                            <input name="linkedin_access_token" type="text"
                                value="{{ old('linkedin_access_token', $linkedinAccessToken) }}"
                                class="form-control @error('linkedin_access_token') is-invalid @enderror input rounded-md h-11 w-full border border-gray6 text-black company-name-input"
                                placeholder="Token d'accès LinkedIn">
                            @error('linkedin_access_token')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <!-- Informations Twitter -->
                <div class="grid grid-cols-12 px-6 py-6 gap-6">
                    <div class="col-span-12 sm:col-span-5 lg:col-span-4">
                        <h6 class="mb-1">Informations Twitter</h6>
                    </div>
                    <div class="col-span-12 sm:col-span-7 lg:col-span-8">
                        <div class="mb-3">
                            <label class="text-black">Clé consommateur Twitter :</label>
                            <input name="twitter_consumer_key" type="text"
                                value="{{ old('twitter_consumer_key', $twitterConsumerKey) }}"
                                class="form-control @error('twitter_consumer_key') is-invalid @enderror input rounded-md h-11 w-full border border-gray6 text-black company-name-input"
                                placeholder="Clé consommateur Twitter">
                            @error('twitter_consumer_key')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="text-black">Secret consommateur Twitter :</label>
                            <input name="twitter_consumer_secret" type="text"
                                value="{{ old('twitter_consumer_secret', $twitterConsumerSecret) }}"
                                class="form-control @error('twitter_consumer_secret') is-invalid @enderror input rounded-md h-11 w-full border border-gray6 text-black company-name-input"
                                placeholder="Secret consommateur Twitter">
                            @error('twitter_consumer_secret')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="text-black">Token d'accès Twitter :</label>
                            <input name="twitter_access_token" type="text"
                                value="{{ old('twitter_access_token', $twitterAccessToken) }}"
                                class="form-control @error('twitter_access_token') is-invalid @enderror input rounded-md h-11 w-full border border-gray6 text-black company-name-input"
                                placeholder="Token d'accès Twitter">
                            @error('twitter_access_token')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="text-black">Secret du token d'accès Twitter :</label>
                            <input name="twitter_access_token_secret" type="text"
                                value="{{ old('twitter_access_token_secret', $twitterAccessTokenSecret) }}"
                                class="form-control @error('twitter_access_token_secret') is-invalid @enderror input rounded-md h-11 w-full border border-gray6 text-black company-name-input"
                                placeholder="Secret du token d'accès Twitter">
                            @error('twitter_access_token_secret')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <!-- Informations Facebook -->
                <div class="grid grid-cols-12 px-6 py-6 gap-6">
                    <div class="col-span-12 sm:col-span-5 lg:col-span-4">
                        <h6 class="mb-1">Informations Facebook</h6>
                    </div>
                    <div class="col-span-12 sm:col-span-7 lg:col-span-8">
                        <div class="mb-3">
                            <label class="text-black">Id de la page facebook :</label>
                            <input name="facebook_page_id" type="text"
                                value="{{ old('facebook_page_id', $facebookPageId) }}"
                                class="form-control @error('facebook_page_id') is-invalid @enderror input rounded-md h-11 w-full border border-gray6 text-black company-name-input"
                                placeholder="Id de la page facebook">
                            @error('facebook_page_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="text-black">Token d'accès facebook :</label>
                            <input name="facebook_access_token" type="text"
                                value="{{ old('facebook_access_token', $facebookAccessToken) }}"
                                class="form-control @error('facebook_access_token') is-invalid @enderror input rounded-md h-11 w-full border border-gray6 text-black company-name-input"
                                placeholder="Token d'accès facebook">
                            @error('facebook_access_token')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <!-- Bouton de soumission -->
                <button type="submit"
                class="py-1 px-3 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md float-right">
                Mettre à jour
            </button>
            </form>
            
            
            {{-- <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-12 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                        <form class="mt-6" action="{{ route('automatings.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="col-lg-12">
                                    <h5 class="text-lg font-semibold text-center lg:col-span-12">Informations LinkedIn :</h5>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">ID Client LinkedIn :</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="linkedin_client_id" id="linkedin_client_id" type="text" required
                                                value="{{ old('linkedin_client_id', $linkedinClientId) }}"
                                                class="form-control @error('linkedin_client_id') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Nom de l'entreprise :">
                                        </div>
                                        @error('linkedin_client_id')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Secret Client LinkedIn :</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="linkedin_client_secret" id="linkedin_client_secret" type="text"
                                                required value="{{ old('linkedin_client_secret', $linkedinClientSecret) }}"
                                                class="form-control @error('linkedin_client_secret') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Numléro de téléphone principale:">
                                        </div>
                                        @error('linkedin_client_secret')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">URL de rappel LinkedIn :</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="linkedin_callback" id="linkedin_callback" type="email" required
                                                value="{{ old('linkedin_callback', $linkedinCallback) }}"
                                                class="form-control @error('linkedin_callback') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="URL de rappel LinkedIn :">
                                        </div>
                                        @error('linkedin_callback')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Token d'accès LinkedIn :</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="linkedin_access_token" id="linkedin_access_token" type="text"
                                                value="{{ old('linkedin_access_token', $linkedinAccessToken) }}"
                                                class="form-control @error('linkedin_access_token') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Token d'accès LinkedIn :">
                                        </div>
                                        @error('linkedin_access_token')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h5 class="text-lg font-semibold text-center lg:col-span-12">Informations Twitter :</h5>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Clé consommateur Twitter :</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="twitter_consumer_key" id="twitter_consumer_key" type="text"
                                                value="{{ old('twitter_consumer_key', $twitterConsumerKey) }}"
                                                class="form-control @error('twitter_consumer_key') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Clé consommateur Twitter :">
                                        </div>
                                        @error('twitter_consumer_key')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Secret consommateur Twitter :</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="twitter_consumer_secret" id="twitter_consumer_secret"
                                                type="text"
                                                value="{{ old('twitter_consumer_secret', $twitterConsumerSecret) }}"
                                                class="form-control @error('twitter_consumer_secret') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Secret consommateur Twitter :">
                                        </div>
                                        @error('twitter_consumer_secret')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Token d'accès Twitter :</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="twitter_access_token" id="twitter_access_token" type="text"
                                                value="{{ old('twitter_access_token', $twitterAccessToken) }}"
                                                class="form-control @error('twitter_access_token') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Token d'accès Twitter :">
                                        </div>
                                        @error('twitter_access_token')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Secret du token d'accès Twitter
                                            :</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="twitter_access_token_secret" id="twitter_access_token_secret"
                                                type="text"
                                                value="{{ old('twitter_access_token_secret', $twitterAccessTokenSecret) }}"
                                                class="form-control @error('twitter_access_token_secret') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Secret du token d'accès Twitter :">
                                        </div>
                                        @error('twitter_access_token_secret')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h5 class="text-lg font-semibold text-center lg:col-span-12">Informations Facebook :</h5>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Id de la page facebook :</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="facebook_page_id" id="facebook_page_id" type="text"
                                                value="{{ old('facebook_page_id', $facebookPageId) }}"
                                                class="form-control @error('facebook_page_id') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Id de la page facebook :">
                                        </div>
                                        @error('facebook_page_id')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Token d'accès facebook :</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <input name="facebook_access_token" id="facebook_access_token" type="text"
                                                value="{{ old('facebook_access_token', $facebookAccessToken) }}"
                                                class="form-control @error('facebook_access_token') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Token d'accès facebook :">
                                        </div>
                                        @error('facebook_access_token')
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
            </div><!--end grid--> --}}
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
