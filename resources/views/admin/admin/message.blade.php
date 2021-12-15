@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Liste des messages</h2>
        </div>
    </div>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Objet</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->nom }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->objet }}</td>
                <td>{{ $contact->message }}</td>

            </tr>
            @endforeach

        </tbody>
    </table>

</div>



@endsection