@extends('layouts.app')
@section('content')


   
   
   
	<div class="row">
		<div class="col-sm-12">
			<div class="full-right">
				<h2>Liste des Niveaux</h2>

			</div> 
			<a href="{{route('niveaux.create')}}" class="btn btn-primary btn-sm">
				<strong>Nouveau Niveau</strong>
			</a>
		
		</div>	
	</div>

	<p>&nbsp</p>
	<p>&nbsp</p>
	
	@if ($message = Session:: get('success'))
		<div class="alert alert-success">
			<p> {{  $message }}</p>
		</div>


	@endif


<table id="example" class="table table-striped table-bordered" style="width:100%; border: 1px solid #ddd;">
        <thead>
            <tr>	
				<th with="80px">No</th>
				<th>Libelle</th>
				
				<th>Action	</th>
			</tr>
        </thead>
        <tbody>
            @foreach ($niveau as $key => $value)
				<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->libelle}}</td>
			
					
					
					<td>

											
						<a href="{{route('niveaux.edit',$value->id)}}" class="btn btn-success btn-sm">
							Edit
						</a>


						{{ Form::open(['method' => 'DELETE','route' => ['niveaux.destroy', $value->id]]) }}
							<button type="submit" class="btn btn-danger" >
								Delete

							</button>

						{{ Form::close() }}
					

					</td>


				</tr>
			@endforeach 
            
        </tbody>
      
    </table>

@endsection