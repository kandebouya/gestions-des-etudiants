@extends('layouts.app')

@section('content')
<div class="container">
    
        <div class="card">
            <div class="card-header">
               Utilisateurs
            </div>
            <div class="card-body">
            <i class="fa fa-user"></i>
                <h5 class="card-title">Gestions des uitlisateurs</h5>
             
                <a href="/listUser" class="btn btn-primary">Go</a>
            </div>
        </div>
      
        <div class="card">
            <div class="card-header">
               Etudiants
            </div>
            <div class="card-body">
            <i class="fa fa-user"></i>
                <h5 class="card-title">Gestions des etudiants</h5>
             
                <a href="/etudiant/index" class="btn btn-primary">Go</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
               Niveaux
            </div>
            <div class="card-body">
            <i class="fa fa-user"></i>
                <h5 class="card-title">Gestions des niveaux</h5>
             
                <a href="/niveaux" class="btn btn-primary">Go</a>
            </div>
        </div>

</div>
@endsection
