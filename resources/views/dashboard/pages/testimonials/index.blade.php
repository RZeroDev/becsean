@extends('dashboard.layouts.master')
@section('title', 'Liste des témoignages')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Témoignages</h5>

                    <ul class="tracking-[0.5px] inline-block mt-2">
                        {{ Breadcrumbs::render('testimonials.index') }}
                    </ul>
                </div>

                <div>
                    @hasanyrole('super-admin|admin|dev')
                        <a href="{{ route('testimonials.create') }}"
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
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-300">Liste des témoignages</h2>
                    {{-- <input type="text" class="border border-gray-200 dark:border-gray-700 px-3 py-1 rounded-md"
                        placeholder="Rechercher..."> --}}
                </div>
                <div
                    class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                    <table class="w-full text-start">
                        <thead class="text-base">
                            <tr>
                                <th class="text-start p-4 min-w-[50px]">N°.</th>
                                <th class="text-start p-4 min-w-[50px]">Photo</th>
                                <th class="text-start p-4 min-w-[192px]">Nom & Prénoms</th>
                                <th class="text-start p-4 min-w-[192px]">Poste</th>
                                <th class="text-start p-4 min-w-[50px]">Note</th>
                                {{-- <th class="text-center p-4 min-w-[100px]">Description</th> --}}
                                <th class="text-center p-4">Statut</th>
                                @hasanyrole('super-admin|admin|dev')
                                    <th class="text-center p-4 min-w-[200px]">Action</th>
                                @endhasanyrole
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($testimonials as $index=>$testimonial)
                                <tr>
                                    <th class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                        #{{ ++$index }}</th>
                                    <td class="text-start border-t border-gray-100 dark:border-gray-800 p-4">
                                        <a href="#" class="hover:text-indigo-600">
                                            <div class="flex items-center">
                                                <img src="{{ asset(FrontHelper::getEnvFolder() . $testimonial->image) }}"
                                                    class="h-10 w-10 rounded-full shadow dark:shadow-gray-700"
                                                    alt="">
                                            </div>
                                        </a>
                                    </td>
                                    <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                        <span class="text-slate-400">{{ $testimonial->fullname }}</span>
                                    </td>
                                    <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                        <span class="text-slate-400">{{ $testimonial->job }}</span>
                                    </td>
                                    <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                        <span class="text-slate-400">{{ $testimonial->rate }}</span>
                                    </td>
                                    {{-- <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                        <span class="text-slate-400">{!! substr($testimonial->description, 0, 10) . '...' !!}
                                        </span>
                                    </td> --}}
                                    <td class="text-center border-t border-gray-100 dark:border-gray-800 p-4">
                                        @if ($testimonial->status)
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
                                                @if ($testimonial->status)
                                                    <a href="{{ route('testimonials.status', $testimonial->slug) }}"
                                                        onclick="return confirm('Voulez-vous désactiver cet témoignage ?');"
                                                        class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-yellow-500 hover:bg-yellow-600 border-yellow-500 hover:border-yellow-600 text-white rounded-md">
                                                        <i class="fi fi-br-cross-small"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('testimonials.status', $testimonial->slug) }}"
                                                        onclick="return confirm('Voulez-vous activer cet témoignage ?');"
                                                        class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md">
                                                        <i class="fi fi-br-check-double"></i>
                                                    </a>
                                                @endif

                                                <a href="{{ route('testimonials.show', $testimonial->slug) }}"
                                                    class="py-2 px-5 inline-block align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">
                                                    <i class="fi fi-rr-eye"></i>
                                                </a>

                                                <a href="{{ route('testimonials.edit', $testimonial->slug) }}"
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
                                        <span class="text-slate-400">Aucun témoignage enregistré</span>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $testimonials->links() }}
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div><!--end container-->
    <!-- Start Modal -->
    <dialog id="addblog"
        class="rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white">
        <div class="relative h-auto md:w-[600px] w-300px">
            <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-700">
                <h3 class="font-bold text-lg">Ajouter un article</h3>
                <form method="dialog">
                    <button
                        class="size-6 flex justify-center items-center shadow dark:shadow-gray-800 rounded-md btn-ghost"><i
                            data-feather="x" class="size-4"></i></button>
                </form>
            </div>
            <div class="p-4">
                <div>
                    <p class="font-semibold mb-4">Téléverser l'image de l'article.</p>
                    <div
                        class="preview-box flex justify-center rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-gray-50 dark:bg-slate-800 text-slate-400 p-2 text-center small w-auto max-h-60">
                        Supports JPG, PNG. Max file size : 1MB.</div>
                    <input type="file" id="input-file" name="input-file" accept="image/*" onchange={handleChange()}
                        hidden>
                    <label
                        class="btn-upload py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-6 cursor-pointer"
                        for="input-file">Upload Image</label>
                </div>

                <form class="mt-4">
                    <div class="grid grid-cols-12 gap-3">
                        <div class="col-span-12">
                            <label class="font-semibold">Title du blog <span class="text-red-600">*</span></label>
                            <input name="titre" id="titre" type="text"
                                class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2"
                                placeholder="Title :">
                        </div><!--end col-->

                        <div class="col-span-12">
                            <label class="font-semibold"> Description : </label>
                            <textarea name="comments" id="comments"
                                class="form-input w-full py-2 px-3 h-24 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2"
                                placeholder="Description :"></textarea>
                        </div><!--end col-->

                        <div class="col-span-12">
                            <button type="submit"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Create
                                Blog</button>
                        </div><!--end col-->
                    </div>
                </form>
            </div>
        </div>
    </dialog>
    <!-- End Modal -->
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
    <script>
        function deleteConfirmation(event, id) {
            event.preventDefault();
            if (confirm('Êtes-vous sûr de vouloir supprimer cet témoignage ?')) {
                document.getElementById('deleteForm' + id).submit();
            }
        }
    </script>

@endsection
