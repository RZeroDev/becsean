@extends('dashboard.layouts.master')
@section('title', 'Modification d\'un utilisateur')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Modification de l'utilisateur: {{$user->firstname.' '.$user->lastname}}</h5>
    
                    <ul class="tracking-[0.5px] inline-block mt-2">
                        {{ Breadcrumbs::render('users.edit', $user->email) }}
                    </ul>
                </div>
                <div class="dropdown d-inline-block float-end mb-4">
                    <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md dropdown-toggle no-hover" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{route('users.index')}}">Liste</a></li>
                        <li><a class="dropdown-item" href="{{route('users.create')}}">Ajouter</a></li>
                    </ul>
                </div>
            </div>
            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-12 md:col-span-6">

                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                        <h5 class="text-lg font-semibold">Remplissez tous les champs:</h5>

                        <form class="mt-6 myForm" action="{{ route('users.update', $user->email) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Nom de l'utilisateur:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                            <input name="nom" id="nom" type="text" required
                                                value="{{ old('nom',$user->firstname) }}"
                                                class="form-control @error('nom') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Nom de l'utilisateur :">
                                        </div>
                                        @error('nom')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Prénom de l'utilisateur:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                            <input name="prenom" id="prenom" type="text" required
                                                value="{{ old('prenom',$user->lastname) }}"
                                                class="form-control @error('prenom') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Prénom de l'utilisateur :">
                                        </div>
                                        @error('prenom')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Email de l'utilisateur:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                            <input name="email" id="email" type="text" required
                                                value="{{ old('email',$user->email) }}"
                                                class="form-control @error('email') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Email de l'utilisateur :">
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
                                        <label for="name" class="font-semibold">Téléphone de l'utilisateur:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="phone" class="size-4 absolute top-3 start-4"></i>
                                            <input name="phone" id="phone" type="text" required
                                                value="{{ old('phone',$user->phone) }}"
                                                class="form-control @error('phone') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Téléphone de l'utilisateur :">
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
                                        <label for="image" class="font-semibold">Photo de profil de l'utilisateur(Optionnel):</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="image" class="size-4 absolute top-3 start-4"></i>
                                            <input name="image" id="image" type="file" 
                                                class="form-control @error('image') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="image :">
                                            @error('image')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="image" class="font-semibold">Role de l'utilisateur:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="edit-3" class="size-4 absolute top-3 start-4"></i>
                                            <select name="role" id="role" required
                                            class="form-control @error('role') is-invalid @enderror ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                                            <option value="">Sélectionner le rôle</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}" {{ old('role', $user->roles->last()->name) == $role->name ? 'selected' : '' }}>
                                                    {{ $role->role }}
                                                </option>
                                            @endforeach
                                        </select>                                        
                                            @error('role')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
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
        document.querySelector('.myForm').addEventListener('submit', function(event) {
            document.querySelector('.overlay').style.display = 'flex';
        });
    </script>
@endsection
