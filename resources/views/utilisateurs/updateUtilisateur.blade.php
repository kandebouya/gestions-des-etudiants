@extends('layouts.app')

@section('content')
<section id="main-content">
      <section class="wrapper">
               <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                           <div class="panel" >
                                <div class="panel-header">
                                    <h2>Update Users</h2>
                                </div>
         
                                <form action="{{ route('update_Utilisateur') }}" method="post" class="col-6 offset-3">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $user->id }}" required="required">
                                    
                                    <label>First Name</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="firstname" placeholder="first name" required="required"
                                        value="{{ $user->firstname }}">
                                    </div>

                                    <label>Last Name</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="nom" required="required"
                                        value="{{$user->name}}">
                                    </div>

                                    <label>Email</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="email"  required="required"
                                        value="{{ $user->email}}">
                                    </div>
                                    <label>Telephone</label>
                                    <div class="form-group">
                                         <input id="tel" type="text" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" value="{{ $user->tel}}" name="text" required>
                                    </div>

                                                
                                    <label for="droit" class="col-md-4 col-form-label text-md-right">Droit</label>
                           
                                    <div class="col-md-6">
                                        <select name="droit" id="droit" class="form-control{{ $errors->has('droit') ? ' is-invalid' : '' }}" value="{{ $user->droit}}">
                                                <option value="Admin" >Admin</option>
                                                <option value="Secretaire" >Secretaire</option>
                                                <option value="Assistant">Assistant</option>
                                                
                                        </select>
                                    </div>    

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>
                             </div>   
                        </div> 
                    </div>     
                 </div>
        <!-- /row -->
      </section>
    </section>
    @endsection