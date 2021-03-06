<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Niveau;


class NiveauController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            $niveau = Niveau::all();
            return view('niveaux.index',compact('niveau'));
         }
        return view('auth.login'); 
    }


    public function create()
    {
        if(Auth::check())
        {
        return view('niveaux.create');

        }
        return view('auth.login');
    }

    public function store(Request $request)
    {
        if(Auth::check())
        {
        $this->validate($request,[
            'nom'=>'required|string|max:255',
            'description'=>'required|string|max:255',            
            ]);
        Niveau::create($request->all());
        return redirect()->route('niveaux.index')->with('success','niveau created successfull') ;

        }
        return view('auth.login'); 
    }

    public function edit($id)
    {
        if(Auth::check())
        {
        $niveau =Niveau::find($id);
        return view('niveaux.edit',compact('niveau'));

        }
        return view('auth.login');
    }

    public function update(Request $request, $id)
    {
        if(Auth::check())
        {
        $this->validate($request,[
            'nom'=>'required|string|max:255',
            'description'=>'required|string|max:255',   
           
            ]);
       Niveau::find($id)->update($request->all());
        return redirect()->route('niveaux.index')->with('success','niveau updated') ;

        }
        return view('auth.login'); 

    }

    public function destroy($id)
    {
        if(Auth::check())
        {
            Niveau::find($id)->delete();
            return redirect()->route('niveaux.index')->with('success','niveau deleted') ;

        }
        return view('auth.login'); 
    }

}
