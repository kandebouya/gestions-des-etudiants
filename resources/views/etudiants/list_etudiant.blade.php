@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
        
            <div class="col-8 offset-2">

            <div class="">
                <a class="btn btn-primary" href="{{ route('etudiant_create') }}">Nouveau Etudiant</a>
            </div>
                
                @if (count($etudiants) > 0)
                    <table class="table table-responsive">
                        <thead>
                            <th with="80px">No</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Date Naissance</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Niveau</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                        @foreach ($etudiants as $etudiant)
                            <tr>
                                <td>{{ $etudiant->id }}</td>
                                <td>{{ $etudiant->prenom }}</td>
                                <td>{{ $etudiant->nom }}</td>
                                <td>{{ $etudiant->adresse }}</td>
                                <td>{{ $etudiant->dateNaissance }}</td>
                                <td>{{ $etudiant->email }}</td>
                                <td>{{ $etudiant->telephone }}</td>
                              
                               <td> @if(!empty($etudiant)) {{$etudiant->niveau->libelle}}  @endif</td>
                                <td>

                                     <a class="btn btn-primary" href="{{ route('etudiant_show', ['id' => $etudiant->id ] ) }}">
                                        views
                                    </a>
                                    <a class="btn btn-success" href="{{ route('etudiant_edit', ['id' => $etudiant->id ] ) }}">
                                        edit
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('etudiant_delete', ['id' => $etudiant->id ] ) }}">
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
