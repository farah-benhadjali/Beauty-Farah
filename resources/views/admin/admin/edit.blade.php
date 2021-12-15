@extends('admin.layouts.master')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier produit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('produit.index') }}" enctype="multipart/form-data"> Retour</a>
            </div>
        </div>
    </div>

    <form action="{{ route('produit.update',$produit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>photo</strong>
                    <input type="text" name="photo" value="{{ $produit->photo }}" class="form-control">
                    @error('photo')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nom_de_produit</strong>
                    <input type="text" name="nom_de_produit" value="{{ $produit->nom_de_produit }}" class="form-control">
                    @error('nom_de_produit')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>prix</strong>
                    <input type="text" name="prix" value="{{ $produit->prix }}" class="form-control">
                    @error('prix')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description_produit</strong>
                    <textarea class="form-control" style="height:150px"
                        name="description_produit">{{ $produit->description_produit }}</textarea>
                    @error('description_produit')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

    

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>type de produit</strong>
                    <textarea class="form-control" style="height:150px"
                        name="category_type">{{ $produit->category_type }}</textarea>
                    @error('category_type')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary mr-2">Annuler</a>
                <input type="submit" value="Modifier" class="btn btn-success float-right" >
            </div>
        </div>

    </form>
</div>


@endsection