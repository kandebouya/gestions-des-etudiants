@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('etudiant_add') }}" method="post" class="col-6 offset-3">
            @csrf
            
            <label>Prenom</label>
            <div class="form-group">
                <input type="text" class="form-control" name="prenom" placeholder="prenom">
            </div>

            <label>Nom</label>
            <div class="form-group">
                <input type="text" class="form-control" name="nom" placeholder="nom">
            </div>

            <label>Adresse</label>
            <div class="form-group">
                <input type="text" class="form-control" name="adresse" placeholder="adresse">
            </div>

            <label>Date de Naissance</label>
            <div class="form-group">
                <input type="date" class="form-control" name="dateNaissance" >
            </div>

            <label>Email</label>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="email">
            </div>

            <label>Telephone</label>
            <div class="form-group">
                <input type="text" class="form-control" name="telephone" placeholder="telephone">
            </div>

             <label>Niveux</label>
            <div class="form-group">
                <select name="niveau" class="form-control">
                     <option value="null">aucun niveau selectionné</option>
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
