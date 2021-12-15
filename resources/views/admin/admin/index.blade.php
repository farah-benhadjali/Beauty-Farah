@extends('admin.layouts.master')
@section('content')

<div class="content">
    <div>
        <a class="btn btn-success" href="{{ route('produit.create') }}"> Ajouter une produit</a>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="container-fluid">

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header card-header-primary">
                    <h4 class="card-title mt-0"> Les produits</h4>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="">
                            <th>
                               id
                                </th>
                                <th>
                                photo
                                </th>
                                <th>
                                nom_de_produit
                                </th>
                                <th>
                                prix
                                </th>
                                <th>
                                description_produit
                                </th>
                                <th>
                                category_type
                                </th>
                                
                            </thead>

                            <tbody>
                                @foreach ($produits as $produit)
                                <tr>
                                    <td>
                                        {{ $produit->id }}
                                    </td>
                                    <td>
                                    <img src="{{ asset('images/' .$produit->photo) }}" alt="Image">
                                    </td>
                                    <td>
                                    {{ $produit->nom_de_produit }}
                                    </td>
                                    <td>
                                    {{ $produit->prix }}
                                    </td>
                                    <td>
                                    {{ $produit->description_produit }}
                                    </td>
                                    <td>
                                    
                                        {{ $produit->category_type }}
                                    </td>
                                    <form action="{{ route('produit.destroy', $produit->id) }}" method="POST">
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('produit.show', $produit->id) }}">
                                                <i class="fas fa-folder">
                                                </i>
                                                Détail
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{ route('produit.edit', $produit->id) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Modifier
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>
                                    </form>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
            document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="" target="_blank">Creative Tim</a> for a better web.
        </div>
    </div>
</footer>
@endsection