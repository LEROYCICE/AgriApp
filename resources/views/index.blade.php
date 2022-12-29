<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agri App</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>e</span>AgriLearning</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active liens" href="#hero">Acceuill</a></li>
          <li><a class="nav-link scrollto liens" href="#about">A propos</a></li>
          <li class="dropdown liens"><a href="#"><span>Suivi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Cultures Vivrières</a></li>
              <li><a href="#">Cultures minières</a></li>
            </ul>
          </li>
          <li><a class="liens" href="blog.html">Forum</a></li>
          <li><a class="nav-link scrollto liens" href="#portfolio">Astuces</a></li>
          <li><a class="nav-link scrollto liens" href="#team">Actualités</a></li>
          <li><a class="nav-link scrollto liens" href="#contact">Contact</a></li>
          <li><a class="btn-connexion"  data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#contact">Connexion</a></li>
          <li><a class="btn-register"  data-bs-toggle="modal" data-bs-target="#exampleModal" >Inscription</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Suivi de Cultures</h2>
                <p class="animate__animated animate__fadeInUp">Apprenez à faire vos propres cultures progressivement</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Commencez</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Forum d'aide</h2>
                <p class="animate__animated animate__fadeInUp">Posez vos problèmes dans le forum d'aide</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Commencez</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Formations</h2>
                <p class="animate__animated animate__fadeInUp">Donnez et recevez des cours gratuitement</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Modal action inscription-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <section class="form-02-main">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="_lk_de">
                  <div class="form-03-main">
                    <div class="logo">
                      <div class="image"><i class="fa fa-user"></i></div>
                      <h3>Inscrivez-vous?</h3>
                    </div>
                    <div class="form-group" >
                      <span class="input-icon"><i class="fa fa-user"></i></span>
                      <input type="text" name="username" class="form-control _ge_de_ol" type="text" placeholder="Entrer votre nom ou username" required="" aria-required="true">
                    </div>
                    <div class="form-group">
                      <span class="input-icon"><i class="fa fa-envelope"></i></span>
                      <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Entrer votre e-mail" required="" aria-required="true">
                    </div>
                    <div class="form-group">
                      <span class="input-icon"><i class="fa fa-lock"></i></span>
                      <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Entrer votre mot de passe" required="" aria-required="true">
                    </div>
                    <div class="form-group">
                      <span class="input-icon"><i class="fa fa-lock"></i></span>
                      <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Confirmer votre mot de passe" required="" aria-required="true">
                    </div>
                    <div class="form-group">
                      <div class="_btn_04">
                       <button type="submit" style="border: none; color: #fff;"> Login </button>
                      </div>
                    </div>
    
                    <div class="form-group nm_lk"><p>Ou Connectez-vous via</p></div>
                    <div class="">
                      <div style="margin:1px;padding:20px 25px;background:#f7f7f7;font-size:13px;line-height:1.7;text-align:center">
                        En vous abonnant à AgriApp, vous acceptez nos <a href="/fr/service/terms/" target="_blank">Conditions générales</a>.
                        </div>
                    </div>

                    <div class="form-group pt-0">
                      <div class="_social_04">
                        <ol>
                          <li><i class="fa fa-facebook"></i></li>
                          <li><i class="fa fa-twitter"></i></li>
                          <li><i class="fa fa-google-plus"></i></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- Modal action connexion-->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <section class="form-02-main">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="_lk_de">
                  <div class="form-03-main">
                    <div class="logo">
                      <div class="image"><i class="fa fa-user"></i></div>
                      <h3>Connectez-vous?</h3>
                    </div>
                    <div class="form-group">
                      <span class="input-icon"><i class="fa fa-envelope"></i></span>
                      <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Entrer votre e-mail" required="" aria-required="true">
                    </div>
                    <div class="form-group">
                      <span class="input-icon"><i class="fa fa-lock"></i></span>
                      <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Entrer votre mot de passe" required="" aria-required="true">
                    </div>
                    <div class="checkbox form-group">
                      <div class="form-check">
                        <input class="form-check-input check-color" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                          Remember me
                        </label>
                      </div>
                      <a   data-bs-toggle="modal" data-bs-target="#exampleModal3" >mot de passe oublié</a>
                    </div>
                    <div class="form-group">
                      <div class="_btn_04">
                        <a href="#">Connexion</a>
                      </div>
                    </div>
                    <div class="">
                      <div style="margin:1px;padding:20px 25px;background:#f7f7f7;font-size:13px;line-height:1.7;text-align:center">
                        En vous abonnant à AgriApp, vous acceptez nos <a href="/fr/service/terms/" target="_blank">Conditions générales</a>.
                        </div>
                    </div>
    
                    <div class="form-group nm_lk"><p>ou Connectez via</p></div>
    
                    <div class="form-group pt-0">
                      <div class="_social_04">
                        <ol>
                          <li><i class="fa fa-facebook"></i></li>
                          <li><i class="fa fa-twitter"></i></li>
                          <li><i class="fa fa-google-plus"></i></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- mot de passe oublie modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <section class="form-02-main">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="_lk_de">
                  <div class="form-03-main">
                    <div class="logo">
                      <div class="image"><i class="fa fa-envelope"></i></div>
                      <h3>Entrez votre email </h3>
                      <h6 style="">Vous recevrez un lien de récupération dans votre e-mail</h2>
                    </div>
                    <div class="form-group">
                      <span class="input-icon"><i class="fa fa-envelope"></i></span>
                      <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Entrer votre e-mail" required="" aria-required="true">
                    </div>
    
                    <div class="form-group">
                      <div class="_btn_04">
                        <a href="#">Send</a>
                      </div>
                    </div>
                    
    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>