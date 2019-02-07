@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
			<div class="form-group">
				<strong>Id  : </strong>
				{{ $etudiant->id}}

			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Nom :</strong>
				{{$etudiant->prenom}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Nom :</strong>
				{{$etudiant->nom}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Adresse :</strong>
				{{$etudiant->adresse}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Date de Naissance :</strong>
				{{$etudiant->dateNaissance}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Email :</strong>
				{{$etudiant->email}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Telephone :</strong>
				{{$etudiant->telephone}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Niveau :</strong>
				{{$etudiant->niveau->libelle}}
			</div>
	</div>
   
	<div class="row">
         <a href="{{ route('list_etudiant') }}" class="btn btn-primary" >Retour</a>
	</div>
</div>



@endsection