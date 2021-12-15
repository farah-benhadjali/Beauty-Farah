@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Liste des clients</h2>
        </div>
    </div>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>E-mail</th>
                <th>gestion</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                    <td class="project-actions text-right">

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



@endsection