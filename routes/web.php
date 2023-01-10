<?php

use App\Http\Controllers\ConnexionController;
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

Route::get('/password-reset' , function(){
    return view('connexion.password-reset') ;
}) ;

Route::get('/password-change' , function(){
    return view('connexion.password-change') ;
}) ;

Route::get('/form-message' , function(){
    return view('connexion.form-message') ;
}) ;


