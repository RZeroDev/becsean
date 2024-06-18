@extends('dashboard.layouts.master')
@section('title', 'Processus de travail')
@section('content')
<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="md:flex justify-between items-center">
            <div>
                <h5 class="text-lg font-semibold">Processus de travail: {{$workArea->title}}</h5>

                <ul class="tracking-[0.5px] inline-block mt-2">
                    {{ Breadcrumbs::render('workAreas.show',$workArea->id) }}
                </ul>
            </div>

            <div class="dropdown d-inline-block float-end mb-4">
                <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md dropdown-toggle no-hover" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('workAreas.index')}}">Liste</a></li>
                    <li><a class="dropdown-item" href="{{route('workAreas.edit',$workArea)}}">Modifier</a></li>
                </ul>
            </div>
        </div>
        <br>
        
        <br>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-5">
                            <h6 class="mb-0">Titre</h6>
                        </div>
                        <div class="col-md-7">
                            {{ $workArea->title }}
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-5">
                            <h6 class="mb-0">Numero</h6>
                        </div>
                        <div class="col-md-7">
                            {{ $workArea->number }}
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-5">
                            <h6 class="mb-0">Description</h6>
                        </div>
                        <div class="col-md-7">
                            {!! $workArea->description ?? '-' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- End Content -->
    </div>
</div><!--end container-->
   
@endsection
