@extends('dashboard.layouts.master')
@section('title', 'Tableau de bord')
@section('content')

    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="flex justify-between items-center">
                <div>
                    <h5 class="text-xl font-bold">Salut, {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</h5>
                    <h6 class="text-slate-400 font-semibold">Content de vous revoir!</h6>
                </div>

                <!-- <div class="flex items-center">
                                        <div class="position-relative">
                                            <select class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                                <option value="Y" selected>Yearly</option>
                                                <option value="M">Monthly</option>
                                                <option value="W">Weekly</option>
                                                <option value="T">Today</option>
                                            </select>
                                        </div>

                                        <a href="#" class="ms-1">
                                            <span class="py-[7px] px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-md sm:inline-block hidden"><i class="uil uil-export"></i> Export</span>

                                            <span class="h-10 w-10 items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md border bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white sm:hidden inline-flex"><i class="uil uil-export"></i></span>
                                        </a>
                                    </div> -->
            </div>

            <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-5 flex items-center">
                        <span
                            class="flex justify-center items-center rounded-md size-14 min-w-[50px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                            <i data-feather="users" class="h-5 w-5"></i>
                        </span>

                        <span class="ms-4">
                            <span class="text-slate-400 font-semibold block">Partenaires</span>
                            <span class="flex items-center justify-between mt-1">
                                <span class="text-xl font-semibold"><span class="counter-value"
                                        data-target="{{ $nbrPartner }}">{{ $nbrPartner }}</span></span>
                                <!-- <span class="text-red-600 text-sm ms-1 font-semibold"><i class="uil uil-chart-down"></i> 0.5%</span> -->
                            </span>
                        </span>
                    </div>

                    <!-- <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                                            <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
                                        </div> -->
                </div><!--end-->
                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-5 flex items-center">
                        <span
                            class="flex justify-center items-center rounded-md size-14 min-w-[50px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                            <i data-feather="users" class="h-5 w-5"></i>
                        </span>

                        <span class="ms-4">
                            <span class="text-slate-400 font-semibold block">Partenaires</span>
                            <span class="flex items-center justify-between mt-1">
                                <span class="text-xl font-semibold"><span class="counter-value"
                                        data-target="{{ $nbrUser }}">{{ $nbrUser }}</span></span>
                                <!-- <span class="text-red-600 text-sm ms-1 font-semibold"><i class="uil uil-chart-down"></i> 0.5%</span> -->
                            </span>
                        </span>
                    </div>

                    <!-- <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                                            <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
                                        </div> -->
                </div><!--end-->
                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-5 flex items-center">
                        <span
                            class="flex justify-center items-center rounded-md size-14 min-w-[50px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                            <i data-feather="bookmark" class="h-5 w-5"></i>
                        </span>

                        <span class="ms-4">
                            <span class="text-slate-400 font-semibold block">Témoignages</span>
                            <span class="flex items-center justify-between mt-1">
                                <span class="text-xl font-semibold"><span class="counter-value"
                                        data-target="{{ $nbrTestimonial }}">{{ $nbrTestimonial }}</span></span>
                                <!-- <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 3.84%</span> -->
                            </span>
                        </span>
                    </div>

                    <!-- <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                                            <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
                                        </div> -->
                </div><!--end-->

                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-5 flex items-center">
                        <span
                            class="flex justify-center items-center rounded-md size-14 min-w-[50px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                            <i data-feather="activity" class="h-5 w-5"></i>
                        </span>

                        <span class="ms-4">
                            <span class="text-slate-400 font-semibold block">Actualitéss</span>
                            <span class="flex items-center justify-between mt-1">
                                <span class="text-xl font-semibold"><span class="counter-value"
                                        data-target="{{ $nbrActuality }}">{{ $nbrActuality }}</span></span>
                            </span>
                        </span>
                    </div>

                    <!-- <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                                            <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
                                        </div> -->
                </div><!--end-->

                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-5 flex items-center">
                        <span
                            class="flex justify-center items-center rounded-md size-14 min-w-[50px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                            <i data-feather="shopping-bag" class="h-5 w-5"></i>
                        </span>

                        <span class="ms-4">
                            <span class="text-slate-400 font-semibold block">Services</span>
                            <span class="flex items-center justify-between mt-1">
                                <span class="text-xl font-semibold"><span class="counter-value"
                                        data-target="{{ $nbrService }}">{{ $nbrService }}</span></span>
                            </span>
                        </span>
                    </div>

                </div><!--end-->

                <!-- <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                        <div class="p-5 flex items-center">
                                            <span class="flex justify-center items-center rounded-md size-14 min-w-[50px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                                                <i data-feather="dollar-sign" class="h-5 w-5"></i>
                                            </span>

                                            <span class="ms-3">
                                                <span class="text-slate-400 font-semibold block">Expenses</span>
                                                <span class="flex items-center justify-between mt-1">
                                                    <span class="text-xl font-semibold">$<span class="counter-value" data-target="24351">22135</span></span>
                                                    <span class="text-emerald-600 text-sm ms-1 font-semibold"><i class="uil uil-arrow-growth"></i> 1.6%</span>
                                                </span>
                                            </span>
                                        </div>

                                         <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
                                            <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 dark:text-white/70 hover:text-indigo-600 dark:hover:text-white after:bg-indigo-600 dark:after:bg-white duration-500">View data <i class="uil uil-arrow-right"></i></a>
                                        </div>
                                    </div>-->
            </div>

            <div class="grid lg:grid-cols-8 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 mt-6">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-300">Liste des partenaire</h2>
                            <a href="{{ route('partners.index') }}"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md "
                                type="button">
                                Voir Tout
                            </a>

                        </div>
                        <div
                            class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <table class="w-full text-start">
                                <thead class="text-base">
                                    <tr>
                                        <th class="text-start p-4 min-w-[128px]">N°.</th>
                                        <th class="text-start p-4 min-w-[128px]">Logo</th>
                                        <th class="text-start p-4 min-w-[192px]">Nom complet</th>
                                        @hasanyrole('super-admin|admin|dev')
                                            <th class="text-center p-4 min-w-[200px]">Action</th>
                                        @endhasanyrole
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($partners as $index=>$partner)
                                        <tr>
                                            <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                #{{ ++$index }}</th>
                                            <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                <a href="#" class="hover:text-indigo-600">
                                                    <div class="flex items-center">
                                                        <img src="{{ asset(FrontHelper::getEnvFolder() . $partner->logo) }}"
                                                            class="h-10 w-10 rounded-full shadow dark:shadow-gray-700"
                                                            alt="">
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $partner->name }}</span>
                                            </td>
                                            @hasanyrole('super-admin|admin|dev')
                                                <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
                                                    <div class="flex items-center space-x-4">
                                                        <a href="{{ route('partners.edit', $partner->slug) }}"
                                                            class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md">
                                                            <i class="fi fi-rr-edit"></i>
                                                        </a>
                                                        <form id="deleteForm{{ $partner->id }}"
                                                            action="{{ route('partners.destroy', $partner->slug) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="#"
                                                                onclick="deletePartner(event, {{ $partner->id }})"
                                                                class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md">
                                                                <i class="fi fi-rr-trash-xmark"></i>
                                                            </a>
                                                        </form>

                                                    </div>
                                                </td>
                                            @endhasanyrole
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">Aucun partenaire enregistré</span>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 mt-6">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-300">Liste des actualités</h2>
                            <a href="{{ route('actualities.index') }}"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md "
                                type="button">
                                Voir Tout
                            </a>
                        </div>
                        <div
                            class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <table class="w-full text-start">
                                <thead class="text-base">
                                    <tr>
                                        <th class="text-start p-4 min-w-[128px]">N°.</th>
                                        <th class="text-start p-4 min-w-[128px]">Image</th>
                                        <th class="text-start p-4 min-w-[192px]">Titre</th>
                                        {{-- <th class="text-center p-4 min-w-[200px]">Description</th> --}}
                                        <th class="text-center p-4">Statut</th>
                                        @hasanyrole('super-admin|admin|dev')
                                            <th class="text-center p-4 min-w-[200px]">Action</th>
                                        @endhasanyrole
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($actualities as $index=>$actuality)
                                        <tr>
                                            <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                #{{ ++$index }}</th>
                                            <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                <a href="#" class="hover:text-indigo-600">
                                                    <div class="flex items-center">
                                                        <img src="{{ asset(FrontHelper::getEnvFolder() . $actuality->image) }}"
                                                            class="h-10 w-10 rounded-full shadow dark:shadow-gray-700"
                                                            alt="">
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $actuality->title }}</span>
                                            </td>
                                            {{-- <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                        <span class="text-slate-400">{!! substr($actuality->description, 0, 20).'...' !!}
                                        </span>
                                    </td> --}}
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                @if ($actuality->status)
                                                    <span
                                                        class="bg-green-600/10 dark:bg-green-600/20 text-green-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Actif</span>
                                                @else
                                                    <span
                                                        class="bg-red-600/10 dark:bg-red-600/20 text-red-600 text-[12px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Inactif</span>
                                                @endif
                                            </td>
                                            @hasanyrole('super-admin|admin|dev')
                                                <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
                                                    <div class="flex items-center space-x-4">
                                                        @if ($actuality->status)
                                                            <a href="{{ route('actualities.status', $actuality->slug) }}"
                                                                onclick="return confirm('Voulez-vous désactiver cette actualité ?');"
                                                                class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-yellow-500 hover:bg-yellow-600 border-yellow-500 hover:border-yellow-600 text-white rounded-md">
                                                                <i class="fi fi-br-cross-small"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('actualities.status', $actuality->slug) }}"
                                                                onclick="return confirm('Voulez-vous activer cette actualité ?');"
                                                                class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md">
                                                                <i class="fi fi-br-check-double"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{ route('actualities.show', $actuality->slug) }}"
                                                            class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">
                                                            <i class="fi fi-rr-eye"></i>
                                                        </a>

                                                        <a href="{{ route('actualities.edit', $actuality->slug) }}"
                                                            class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md">
                                                            <i class="fi fi-rr-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            @endhasanyrole
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">Aucun article enregistré</span>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 mt-6">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-300">Liste des services</h2>
                            <a href="{{ route('services.index') }}"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md "
                                type="button">
                                Voir Tout
                            </a>
                            <!-- <input type="text" class="border border-gray-200 dark:border-gray-700 px-3 py-1 rounded-md"
                                                    placeholder="Rechercher..."> -->
                        </div>
                        <div
                            class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <table class="w-full text-start">
                                <thead class="text-base">
                                    <tr>
                                        <th class="text-start p-4 min-w-[128px]">N°.</th>
                                        <th class="text-start p-4 min-w-[128px]">Image</th>
                                        <th class="text-start p-4 min-w-[192px]">Libellé</th>
                                        @hasanyrole('super-admin|admin|dev')
                                            <th class="text-center p-4 min-w-[200px]">Action</th>
                                        @endhasanyrole
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($services as $index=>$service)
                                        <tr>
                                            <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                #{{ ++$index }}</th>
                                            <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                                <a href="#" class="hover:text-indigo-600">
                                                    <div class="flex items-center">
                                                        <img src="{{ asset(FrontHelper::getEnvFolder() . $service->main_image) }}"
                                                            class="h-10 w-10 rounded-full shadow dark:shadow-gray-700"
                                                            alt="">
                                                    </div>
                                                </a>
                                            </td>
                                            <td class=" border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">{{ $service->title }}</span>
                                            </td>
                                            @hasanyrole('super-admin|admin|dev')
                                                <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
                                                    <div class="flex items-center space-x-4">


                                                        <a href="{{ route('services.show', $service) }}"
                                                            class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">
                                                            <i class="fi fi-rr-eye"></i>
                                                        </a>

                                                        <a href="{{ route('services.edit', $service) }}"
                                                            class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md">
                                                            <i class="fi fi-rr-edit"></i>
                                                        </a>
                                                        <form action="{{ route('services.destroy', $service) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Voulez-vous vraiment effectuer cette action?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md"><i
                                                                    class="fi fi-rr-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            @endhasanyrole
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                                <span class="text-slate-400">Aucun service enregistré</span>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <!-- End Content -->
        </div>
    </div><!--end container-->

@endsection
