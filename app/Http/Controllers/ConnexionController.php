<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function pageConnexion()
    {
        return view('accueil') ;
    }

    public function traitementConnexion(Request $request)
    {
        
    }
}
