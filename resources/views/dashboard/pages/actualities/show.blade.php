@extends('dashboard.layouts.master')
@section('title', 'Détails d\'une actualité')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Détail de l'actualité: {{ $actuality->title }}</h5>

                    <ul class="tracking-[0.5px] inline-block mt-2">
                        {{ Breadcrumbs::render('actualities.show', $actuality->slug) }}
                    </ul>
                </div>

                <div class="dropdown d-inline-block float-end mb-4">
                    <button
                        class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md dropdown-toggle no-hover"
                        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('actualities.index') }}">Liste</a></li>
                        @hasanyrole('super-admin|admin|dev')
                            <li><a class="dropdown-item" href="{{ route('actualities.edit', $actuality->slug) }}">Modifier</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('actualities.create') }}">Ajouter</a></li>
                            <li>
                                <form action="{{ route('actualities.destroy', $actuality->slug) }}" method="POST"
                                    id="deleteForm{{ $actuality->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <a class="dropdown-item" href="#"
                                        onclick="deleteConfirmation(event, {{ $actuality->id }})">Supprimer</a>
                                </form>
                            @endhasanyrole
                        </li>
                    </ul>
                </div>
            </div>
            <br>

            <br>
            <div class="flex justify-center mt-4">
                <div class="w-full md:w-3/4 lg:w-2/3">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <h2 class="text-lg font-semibold">{{ $actuality->title }}</h2>
                        <img src="{{ asset(FrontHelper::getEnvFolder() . $actuality->image) }}" class="rounded-md"
                            alt="">
                        <div class="mt-6">
                            {!! $actuality->description !!}
                        </div>
                        <div class="mt-6">
                            @if ($actuality->pdf)
                                <a name="" id="" class="btn btn-primary" href="{{ asset(FrontHelper::getEnvFolder() . $actuality->pdf) }}" role="button">Voir le pdf</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Content -->
        </div>
    </div><!--end container-->
    <script>
        function deleteConfirmation(event, id) {
            event.preventDefault();
            if (confirm('Êtes-vous sûr de vouloir supprimer cette actualité ?')) {
                document.getElementById('deleteForm' + id).submit();
            }
        }
    </script>

@endsection
