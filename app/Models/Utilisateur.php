<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends Model implements Authenticatable
{
    
    use HasFactory, Notifiable;
    use BasicAuthenticatable ;
    protected $fillable = ['username' , 'email' ,'password' , 'password_confirmation'] ;


}