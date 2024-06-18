@extends('dashboard.layouts.master')
@section('title', 'Gestion des sections')
@section('content')
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <!-- Start Content -->
            <div class="md:flex justify-between items-center">
                <div>
                    <h5 class="text-lg font-semibold">Activation des sections</h5>

                    <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                        {{ Breadcrumbs::render('sectionStatus.edit', $sectionStatus->id) }}
                    </ul>
                </div>
            </div>
            <br>
            @include('dashboard.layouts.partials.alert')
            <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
                <div class="lg:col-span-12 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-6">
                        <h5 class="text-lg font-semibold mb-5">Remplissez tous les champs</h5>
                        <form id="" class="myForm" action="{{ route('sectionStatus.update', $sectionStatus) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Etat de la section service :</label>
                                        <div class="form-icon relative mt -2">
                                              <select class="form-control" name="service" id="">
                                                <option @if ($sectionStatus->service == true) selected @endif value="1">Activer</option>
                                                <option @if ($sectionStatus->service == false) selected @endif value="0">Désactiver</option>
                                              </select>
                                        </div>
                                        @error('service')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Etat de la section à propos :</label>
                                        <div class="form-icon relative mt -2">
                                              <select class="form-control" name="about" id="">
                                                <option @if ($sectionStatus->about == true) selected @endif value="1">Activer</option>
                                                <option @if ($sectionStatus->about == false) selected @endif value="0">Désactiver</option>
                                              </select>
                                        </div>
                                        @error('about')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Etat de la section témoignage :</label>
                                        <div class="form-icon relative mt -2">
                                              <select class="form-control" name="testimonial" id="">
                                                <option @if ($sectionStatus->testimonial == true) selected @endif value="1">Activer</option>
                                                <option @if ($sectionStatus->testimonial == false) selected @endif value="0">Désactiver</option>
                                              </select>
                                        </div>
                                        @error('testimonial')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Etat de la section processus de travaill :</label>
                                        <div class="form-icon relative mt -2">
                                              <select class="form-control" name="work" id="">
                                                <option @if ($sectionStatus->work == true) selected @endif value="1">Activer</option>
                                                <option @if ($sectionStatus->work == false) selected @endif value="0">Désactiver</option>
                                              </select>
                                        </div>
                                        @error('work')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-4 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Etat de la section action :</label>
                                        <div class="form-icon relative mt -2">
                                              <select class="form-control" name="action" id="">
                                                <option @if ($sectionStatus->action == true) selected @endif value="1">Activer</option>
                                                <option @if ($sectionStatus->action == false) selected @endif value="0">Désactiver</option>
                                              </select>
                                        </div>
                                        @error('action')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-4 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Etat de la section actualité :</label>
                                        <div class="form-icon relative mt -2">
                                              <select class="form-control" name="actuality" id="">
                                                <option @if ($sectionStatus->actuality == true) selected @endif value="1">Activer</option>
                                                <option @if ($sectionStatus->actuality == false) selected @endif value="0">Désactiver</option>
                                              </select>
                                        </div>
                                        @error('actuality')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="lg:col-span-4 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Etat de la section partenaire :</label>
                                        <div class="form-icon relative mt -2">
                                              <select class="form-control" name="partner" id="">
                                                <option @if ($sectionStatus->partner == true) selected @endif value="1">Activer</option>
                                                <option @if ($sectionStatus->partner == false) selected @endif value="0">Désactiver</option>
                                              </select>
                                        </div>
                                        @error('partner')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="py-1 px-3 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md float-right">
                                Mettre à jour
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div><!--end container-->
    <script>
        document.querySelector('.myForm').addEventListener('submit', function(event) {
            document.querySelector('.overlay').style.display = 'flex';
        });
    </script>
@endsection
