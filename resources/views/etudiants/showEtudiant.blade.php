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
				<strong>Matricule :</strong>
				{{$etudiant->matricule}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>First Name :</strong>
				{{$etudiant->firstname}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Last Name:</strong>
				{{$etudiant->lastname}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Adresse :</strong>
				{{$etudiant->adresselocal}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Niveau :</strong>
				{{$etudiant->niveau->nom}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>BirthDay :</strong>
				{{$etudiant->birthday}}
			</div>
	</div>

	<div class="row">
			<div class="form-group">
				<strong>Age:</strong>
				{{$etudiant->age}}
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
				{{$etudiant->tel}}
			</div>
	</div>


   
	<div class="row">
         <a href="{{ route('listerEtudiant') }}" class="btn btn-primary" >Retour à la liste</a>
	</div>
</div>



@endsection