@extends('front.layouts.master')
@section('title', 'Nous Contacter')
@section('filAriane', 'Nous Contacter')
@section('content')

    <!--contact us form start-->
    <section class="contact-us-form pt-60 pb-120"
        style="background: url('assets/img/shape/contact-us-bg.svg')no-repeat center bottom" id="contact">
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-heading">
                        @if (session()->has('success'))
                            <div class="alert alert-success" style="color: black">
                                {{ session()->get('success') }}
                            </div>
                        @elseif ($errors->has('g-recaptcha-response'))
                            <div class="alert alert-danger" style="color: black">
                                {{ $errors->first('g-recaptcha-response') }}
                            </div>
                        @else
                            <h2>Nous contacter</h2>
                        @endif
                    </div>
                    <form action="{{ route('contact.send') }}" class="register-form" method="post" id="myForm">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="firstName" class="mb-1">Nom Prénoms <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Ex: BONE Bio" name="fullname"
                                        value="{{ old('fullname') ?? '' }}" aria-label="First name">
                                </div>
                                @error('fullname')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" required placeholder="Ex: bio@gmail.com"
                                        value="{{ old('email') ?? '' }}" name="email" aria-label="Email">
                                </div>
                                @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="phone" class="mb-1">Téléphone <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" required placeholder="Ex: +22960000000"
                                        value="{{ old('phone') ?? '' }}" name="phone" aria-label="Phone">
                                </div>
                                @error('phone')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="mb-1">Objet<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" required
                                        placeholder="Entrer l'Objet de votre message" name="subject"
                                        value="{{ old('subject') ?? '' }}" aria-label="Email">
                                </div>
                                @error('subject')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="yourMessage" class="mb-1">Message <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" name="message" required placeholder="Message" style="height: 120px">{{ old('message') ?? '' }}</textarea>
                                </div>

                                @error('message')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="g-recaptcha mt-2" data-sitekey={{ config('services.recaptcha.key') }}></div>
                        <button class="btn btn-primary mt-2" type="submit">Envoyer</button>
                    </form>
                </div>
                <div class="col-lg-5 col-md-10">
                    <div class="contact-us-img">
                        <img src="{{ asset(FrontHelper::getEnvFolder() . 'storage/front/assets/img/contact-us-img-2.svg') }}"
                            alt="contact us" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="contact-promo ptb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="contact-us-promo p-3 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                        <span class="fas fa-map fa-2x text-primary mb-3"></span>
                        <div class="contact-promo-info mb-3">
                            <h5>Adresse</h5>
                            <p>{{ FrontHelper::getSetting()->company_headquarters }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="contact-us-promo p-3 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                        <span class="fas fa-envelope fa-2x text-primary mb-3"></span>
                        <div class="contact-promo-info mb-3">
                            <h5>Email</h5>
                            @foreach (FrontHelper::getEmails() as $email)
                                <p>{{ $email->name }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-2">
                    <div class="contact-us-promo p-3 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                        <span class="fas fa-phone fa-2x text-primary mb-3"></span>
                        <div class="contact-promo-info mb-3">
                            <h5>Téléphone</h5>
                            @foreach (FrontHelper::getPhones() as $phone)
                                <p>{{ $phone->name }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overlay" id="overlay">
        Envoi en cours...
    </div>
    <!--contact us promo section end-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            document.getElementById('overlay').style.display = 'flex';
        });
    </script>
@stop
