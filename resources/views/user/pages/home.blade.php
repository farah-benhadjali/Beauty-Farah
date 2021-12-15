@extends('user.layouts.master')
@section('content')
 <!-- Start Products  -->
 <div class="products-box">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Produits</h1>
                        
                    </div>
                </div>
            </div>
         
            <div class="row special-list">
 @foreach($produits as $produit)
            
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="{{asset('images/'.$produit->photo) }}" class="logo-slide" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="/cart">Add to Panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{ $produit->nom_de_produit}}</h4>
                            <h4>{{ $produit->description_produit}}</h4>
                            <h4> {{ $produit->prix}}</h4>
                        </div>
                    </div>
                </div>
            
            @endforeach
            </div>
        </div>
    </div>
    <!-- End Products  -->

    
@endsection