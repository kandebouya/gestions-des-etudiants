@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 text-right">
            <div class="">
                <a class="btn btn-default" href="{{ route('register') }}">Nouveau Utilisateur</a>
            </div>
        </div>
    </div><hr>
    <div class="row">
        <div class="col-12">

            <div class="col-12 offset-2">
                
                @if (count($users) > 0)
                    <table class="table table-responsive">
                        <thead>
                            <th with="80px">No</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->prenom }}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role_id }}</td>
                                <td>
                                  <a class="btn btn-primary" href="{{ route('updateUser', ['id' => $user->id ] ) }}">
                                        edit
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('deleteUser', ['id' => $user->id ] ) }}">
                                        delete
                                    </a>
                                </td> 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-danger">
                        <strong>Pas de demandes dans la base de données</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
