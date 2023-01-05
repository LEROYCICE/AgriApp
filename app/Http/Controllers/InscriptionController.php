<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function pageInscription(){
        return view('accueil') ;
    }

    public function traitementInscription(Request $request){

        $request->validate([
            'nom' => 'required',
            'email' => 'required|unique:utilisateurs,email',
            'password' =>'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ]); 
        
        $utilisateur = new Utilisateur() ;
        $utilisateur->nom = $request->nom ;
        $utilisateur->email = $request->email ;
        $utilisateur->password = $request->password;
        $utilisateur->password_confirmation = $request->password_confirmation ;

        $resultat = $utilisateur->save() ;

        if ($resultat) {
            return back() ;
        }

    }
}
