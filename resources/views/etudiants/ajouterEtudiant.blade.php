@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('etudiant_ajouter') }}" method="post" class="col-6 offset-3">
            @csrf

            <label>Matricule</label>
            <div class="form-group">
                <input type="text" class="form-control" name="matricule" placeholder="matricule">
            </div>

            <label>First Name</label>
            <div class="form-group">
                <input type="text" class="form-control" name="firstname" placeholder="first name">
            </div>
            
            <label>Last name</label>
            <div class="form-group">
                <input type="text" class="form-control" name="lastname" placeholder="last name">
            </div>

            <label>Adresse local</label>
            <div class="form-group">
                <input type="text" class="form-control" name="adresselocal" placeholder="adresse">
            </div>

            <label>Niveu</label>
            <div class="form-group">
                <select name="niveau" class="form-control">
                     <option>selectionner un niveau</option>
                    @foreach ($niveaux as $niveau)
                    <option value="{{ $niveau->id }}">{{ $niveau->nom }}</option>
                    @endforeach
                </select>
            </div>            


            <label>Birthday</label>
            <div class="form-group">
                <input type="date" class="form-control" name="birthday" >
            </div>

            <label>Age</label>
            <div class="form-group">
                <input type="text" class="form-control" name="age" placeholder="age">
            </div>

            <label>Email</label>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="email">
            </div>

            <label>Telephone</label>
            <div class="form-group">
                <input type="text" class="form-control" name="tel" placeholder="telephone">
            </div>

             
            <div class="form-group">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
