@extends('layouts.app')

@section('content')
    <section id="main-content">
      <section class="wrapper">
              <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                           <div class="panel" >
                                <div class="panel-header">
                                    <h2>Modifier Niveau</h2>
                                </div>

                                <div class="panel-body">
                                  {!! Form::model($niveau,['route'=>['niveaux.update',$niveau->id],'method'=>'PATCH']) !!}
                                    
                                    @include('niveaux.form')
                                  {!! Form::close() !!}
                                </div>

                            </div>  
                          </div>
                      </div>
                    </div>    
               </div>  
        <!-- /row -->
      </section>
    </section>
    @endsection 
   
  