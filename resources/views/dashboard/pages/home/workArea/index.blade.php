@extends('dashboard.layouts.master')
@section('title', 'Processus de travail')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Processus de travail</h5>

                    <ul class="tracking-[0.5px] inline-block mt-2">
                        {{ Breadcrumbs::render('workAreas.index') }}
                    </ul>
                </div>
            </div>
            @include('dashboard.layouts.partials.alert')
            <div class="grid grid-cols-1 mt-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-300">Liste </h2>
                    {{-- <input type="text" class="border border-gray-200 dark:border-gray-700 px-3 py-1 rounded-md"
                        placeholder="Rechercher..."> --}}
                </div>
                <div
                    class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                    <table class="w-full text-start">
                        <thead class="text-base">
                            <tr>
                                <th class="text-start p-4 min-w-[128px]">Numéro</th>
                                <th class="text-start p-4 min-w-[250px]">Titre</th>
                                <th class="text-center p-4 min-w-[200px]">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($workAreas as $index=>$workArea)
                                <tr>
                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                        #{{ $workArea->number }}</td>
                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                        <span class="text-slate-400">{{ $workArea->title }}</span>
                                    </td>
                                    <td class="text-end border-t border-gray-100 dark:border-gray-800 p-4">
                                        <div class="flex items-center justify-end space-x-4">
                                            <a href="{{ route('workAreas.show', $workArea) }}"
                                                class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">
                                                <i class="fi fi-rr-eye"></i>
                                            </a>
                    
                                            <a href="{{ route('workAreas.edit', $workArea) }}"
                                                class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md">
                                                <i class="fi fi-rr-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                        <span aria-colspan="3" class="text-slate-400">Aucun workArea enregistré</span>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div><!--end container-->

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
