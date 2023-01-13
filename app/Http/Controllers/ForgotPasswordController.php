<?php

namespace App\Http\Controllers;

use App\Mail\NouveauPasswordMail;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Nette\Utils\Random;
use Illuminate\Support\Str ;

class ForgotPasswordController extends Controller
{
    public function formulaireDeMail()
    {
        return view('connexion.password-reset') ;
    }

    public function traitementMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:utilisateurs' ,
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email ,
            'token' => $token ,
            'created_at' => Carbon::now() 
        ]) ;

        // $resultat = Mail::send('email.forgetPassword' , ['token' => $token ] , function($message) use($request){
        //     $message->to($request->email) ;
        //     $message->subject('Changement de Mot de Passe') ;
        // }) ;
           Mail::to($request->email)->send(new NouveauPasswordMail($token)) ;
         flash('Vous avez recu un mail pour changer votre mot de passe')->warning() ;
         return back() ;

        
    }

    public function formulaireDeNouveauPassword($token)
    {
       return view('connexion.password-change', ['token'=> $token]) ;
    }

    public function traitementPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:utilisateurs' ,
            'password' => 'required|min:8|confirmed' ,
            'password_confirmation' => 'required'
        ]) ;

        $updatePassword = DB::table('password_resets')
                                ->where([
                                    'email' => $request->email ,
                                    'token' => $request->token ,
                                ])
                                ->first() ;
        if ($updatePassword) {
            flash('Le mot de passe n\'est pas mise à jour')->error() ;
            return back() ;
        }
        
        Utilisateur::where('email', $request->email)
                                    ->update(['password' => bcrypt($request->password)]) ;
        
        DB::table('password_resets')->where(['email' => $request->email])->delete() ;
        
        flash('Vous avez mis à jour votre mot de passe avec succes')->success() ;
        return redirect('/connexion') ;
                                   
    }
}
