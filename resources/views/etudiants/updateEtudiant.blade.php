@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('update_etudiant') }}" method="post" class="col-6 offset-3">
            @csrf

            <label>Matricule</label>
            <div class="form-group">
            <input type="text" class="form-control" name="matricule" placeholder="matricule" value="{{ $etudiant->matricule}}">
            </div>

            <label>First Name</label>
            <div class="form-group">
                <input type="text" class="form-control" name="firstname" placeholder="first name" value="{{$etudiant->firstname}}">
            </div>
            
            <label>Last name</label>
            <div class="form-group">
                <input type="text" class="form-control" name="lastname" placeholder="last name" value="{{$etudiant->lastname}}">
            </div>

            <label>Adresse local</label>
            <div class="form-group">
                <input type="text" class="form-control" name="adresselocal" placeholder="adresse" value="{{$etudiant->adresselocal}}">
            </div>

            <label>Niveu</label>
            <div class="form-group">
                <select name="niveau" class="form-control" value="{{$etudiant->niveau}}">
                     <option>selectionner un niveau</option>
                    @foreach ($niveaux as $niveau)
                    <option value="{{ $niveau->id }}">{{ $niveau->nom }}</option>
                    @endforeach
                </select>
            </div>            


            <label>Birthday</label>
            <div class="form-group">
                <input type="date" class="form-control" name="birthday" value="{{$etudiant->birthday}}">
            </div>

            <label>Age</label>
            <div class="form-group">
                <input type="text" class="form-control" name="age" placeholder="age" value="{{$etudiant->age}}">
            </div>

            <label>Email</label>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="email" value="{{$etudiant->email}}">
            </div>

            <label>Telephone</label>
            <div class="form-group">
                <input type="text" class="form-control" name="tel" placeholder="telephone" value="{{$etudiant->tel}}">
            </div>

             
            <div class="form-group">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
