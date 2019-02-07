@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{{  Form::open(['route'=>'niveaux.store','method'=>'POST']) }}
				@include('niveaux.form_master');

			{{ form::close() }}

		</div>
	</div>


@endsection