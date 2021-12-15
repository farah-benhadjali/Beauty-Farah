@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Ajouter un produit</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('produit.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="photo">photo</label>
                                    <input type="file" name="photo" class="form-control" id="photo" onchange="previewFile(this)">
                                    @error('photo')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">nom_de_produit</label>
                                        <input type="text" name="nom_de_produit" class="form-control">
                                        @error('nom_de_produit')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">prix</label>
                                        <input type="text" name="prix" class="form-control">
                                        @error('prix')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating"> description_produit</label>
                                        <textarea class="form-control" name="description_produit" rows="5"></textarea>
                                        @error('description_produit')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                           


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Type de produit</label>
                                        <select name="category_type" class="form-control">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <input type="submit" value="Créer un nouveau produit" class="btn btn-success float-right">
                            <a class="btn btn-primary" href="{{ route('produit.index') }}" enctype="multipart/form-data">
                                Retour</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function PreviewFile(input){
    var file=$("input[type=file]").get(0).files[0];
    if(file){
    var reader = new FileReader();

    reader.onload = function(){
      $('#previewImg').attr("src",reader.result);
    }
    reader.readAsDataURL(file);
    }
    }
    </script>

@endsection
