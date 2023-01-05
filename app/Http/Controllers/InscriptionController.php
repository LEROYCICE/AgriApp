<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function pageInscription(){
        return view('inscription') ;
    }

    public function traitementInscription(Request $request){

        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'password' =>'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);
        // il faut hacher le mot de passe avec la fct hash();
        $utilisateur = new Utilisateur() ;
        $utilisateur->nom = $request->nom ;
        $utilisateur->email = $request->email ;
        $utilisateur->password = $request->password;

        $resultat = $utilisateur->save() ;
        if ($resultat) {
            return view('compte') ;
        }

    }
}
