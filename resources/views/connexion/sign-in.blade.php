@extends('connexion.app')
@section('content')
    @section('connexion','')

<div class="form-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <!-- <div class="logo">
                    <img src="../../dist/images/logo-colorful.png" alt="logo">
                </div> -->
                <div class="my-5 text-center">
                    <h3 class="font-weight-bold mb-3">Connexion</h3>
                    <p class="text-muted">Connectez-vous pour continuer </p>
                </div>
                <form action="/connexion" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="form-icon-wrapper">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Entrer votre email" autofocus
                                   required>
                            <i class="form-icon-left mdi mdi-email"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <div class="form-icon-wrapper">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Entrer votre mot de passe"
                                   required>
                            <i class="form-icon-left mdi mdi-lock"></i>
                            <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                                <i class="mdi mdi-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="d-md-flex justify-content-between">
                            <div class="custom-control custom-checkbox mb-2 mb-md-0">
                                <input type="checkbox" name="rappel" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                            </div>
                            <a href="/password-reset">mot de passe oublié?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Se connectez</button>
                    </div>
                    <p class="text-center">
                        vous n'avez pas de compte?
                        <a href="/inscription">Créer votre compte</a>.
                    </p>
                    <div class="text-divider">ou</div>
                    <div class="social-links justify-content-center">
                        <a href="#" class="bg-google">
                            <i class="mdi mdi-google"></i>
                        </a>
                        <a href="#" class="bg-facebook">
                            <i class="mdi mdi-facebook"></i>
                        </a>
                        <a href="#" class="bg-github">
                            <i class="mdi mdi-github"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 @endsection
