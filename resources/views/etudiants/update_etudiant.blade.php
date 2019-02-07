@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('etudiant_update') }}" method="post" class="col-6 offset-3">
            @csrf

            <input type="hidden" name="id" value="{{ $etudiant->id }}" required="required">
            
            <label>Prenom</label>
            <div class="form-group">
                <input type="text" class="form-control" name="prenom" placeholder="prenom" required="required"
                value="{{ $etudiant->prenom }}">
            </div>

            <label>Nom</label>
            <div class="form-group">
                <input type="text" class="form-control" name="nom" placeholder="nom" required="required"
                value="{{ $etudiant->nom }}">
            </div>

            <label>Adresse</label>
            <div class="form-group">
                <input type="text" class="form-control" name="adresse" placeholder="adresse" required="required"
                value="{{ $etudiant->adresse }}">
            </div>

            <label>Date de Naissance</label>
            <div class="form-group">
                <input type="date" class="form-control" name="dateNaissance" required="required"
                value="{{ $etudiant->dateNaissance }}">
            </div>

            <label>Email</label>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="email"  required="required"
                value="{{ $etudiant->email}}">
            </div>

            <label>Telephone</label>
            <div class="form-group">
                <input type="text" class="form-control" name="telephone" placeholder="telephone"  required="required"
                value="{{ $etudiant->telephone }}">
            </div>

             <label>Niveux</label>
            <div class="form-group">
                <select name="niveau" class="form-control">
                    
                    @foreach ($niveaux as $niveau)
                    <option value="{{ $niveau->id }}">{{ $niveau->libelle }}</option>
                    @endforeach
                </select>
            </div>            

            <div class="form-group">
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
