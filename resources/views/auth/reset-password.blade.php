{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('auth.master')
@section('title', 'Connexion')
@section('content')
    <!-- Start -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-indigo-600/[0.02]"></div>
        <div class="container-fluid relative">
            <div class="md:flex items-center">
                <div class="xl:w-[30%] lg:w-1/3 md:w-1/2">
                    <div
                        class="relative md:flex flex-col md:min-h-screen justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 md:px-10 py-10 px-4 z-1">
                        <div class="text-center">
                            <a href="{{ route('index') }}"><img
                                    src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/logo-color.png') }}"
                                    class="mx-auto" alt=""></a>
                        </div>
                        <div class="title-heading text-center md:my-auto my-20">
                            <form method="POST" action="{{ route('password.store') }}" class="text-start">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <input type="hidden" name="email" value="{{ $request->email }}">

                                <div class="grid grid-cols-2">
                                    <div class="mb-4">
                                        <label class="font-semibold" for="LoginEmail">Mot de passe:</label>
                                        <input id="LoginEmail" type="password" name="password"
                                            class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('email') border-red-500 @enderror"
                                            placeholder="Mot de passe:">
                                        @error('password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label class="font-semibold" for="LoginPassword">Confirmer le mot de passe:</label>
                                        <input id="LoginPassword" type="password" name="password_confirmation"
                                            class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 @error('password') border-red-500 @enderror"
                                            placeholder="Confirmer le mot de passe:">
                                        @error('password_confirmation')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="flex justify-between mb-4">
                                        <div class="flex items-center mb-0">
                                            <input
                                                class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2"
                                                type="checkbox" value="" id="RememberMe">
                                        </div>
                                        <p class="text-slate-400 mb-0"><a href="{{ route('password.request') }}"
                                                class="text-slate-400">Mot de passe oublié ?</a></p>
                                    </div> --}}
                                    <div class="mb-4">
                                        <input type="submit"
                                            class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full"
                                            value="Mettre à jour">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="text-center">
                            <p class="mb-0 text-slate-400">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Askano Tous droits réservés. Développé par <a target="_blank"
                                    href="https://twoftechnologies.fr/">
                                    <span class="text-warning">TwoF</span>
                                    <span class="text-info">Technologies</span>
                                </a>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="xl:w-[70%] lg:w-2/3 md:w-1/2 flex justify-center mx-6 md:my-auto my-20">
                    <div>
                        <div class="relative">
                            <div class="absolute top-20 start-20 bg-indigo-600/[0.02] size-[1200px] rounded-full"></div>
                            <div class="absolute bottom-20 -end-20 bg-indigo-600/[0.02] size-[600px] rounded-full"></div>
                        </div>

                        <div class="text-center">
                            <div>
                                <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/dashboard/assets/images/contact.svg') }}"
                                    class="max-w-xl mx-auto" alt="">
                                <div class="relative max-w-xl mx-auto text-start">
                                    <div
                                        class="relative p-8 border-2 border-indigo-600 rounded-[30px] before:content-[''] before:absolute before:w-28 before:border-[6px] before:border-white dark:before:border-slate-900 before:-bottom-1 before:start-16 before:z-2 after:content-[''] after:absolute after:border-2 after:border-indigo-600 after:rounded-none after:rounded-e-[50px] after:w-20 after:h-20 after:-bottom-[80px] after:start-[60px] after:z-3 after:border-s-0 after:border-b-0">
                                        <span class="font-semibold leading-normal">
                                            Une agence de communication digitale créative et dynamique,
                                            dédiée à propulser votre présence en ligne vers de nouveaux sommets.
                                        </span>

                                        <div
                                            class="absolute text-8xl -top-0 start-4 text-indigo-600/10 dark:text-indigo-600/20 -z-1">
                                            <i class="mdi mdi-format-quote-open"></i>
                                        </div>
                                    </div>

                                    <div class="text-lg font-semibold mt-6 ms-44">
                                        - Askano
                                    </div>
                                </div>
                                <!-- <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section -->
    <!-- End -->

@endsection
