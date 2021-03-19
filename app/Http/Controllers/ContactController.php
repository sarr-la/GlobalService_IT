<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    

    public function contact(){      
        return view('contact.contact');
    }       



    public function contacts(){
        $Contact = \App\Contact::orderBy('created_at')->get();
        return view('contact.contact', compact('contact'));
     }
    
     public function create()
     {
        return view('contact.create');
     }
        public function ajout(){
    
            return view('contact.ajout');
        }
    
    
    public function store(Request $request){
    
        $Contact = new \App\Contact();
        $Contact->prenom = $request->input('prenom');
        $Contact->nom = $request->input('nom');
        $Contact->email = $request->input('email');
        $Contact->numero_de_telephone = $request->input('numero_de_telephone');
        $Contact->votre_message = $request->input('votre_message');
    $Contact->save();
    return redirect('/');
    }
    
    


}
