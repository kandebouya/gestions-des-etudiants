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

            return view('etudiants.list_etudiant',
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
            return view('etudiants.add_etudiant',
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
            return view('etudiants.update_etudiant',
                [
                    'etudiant' => $etudiant,               
                    'niveaux'=>Niveau::all()
                
                ]

            );
         }
        return view('auth.login');    
    }

    public function store(Request $request)
    {
         if(Auth::check())
        {

            $etudiant = Etudiant::create($request->all());

             return redirect()->route('etudiants') ;


        }
        return view('auth.login');   
    }


    public function add()
      {
        if(Auth::check())
        {
                $etudiant = new Etudiant();

                $etudiant->prenom = Input::get('prenom');
                $etudiant->nom = Input::get('nom');
                $etudiant->adresse = Input::get('adresse');
                $etudiant->dateNaissance = Input::get('dateNaissance');
                $etudiant->email= Input::get('email');
                $etudiant->telephone = Input::get('telephone');
                $etudiant->niveau_id = Input::get('niveau');
               
                $etudiant->save();

                
                return redirect()->route('list_etudiant') ;
         }

        return view('auth.login');     
           
    }

    public function update()
     {
        if(Auth::check())
        {


            $etudiant = Etudiant::where('id', Input::get('id'))->first();

           
                $etudiant->prenom = Input::get('prenom');
                $etudiant->nom = Input::get('nom');
                $etudiant->adresse = Input::get('adresse');
                $etudiant->dateNaissance = Input::get('dateNaissance');
                $etudiant->email= Input::get('email');
                $etudiant->telephone = Input::get('telephone');
                $etudiant->niveau_id = Input::get('niveau');
               
                $etudiant->save();

                
               // return redirect('etudiants.index');
             return redirect()->route('list_etudiant') ;

         }

        return view('auth.login');       
    }


    public function show($id)
    {
        if(Auth::check())
        {
        
            $etudiant  =Etudiant::find($id);
            return view('etudiants.show',compact('etudiant'));
        }
        return view('auth.login');     
            
    }

     public function delete($id) 
     {
         if(Auth::check())
        {

        $etudiant = Etudiant::where('id', $id)->first();
        $etudiant->forceDelete();

        return redirect()->route('list_etudiant') ;

        }

        return view('auth.login'); 
    }




}
