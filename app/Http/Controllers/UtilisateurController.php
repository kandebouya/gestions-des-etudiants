<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UtilisateurController extends Controller
{
    public function listUser()
    {
        return view('utilisateurs.listerUtilisateur',
            [
                'users' => User::all()
            ]);
    }

    public function edit($id)

    {
            $user = User::where('id', $id)->first();
            return view('utilisateurs.updateUtilisateur',
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

            $user->firstname = Input::get('firstname');
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->tel = Input::get('tel');
            $user->droit = Input::get('droit');
            $user->save();

            
             return redirect('utlisateurs.listerUtilisateur');
        }

        return view('auth.login');      

    }





    public function destroy($id)
    {
       
           User::find($id)->delete();
            return redirect()->route('lister_Utilisateur') ;

    }
}
