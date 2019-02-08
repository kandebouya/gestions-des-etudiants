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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Droit</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->tel}}</td>
                                <td>{{ $user->droit}}</td>
                                <td>
                                  <a class="btn btn-primary" href="{{ route('update_Utilisateur', ['id' => $user->id ] ) }}">
                                        edit
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('delete_Utilisateur', ['id' => $user->id ] ) }}">
                                        delete
                                    </a>
                                </td> 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
               @endif
            </div>
        </div>
    </div>
@endsection
