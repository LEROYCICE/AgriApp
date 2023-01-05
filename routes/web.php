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

Route::get('/' , [InscriptionController::class , 'pageInscription']) ;
Route::post('/' , [InscriptionController::class, 'traitementInscription']) ;

Route::get('/' , [ConnexionController::class , 'pageConnexion']) ;
Route::post('/' , [ConnexionController::class , 'traitementConnexion'])->name('connexion') ;

Route::get('/inscription' , function()
{
    return view('inscription') ;
    
}) ;


