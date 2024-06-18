@extends('dashboard.layouts.master')
@section('title', 'Liste des partenaires')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Partenaires</h5>

                    <ul class="tracking-[0.5px] inline-block mt-2">
                        {{ Breadcrumbs::render('partners.index') }}
                    </ul>
                </div>

                <div>
                    @hasanyrole('super-admin|admin|dev')
                        <a href="{{ route('partners.create') }}"
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
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-300">Liste des partenaire</h2>
                    {{-- <input type="text" class="border border-gray-200 dark:border-gray-700 px-3 py-1 rounded-md"
                        placeholder="Rechercher..."> --}}
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
                                                    action="{{ route('partners.destroy', $partner->slug) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="#" onclick="deletePartner(event, {{ $partner->id }})"
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
                                        <span class="text-slate-400">Acun article enregistré</span>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $partners->links() }}
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div><!--end container-->
    <!-- End Modal -->
    <script>
        function deletePartner(event, partnerId) {
            event.preventDefault();

            if (confirm('Êtes-vous sûr de vouloir supprimer ce partenaire ?')) {
                document.getElementById('deleteForm' + partnerId).submit();
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchBar = document.querySelector('input[type="text"]');
            const rows = document.querySelectorAll('tbody tr');

            searchBar.addEventListener('keyup', function(e) {
                const term = e.target.value.toLowerCase();

                rows.forEach(row => {
                    const title = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                    const description = row.querySelector('td:nth-child(4)').textContent
                        .toLowerCase();
                    const status = row.querySelector('td:nth-child(5)').textContent.toLowerCase();

                    if (title.includes(term) || description.includes(term) || status.includes(
                            term)) {
                        row.style.display = 'table-row';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
        const handleChange = () => {
            const fileUploader = document.querySelector('#input-file');
            const getFile = fileUploader.files
            if (getFile.length !== 0) {
                const uploadedFile = getFile[0];
                readFile(uploadedFile);
            }
        }

        const readFile = (uploadedFile) => {
            if (uploadedFile) {
                const reader = new FileReader();
                reader.onload = () => {
                    const parent = document.querySelector('.preview-box');
                    parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
                };

                reader.readAsDataURL(uploadedFile);
            }
        };
    </script>
@endsection
