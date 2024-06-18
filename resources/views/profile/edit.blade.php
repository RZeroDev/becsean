@extends('dashboard.layouts.master')
@section('title', 'Profil')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Profil</h5>

                    <ul class="tracking-[0.5px] inline-block mt-2">
                        {{ Breadcrumbs::render('profile.edit') }}
                    </ul>
                </div>
            </div>
            @include('dashboard.layouts.partials.alert')
            <br>
            <div class="">
                <div class="grid grid-cols-1">
                    <div
                        class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                        <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
                        <div class="relative shrink-0">
                            <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/images/blog/bg.jpg') }}"
                                class="h-80 w-full object-cover" id="profile-banner" alt="">
                            <div class="absolute inset-0 bg-black/70"></div>
                            <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-12 grid-cols-1">
                    <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 mx-6">
                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 -mt-48">
                            <div class="profile-pic text-center mb-5">
                                <div>
                                    <div class="relative size-24 mx-auto">
                                        <img src="{{ $user->avatar ? asset(FrontHelper::getEnvFolder() . $user->avatar) : asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/images/avatar.png') }}"
                                            class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800"
                                            id="profile-image" alt="">
                                        <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="text-lg font-semibold">{{ $user->firstname . ' ' . $user->lastname }}
                                        </h5>
                                        <p class="text-slate-400">{{ $user->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="xl:col-span-12 lg:col-span-12 md:col-span-12 mt-6">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-lg font-semibold mb-4">Information personelle :</h5>
                                <form enctype="multipart/form-data" method="post" action="{{ route('profile.update1', $user) }}" id="infoperso">
                                    @csrf
                                    @method('put')
                                    <div class="grid lg:grid-cols-12 lg:gap-6">
                                        <div class="lg:col-span-4 mb-5">
                                            <div class="text-start">
                                                <label for="name" class="font-semibold">Nom :</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                                    <input name="firstname" id="firstname" type="text" required
                                                        value="{{ old('firstname', $user->firstname) }}"
                                                        class="form-control @error('firstname') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                        placeholder="Nom  :">
                                                </div>
                                                @error('firstname')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="lg:col-span-4 mb-5">
                                            <div class="text-start">
                                                <label for="name" class="font-semibold">Prénom :</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                                    <input name="lastname" id="lastname" type="text" required
                                                        value="{{ old('lastname', $user->lastname) }}"
                                                        class="form-control @error('lastname') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                        placeholder="Prénom  :">
                                                </div>
                                                @error('lastname')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="lg:col-span-4 mb-5">
                                            <div class="text-start">
                                                <label for="name" class="font-semibold">Email :</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                                    <input name="email" id="email" type="text" required
                                                        value="{{ old('email', $user->email) }}"
                                                        class="form-control @error('email') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                        placeholder="Email  :">
                                                </div>
                                                @error('email')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="lg:col-span-6 mb-5">
                                            <div class="text-start">
                                                <label for="name" class="font-semibold">Téléphone :</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="phone" class="size-4 absolute top-3 start-4"></i>
                                                    <input name="phone" id="phone" type="text" required
                                                        value="{{ old('phone', $user->phone) }}"
                                                        class="form-control @error('phone') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                        placeholder="Téléphone  :">
                                                </div>
                                                @error('phone')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="lg:col-span-6 mb-5">
                                            <div class="text-start">
                                                <label for="image" class="font-semibold">Photo de profil
                                                    (Optionnel):</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="image" class="size-4 absolute top-3 start-4"></i>
                                                    <input name="avatar" id="avatar" type="file"
                                                        class="form-control @error('avatar') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                        placeholder="avatar :">
                                                    @error('avatar')
                                                        <span class="text-danger">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" id="submit"
                                        class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5"
                                        value="Mettre à jour">
                                </form><!--end form-->
                            </div>

                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <div class="grid lg:grid-cols-1 grid-cols-1 gap-10">
                                    <div>
                                        <h5 class="text-lg font-semibold mb-4">Sécurité :</h5>
                                        <form method="post" action="{{ route('password.update') }}" id="changepwd">
                                            @method('put')
                                            @csrf
                                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                                <div class="lg:col-span-4 mb-5">
                                                    <div>
                                                        <label class="form-label font-medium">Ancien mot de passe :</label>
                                                        <div class="form-icon relative mt-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-key size-4 absolute top-3 start-4">
                                                                <path
                                                                    d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                                                </path>
                                                            </svg>
                                                            <input type="password" name="current_password"
                                                                class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                                placeholder="Ancien mot de passe :" required="">
                                                        </div>
                                                        @error('current_password')
                                                            <span class="text-danger" style="color: red;" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div><!--end grid-->
                                                <div class="lg:col-span-4 mb-5">
                                                    <div>
                                                        <label class="form-label font-medium">Nouveau mot de passe
                                                            :</label>
                                                        <div class="form-icon relative mt-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-key size-4 absolute top-3 start-4">
                                                                <path
                                                                    d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                                                </path>
                                                            </svg>
                                                            <input type="password" name="password"
                                                                class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                                placeholder="Nouveau mot de passe :" required="">
                                                        </div>
                                                        @error('password')
                                                            <span class="text-danger" style="color: red;" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-4 mb-5">
                                                    <div>
                                                        <label class="form-label font-medium">Confirmer le mot de passe
                                                            :</label>
                                                        <div class="form-icon relative mt-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-key size-4 absolute top-3 start-4">
                                                                <path
                                                                    d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                                                </path>
                                                            </svg>
                                                            <input type="password" name="password_confirmation"
                                                                class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                                placeholder="Confirmer le mot de passe" required="">
                                                        </div>
                                                        @error('password')
                                                            <span class="text-danger" style="color: red;" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit"
                                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Mettre
                                                à jour
                                            </button>
                                        </form>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Content -->
            </div>
        </div>
    </div><!--end container-->
@endsection
