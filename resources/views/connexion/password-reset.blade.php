@extends('connexion.app')
@section('content')
    

<div class="form-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-body">
                
                <div class="my-5 text-center">
                    <h3 class="font-weight-bold mb-3">Mot de Passe oublié</h3>
                    <p class="text-muted">Veuillez entrer votre e-mail</p>
                    <p class="text-muted">Ensuite après l'envoie de la requette, veuillez vérifier votre e-mail</p>
                </div>
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="form-icon-wrapper">
                            <input type="email" class="form-control" id="email" placeholder="Entrer votre email" autofocus
                                   required>
                            <i class="form-icon-left fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Envoyer</button>
                    </div>
                </form>
                <p class="text-center">retourner pour<a href="sign-in.html">vous connectez</a> ou <a href="/inscription">sur la page d'acceuill
                    account</a>.</p>
            </div>
        </div>
    </div>
</div>
@endsection