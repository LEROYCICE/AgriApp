@extends('connexion.app')
@section('content')
@section('connexion','')
@section('inscription','')

<div class="form-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-body">

                <div class="my-5 text-center">
                    <h3 class="font-weight-bold mb-3">Mot de Passe oublié</h3>
                </div>

                @include('flash::message')
                <form action="/password-change" method="post">

                    @csrf 
                    <div class="form-group">
                        <label for="password">Email</label>
                        <div class="form-icon-wrapper">
                            <input type="email" name="email" class="form-control" id="password"  autofocus
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Nouveau Mot de passe</label>
                        <div class="form-icon-wrapper">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Entrer votre nouveau mot de passe" autofocus
                                   required>
                            <i class="form-icon-left fas fa-lock"></i>
                            <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password2">Confirmer le mot de passe</label>
                        <div class="form-icon-wrapper">
                            <input type="password" name="password_confirmation" class="form-control" id="password2" placeholder="Confirmer le mot de passe" autofocus
                                   required>
                            <i class="form-icon-left fas fa-lock"></i>
                            <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Modifier le mot de passe</button>
                    </div>
                </form>
                <p class="text-center">Maintenant, Vous pouvez<a href="sign-in.html">vous connectez</a> ou <a href="sign-up.html">créez un  nouveau compte</a>.</p>
            </div>
        </div>
    </div>
</div>
<!-- Jquery -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
<script src="/assets/js/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap-4.5.3/js/bootstrap.min.js"></script>
<!-- Main scripts -->
<script src="../assets/js/main.js"></script>
</body>
</html>
