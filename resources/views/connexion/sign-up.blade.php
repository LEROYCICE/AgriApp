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
                <form>
                    <div class="form-group">
                        <label for="fullname">Username</label>
                        <div class="form-icon-wrapper">
                            <input type="text" class="form-control" id="fullname" placeholder="Entrer votre username" autofocus>
                            <i class="form-icon-left fas fa-user"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="form-icon-wrapper">
                            <input type="email" class="form-control" id="email" placeholder="Entrer votre email" required>
                            <i class="form-icon-left fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="form-icon-wrapper">
                            <input type="password" class="form-control" id="password" placeholder="Entrer votre mot de passe">
                            <i class="form-icon-left fas fa-lock"></i>
                            <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password-repeat">password confirmation</label>
                        <div class="form-icon-wrapper">
                            <input type="password" class="form-control" id="password-repeat" placeholder="Confirmer votre mot de passe">
                            <i class="form-icon-left fas fa-lock"></i>
                            <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Connexion</button>
                    </div>
                    <p class="text-center">Avez vous déja un compte? si oui,<a href="/connexion">Connectez-vous?</a>.</p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
