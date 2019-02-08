<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Etudiant;
use App\Niveau;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    public function __construct(){
        //  $this->middleware('auth');
    }

    public function index() 
    {
         if(Auth::check())
        {

            return view('etudiants.listerEtudiant',
            [
                'etudiants' => Etudiant::all()
            ]);
        }
        return view('auth.login');     
    }

    public function create()
    {
         if(Auth::check())
        {
            return view('etudiants.ajouterEtudiant',
            [
               
                'niveaux'=>Niveau::all(),
                'etudiants'=>Etudiant::all()
            ]);
        }
        return view('auth.login');     
    }


    public function edit($id)

    {
         if(Auth::check())
        {

            $etudiant = Etudiant::where('id', $id)->first();
            return view('etudiants.updateEtudiant',
                [
                    'etudiant' => $etudiant,               
                    'niveaux'=>Niveau::all()
                
                ]

            );
         }
        return view('auth.login');    
    }


    public function ajouter()
      {
        if(Auth::check())
        {
                $etudiant = new Etudiant();

                $etudiant->matricule = Input::get('matricule');
                $etudiant->firstname = Input::get('firstname');
                $etudiant->lastname = Input::get('lastname');
                $etudiant->adresselocal = Input::get('adresselocal');
                $etudiant->niveau_id = Input::get('niveau');
                $etudiant->birthday = Input::get('birthday');
                $etudiant->age = Input::get('age');
                $etudiant->email= Input::get('email');
                $etudiant->tel = Input::get('tel');              
                $etudiant->save();             
                return redirect()->route('listerEtudiant') ;
         }

        return view('auth.login');     
           
    }

    public function update()
     {
        if(Auth::check())
        {


            $etudiant = Etudiant::where('id', Input::get('id'))->first();

           
            $etudiant->matricule = Input::get('matricule');
            $etudiant->firstname = Input::get('firstname');
            $etudiant->lastname = Input::get('lastname');
            $etudiant->adresselocal = Input::get('adresselocal');
            $etudiant->niveau_id = Input::get('niveau');
            $etudiant->birthday = Input::get('birthday');
            $etudiant->age = Input::get('age');
            $etudiant->email= Input::get('email');
            $etudiant->tel = Input::get('tel');
            
            $etudiant->save();
             return redirect()->route('listerEtudiant') ;
         }

        return view('auth.login');       
    }


    public function show($id)
    {
        
            $etudiant  =Etudiant::find($id);
            return view('etudiants.showEtudiant',compact('etudiant'));
            
    }

     public function delete($id) 
     {
         if(Auth::check())
        {

        $etudiant = Etudiant::where('id', $id)->first();
        $etudiant->forceDelete();

        return redirect()->route('listerEtudiant') ;

        }

        return view('auth.login'); 
    }




}
