@extends('layouts.app')

@section('content')
    <section id="main-content">
      <section class="wrapper">
         <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <div class="panel" >
                        <div class="panel-header">
                            <h2>Ajout Niveau</h2>
                        </div>

                        <div class="panel-body">
                          {{  Form::open(['route'=>'niveaux.store','method'=>'POST']) }}
                            @include('niveaux.form');

                          {{ form::close() }}

                        </div>
                    </div>
                </div>
            </div>
          </div>

        <!-- /row -->
      </section>
       @endsection      
   