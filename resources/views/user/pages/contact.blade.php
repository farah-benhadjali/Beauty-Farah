@extends('user.layouts.master')
@section('content')
<!-- Start Contact Us  -->
<div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                        <p> Beauty Farah Tunisie : Boutique de Vente de maquillage en ligne<br>
                                  Notre service client |BeautyFarah Tunisie</p>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Dar Chaaben El Fehri  <br>Nabeul<br>8011 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+216-27664099">+216-27 664 099</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">beautyfarah@gmail.com</a></p>
                                </li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET IN TOUCH</h2>
                        <p> Beauty Farah Tunisie : Boutique de Vente de maquillage en ligne 
                                  Notre service client | BeautyFarah Tunisie</p>
                        <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="nom" class="col-md-4 col-form-label text-md-right">Nom</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('nom') is-invalid @enderror" name="nom"
                                            value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                        @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail </label>
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="objet" class="col-md-4 col-form-label text-md-right">Objet</label>
                                    <div class="col-md-6">
                                        <input id="objet" type="text"
                                            class="form-control @error('objet') is-invalid @enderror" name="objet"
                                            value="{{ old('objet') }}" required autocomplete="objet" autofocus>
                                        @error('objet')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="message" class="col-md-4 col-form-label text-md-right">Message</label>
                                    <div class="col-md-6">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            class="form-control"></textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Envoyer
                                        </button>
                                    </div>
                                </div>
                            </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->



@endsection