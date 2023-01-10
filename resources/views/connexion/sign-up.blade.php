@extends('connexion.app')
@section('content')
    <span style="color:#fff">@section('inscription','') </span>

<div class="form-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="text-center my-5">
                    <h3 class="font-weight-bold mb-3">Inscription</h3>
                    <p class="text-muted">crééz votre compte gratuit sur Agriapp</p>
                </div>
                <form action="/inscription" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="fullname">Nom d'utilisateur</label>
                        <div class="form-icon-wrapper">
                            <input type="text" name="nom" class="form-control" id="fullname" placeholder="Entrer votre username" autofocus>
                            <i class="form-icon-left fas fa-user"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="form-icon-wrapper">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Entrer votre email" required>
                            <i class="form-icon-left fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <div class="form-icon-wrapper">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Entrer votre mot de passe">
                            <i class="form-icon-left fas fa-lock"></i>
                            <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password-repeat">Mot de passe confirmation</label>
                        <div class="form-icon-wrapper">
                            <input type="password" name="password_confirmation" class="form-control" id="password-repeat" placeholder="Confirmer votre mot de passe">
                            <i class="form-icon-left fas fa-lock"></i>
                            <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">S'inscrire</button>
                    </div>
                    <p class="text-center">Avez vous déja un compte? si oui,<a href="/connexion">Connectez-vous?</a>.</p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
