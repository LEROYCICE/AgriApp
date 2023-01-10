<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function pageConnexion()
    {
        return view('connexion.sign-in') ;
    }

    public function traitementConnexion(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required' ,
        ]) ;

        $utilisateur = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        if ($utilisateur) {
            return redirect('/');
        }
        else{
            dd($utilisateur) ;
        }
    }
}
