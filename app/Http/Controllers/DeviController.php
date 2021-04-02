<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviController extends Controller
{



    public function devi(){      
        return view('devi.devi');
    }       



    public function devis(){
        $Devi = \App\Devi::orderBy('created_at')->get();
        return view('devis.devis', compact('devis'));
     }
    
     public function create()
     {
        return view('devi.create');
     }
        public function ajout(){
    
            return view('devi.ajout');
        }


    public function store(Request $request){
    
        $Devi = new \App\Devi();
        $Devi->type = $request->input('type');
        $Devi->adresse = $request->input('adresse');
        $Devi->nom = $request->input('nom');
        $Devi->objet = $request->input('objet');
        $Devi->email = $request->input('email');
        $Devi->numero_de_telephone = $request->input('numero_de_telephone');
        $Devi->votre_message = $request->input('votre_message');
    $Devi->save();
    return redirect('/');
    }
    
    
    


}
