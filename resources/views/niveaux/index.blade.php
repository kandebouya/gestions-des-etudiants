@extends('layouts.app')

@section('content')
    <section id="main-content">
      <section class="wrapper">
        

                @if ($message = Session:: get('success'))
                <div class="alert alert-success">
                  <p> {{  $message }}</p>
                </div>
               @endif

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <div class="panel" >
                        <div class="panel-header">
                            <h2>Liste des  Niveaux </h2>
                        </div>
                  
                    
                        <a href="{{route('niveaux.create')}}" class="btn btn-primary">
                          Nouveau
                        </a>

                        <table id="example" class="table table-responsive">
                          <thead>
                            <tr>	
                              <th with="80px">No</th>
                              <th>nom</th>
                              <th>description</th>
                              <th>Action	</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($niveau as $key => $value)
                              <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->nom}}</td>
                                <td>{{$value->description}}</td>	
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
                    </div>
                </div>
            </div>	          
        </div>
        <!-- /row -->
      </section>
    </section>
   
    @endsection 