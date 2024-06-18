@extends('dashboard.layouts.master')
@section('title', 'details d\'un témoignage')
@section('content')
<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <div>
                <h5 class="text-lg font-semibold">Détail du témoignage de: {{$testimonial->name}}</h5>

                <ul class="tracking-[0.5px] inline-block mt-2">
                    {{ Breadcrumbs::render('testimonials.show',$testimonial->slug) }}
                </ul>
            </div>

            <div class="dropdown d-inline-block float-end mb-4">
                <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md dropdown-toggle no-hover" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('testimonials.edit',$testimonial->slug)}}">Modifier</a></li>
                    <li><a class="dropdown-item" href="{{route('testimonials.index')}}">Liste</a></li>
                    <li><a class="dropdown-item" href="{{route('testimonials.create')}}">Ajouter</a></li>
                    <li><form action="{{ route('testimonials.destroy', $testimonial->slug) }}" method="POST" id="deleteForm{{$testimonial->id}}">
                        @csrf
                        @method('DELETE')
                        <a class="dropdown-item" href="#" onclick="deleteConfirmation(event, {{$testimonial->id}})">Supprimer</a>
                    </form></li>
                </ul>
            </div>
        </div>
        <div class="flex justify-center mt-4">
            <div class="w-full md:w-3/4 lg:w-2/3">
                <div class="lg:col-span-10 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md p-2 text-center">{{$testimonial->fullname}}</h5>
                        <div class="text-center mt-6">
                            <img src="{{asset(FrontHelper::getEnvFolder(). $testimonial->image)}}" class="size-24 mx-auto rounded-full shadow mb-4" alt="">

                            <a href="#" class="text-lg font-semibold hover:text-indigo-600 duration-500">{{$testimonial->job}}</a>
                            <p class="text-slate-400">Note : {{$testimonial->rate}}</p>
                        </div>

                        <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md p-2 text-center mt-6">Description</h5>
                        <div class="flex items-center mt-6">
                            <p class="text-slate-400">{{ $testimonial->description }}</p>
                        </div>
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
            if (confirm('Êtes-vous sûr de vouloir supprimer cet témoignage ?')) {
                document.getElementById('deleteForm' + id).submit();
            }
        }

       
    </script>

@endsection
