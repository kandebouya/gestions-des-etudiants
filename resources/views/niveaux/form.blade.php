
		
		<div class="col-md-10 left-content" style="background-color:white;">
					
			<div class="row">
						
					<div class="col-sm-10">
						Nom
						<div >
							{!! Form::text('nom' ,NULL,['class'=>'form-control','id'=>'nom','placeholder'=>'saisir le nom ','required'=>'required']) !!}
							{{ $errors-> first('nom','<p class="help-block">:message</p>') }}

						</div>
					</div>	
					<div class="col-sm-10">
						Description
						<div >
							{!! Form::text('description' ,NULL,['class'=>'form-control','id'=>'description','placeholder'=>'saisir la description ','required'=>'required']) !!}
							{{ $errors-> first('description','<p class="help-block">:message</p>') }}

						</div>
					</div>	
					<p>&nbsp</p>
					<p>&nbsp</p>	
			</div>
				<div class="form-group">
				{{ Form::button(isset($model) ? 'Update' : 'Valider' , ['class'=> 'btn btn-primary','type'=>'submit']) }}
				</div>

		</div>	


