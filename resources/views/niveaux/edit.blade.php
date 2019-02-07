@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::model($niveau,['route'=>['niveaux.update',$niveau->id],'method'=>'PATCH']) !!}
				
				@include('niveaux.form_master')
			{!! Form::close() !!}
		</div>
	</div>



@endsection