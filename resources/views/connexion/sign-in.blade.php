<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>connexion to agriapp</title>
    <!-- Bootstrap lien cdn-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <!-- Bootstrap-->
    <link rel="stylesheet" href="../assets/vendor/bootstrap-4.5.3/css/bootstrap.min.css">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="../assets/vendor/fontawesome-free-6.1.2-web/css/all.min.css" type="text/css">
    <!-- font awesome icons cdn -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <!-- Main styles -->
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/connexion.css" type="text/css">
</head>
<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">
    
          <div class="logo">
            <h1><a href="index.html"><span>e</span>AgriLearning</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto liens" href="#hero">Acceuill</a></li>
              <li><a class="nav-link scrollto liens" href="#about">A propos</a></li>
              <li class="dropdown liens"><a href="includes/cultures.html"><span>Suivi</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Cultures Vivrières</a></li>
                  <li><a href="#">Cultures minières</a></li>
                </ul>
              </li>
              <li><a class="liens" href="blog.html">Forum</a></li>
              <li><a class="nav-link scrollto liens" href="#actuces">Astuces</a></li>
              <li><a class="nav-link scrollto liens" href="#actualites">Actualités</a></li>
              <li><a class="nav-link scrollto liens" href="#contact">Contact</a></li>
              <li><a class="btn-connexion"  href="includes/login.html">Connexion</a></li>
              <li><a class="btn-register"  href="includes/inscription.html" >Inscription</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
      </header><!-- End Header -->
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
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="form-icon-wrapper">
                            <input type="email" class="form-control" id="email" placeholder="Entrer votre email" autofocus
                                   required>
                            <i class="form-icon-left mdi mdi-email"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="form-icon-wrapper">
                            <input type="password" class="form-control" id="password" placeholder="Entrer votre mot de passe"
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
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                            </div>
                            <a href="password-reset.html">mot de passe oublié?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Connexion</button>
                    </div>
                    <p class="text-center">
                        vous n'avez pas de compte?
                        <a href="sign-up.html">Créer votre compte</a>.
                    </p>
                    <div class="text-divider">or</div>
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
<!-- Jquery -->
<!-- Jquery -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
<script src="/assets/js/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap-4.5.3/js/bootstrap.min.js"></script>
<!-- Main scripts -->
<script src="../assets/js/main.js"></script>
</body>
</html>