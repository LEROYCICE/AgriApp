<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function()
{
    return view('accueil');
}) ;

Route::get('/inscription' , [InscriptionController::class , 'pageInscription']) ;
Route::post('/inscription' , [InscriptionController::class, 'traitementInscription']) ;

Route::get('/connexion' , [ConnexionController::class , 'pageConnexion']) ;
Route::post('/connexion' , [ConnexionController::class , 'traitementConnexion']);


Route::get('/password-reset' , [ForgotPasswordController::class, 'formulaireDeMail']);
Route::post('/password-reset' , [ForgotPasswordController::class , 'traitementMail']) ;

Route::get('/password-change/{token}' , [ForgotPasswordController::class , 'formulaireDeNouveauPassword'])->name('change.password') ;
Route::post('/password-change' , [ForgotPasswordController::class , 'traitementPassword']) ;

Route::get('/form-message' , function(){
    return view('connexion.form-message') ;
}) ;


