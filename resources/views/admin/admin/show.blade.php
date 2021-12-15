@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<div class="container">
    <div class="team-single">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('produit.index') }}" enctype="multipart/form-data"> Retour</a>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                <div class="team-single-img">
                    <img src="{{url('/images/cart.png')}}" class="img-fluid rounded-start" alt="...">
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="team-single-text padding-50px-left sm-no-padding-left">
                    <h5 class="font-size38 sm-font-size32 xs-font-size30">photo :</h5> {{ $produit->photo }}
                    <h5 class="font-size38 sm-font-size32 xs-font-size30">nom_de_produit : </h5>
                    {{ $produit->nom_de_produit }}
                    <h5 class="font-size38 sm-font-size32 xs-font-size30">prix : </h5>{{ $produit->prix }}
                    <h5 class="no-margin-bottom">description_produit : </h5>{{ $produit->description_produit}}
            
                    <h5 class="no-margin-bottom">type produit: </h5>{{ $produit->category_type}}
                </div>
            </div>

            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>
@endsection