@extends('dashboard.layouts.master')
@section('title', 'Liste des numéros de téléphone')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Numéro de Téléphone</h5>

                    <ul class="tracking-[0.5px] inline-block mt-2">
                        {{ Breadcrumbs::render('phones.index') }}
                    </ul>
                </div>

                <div>
                    @hasanyrole('super-admin|admin|dev')
                        <a href="{{ route('phones.create') }}"
                            class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md "
                            type="button">
                            Ajouter
                        </a>
                    @endhasanyrole
                </div>
            </div>
            @include('dashboard.layouts.partials.alert')
            <div class="grid grid-cols-1 mt-6">
                <div class="flex items-center justify-between mb-4">
                    <!-- <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-300">Liste des numéros de téléphones</h2> -->
                    <!-- <input type="text" class="border border-gray-200 dark:border-gray-700 px-3 py-1 rounded-md"
                                        placeholder="Rechercher..."> -->
                </div>
                <div
                    class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                    <table class="w-full text-start">
                        <thead class="text-base">
                            <tr>
                                <th class="text-start p-4 min-w-[128px]">N°.</th>
                                <th class="text-start p-4 min-w-[192px]">Numéro</th>
                                @hasanyrole('super-admin|admin|dev')
                                    <th class="text-center p-4 min-w-[200px]">Action</th>
                                @endhasanyrole
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($phones as $index=>$phone)
                                <tr>
                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                        #{{ ++$index }}</th>
                                    <td class=" border-t border-gray-100 dark:border-gray-800 p-4">
                                        <span class="text-slate-400">{{ $phone->name }}</span>
                                    </td>
                                    @hasanyrole('super-admin|admin|dev')
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
                                            <div class="flex items-center space-x-4">

                                                <a href="{{ route('phones.edit', $phone) }}"
                                                    class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md">
                                                    <i class="fi fi-rr-edit"></i>
                                                </a>
                                                <form action="{{ route('phones.destroy', $phone) }}" method="POST"
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
                                        <span class="text-slate-400">Aucun numéro de téléphone enregistré</span>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $phones->links() }}
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div><!--end container-->

@endsection
