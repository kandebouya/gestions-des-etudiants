<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UtilisateurController extends Controller
{
    public function listUser()
    {
        return view('utilisateurs.list_user',
            [
                'users' => User::all()
            ]);
    }

    public function edit($id)

    {
            $user = User::where('id', $id)->first();
            return view('utilisateurs.update_user',
                [
                    'user' => $user
                ]

            );
       
    }

    public function update()
     {
         if(Auth::check())
        {
            $user = User::where('id', Input::get('id'))->first();

            $user->prenom = Input::get('prenom');
            $user->nom = Input::get('nom');
            $user->email = Input::get('email');
            $user->prenom = Input::get('prenom');
            $user->role_id = Input::get('role_id');
            $user->save();

            
             return redirect('utlisateurs.list_user');
        }

        return view('auth.login');      

    }





    public function destroy($id)
    {
       
           User::find($id)->delete();
            return redirect()->route('etudiants.list_user') ;

    }
}