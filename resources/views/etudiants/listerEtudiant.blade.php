@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
        
            <div class="col-8 offset-2">

            <div class="">
                <a class="btn btn-primary" href="{{ route('nouveauEtudiant') }}">Nouveau Etudiant</a>
            </div>
                
                @if (count($etudiants) > 0)
                    <table class="table table-responsive">
                        <thead>
                            <th with="80px">No</th>
                            <th>Matricule</th>
                            <th>First name</th>
                            <th>last name</th>
                            <th>Adresse</th>
                            <th>Niveau</th>
                            <th>Birthday</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                        @foreach ($etudiants as $etudiant)
                            <tr>
                                <td>{{ $etudiant->id }}</td>
                                <td>{{ $etudiant->matricule}}</td>
                                <td>{{ $etudiant->firstname}}</td>
                                <td>{{ $etudiant->lastname }}</td>
                                <td>{{ $etudiant->adresselocal }}</td>
                                <td> {{$etudiant->niveau->nom}} </td>
                                <td>{{ $etudiant->birthday }}</td>
                                <td>{{ $etudiant->age }}</td>
                                <td>{{ $etudiant->email }}</td>
                                <td>{{ $etudiant->tel }}</td>
                                <td>

                                     <a class="btn btn-primary" href="{{ route('etudiant_details', ['id' => $etudiant->id ] ) }}">
                                        views
                                    </a>
                                    <a class="btn btn-success" href="{{ route('edit_Etudiant', ['id' => $etudiant->id ] ) }}">
                                        edit
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('supprimer_etudiant', ['id' => $etudiant->id ] ) }}">
                                        delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-danger">
                        <strong>Pas d'etudiants dans la base de données</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
