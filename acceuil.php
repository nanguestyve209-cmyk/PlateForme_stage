<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StageLink — Trouvez le stage qui vous correspond</title>
  <link rel="stylesheet" href="./vendor/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./vendor/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <!-- Barre de navigation -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark  sticky-top">
      <div class="container-fluid px-4">
        <h1 class="text-dark">Stage<span class="text-primary">Link</span></h1>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mynavbar"
          aria-controls="mynavbar"
          aria-expanded="false"
          aria-label="Afficher/masquer la navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="mynavbar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-dark" aria-current="page" href="acceuil.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="offres.php">Offres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="entreprises.php">Entreprises</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="a-propos.php">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="contact.php">Contact</a>
            </li>
          </ul>
          <div class="d-flex gap-2 mx-lg-2">
            <a href="connexion.php" class="btn btn-outline-dark">Se connecter</a>
            <a href="inscription.php" class="btn btn-primary">S'inscrire</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <!-- Section héro -->
    <section class="hero bg-primary bg-opacity-10">
      <div class="container-fluid px-4 py-5">
        <div class="row align-items-center gy-4">
          <div class="col-lg-6 col-md-12">
            <div class="card border-0 shadow-sm p-4 p-lg-5">
              <div class="card-body">
                <h1 class="fw-bold display-5 mb-3">
                  Trouvez le stage qui propulse votre avenir
                </h1>
                <p class="text-secondary fs-5">
                  Des centaines d'opportunités de stage vous attendent.
                </p>
                <form method="get" action="offres.php" class="my-4" role="search">
                  <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                      <i class="fa-solid fa-magnifying-glass text-muted"></i>
                    </span>
                    <input
                      type="search"
                      name=""
                      class="form-control border-start-0"
                      placeholder="Rechercher une offre, une entreprise"
                      aria-label="Rechercher une offre, une entreprise" />
                    <button class="btn btn-primary px-4" type="submit">Rechercher</button>
                  </div>
                </form>
                <div class="row text-center text-lg-start g-3">
                  <div class="col-4">
                    <h3 class="fw-bold mb-0">500+</h3>
                    <span class="text-muted small">Offres de stage</span>
                  </div>
                  <div class="col-4">
                    <h3 class="fw-bold mb-0">200+</h3>
                    <span class="text-muted small">Entreprises</span>
                  </div>
                  <div class="col-4">
                    <h3 class="fw-bold mb-0">1k+</h3>
                    <span class="text-muted small">Étudiants inscrits</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <img
              src="img/internship-flat-modern-design-illustration_566886-175.jpg"
              alt="Étudiants collaborant sur un projet en entreprise"
              class="img-fluid rounded-4 shadow-sm hero-img" />
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- pied de page -->
  <footer class="bg-dark text-white">
    <!-- partie principale -->
    <div class="container py-5">
      <div class="row g-4">
        <!-- logo et description -->
        <div class="col-lg-3 col-md-6">
          <h3 class="fw-bold">Stage<span class="text-primary">Link</span>
          </h3>
          <p class="text-light mt-3">La plate forme dediée aux étudiants et jeunes diplomés <br> pour trouver des opportunitée de stages et construire <br> leur avenir ptofessionnel</p>
          <!-- resaux sociaux -->
          <div class="d-flex gap-2 mt-4">
            <a href="https://www.facebook.com/" target="_blank" class="btn btn-outline-light rounded-circle"><i class="fab fa-facebook-f"></i></a>
            <a href="" class="btn btn-outline-light rounded-circle"><i class="fab fa-linkedin-in"></i></a>
            <a href="" class="btn btn-outline-light rounded-circle"><i class="fab fa-instagram"></i></a>
            <a href="" class="btn btn-outline-light rounded-circle"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <h5 class="fw-bold mb-4">Plateforme</h5>
          <ul class="list-unstyled">
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Acceuil</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Offres de stage</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Entreprises</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">À propos</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Contact</a></li>
          </ul>
        </div>
        <!-- Espace etudiant -->
        <div class="col-lg-2 col-md-6">
          <h5 class="mb-4 fw-bold">Espace étudiant</h5>
          <ul class="list-unstyled">
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Inscription</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Mon profil</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Mes candidatures</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Mon CV</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Notification</a></li>
          </ul>
        </div>
        <!-- Espace entreprise -->
        <div class="col-lg-2 col-md-6">
          <h5 class="fw-bold mb-4">entreprise</h5>
          <ul class="list-unstyled">
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Publier une offres</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Mes offres</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Candidatures</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Mon entreprise</a></li>
            <li class="mb-3"><a href="" class="text-decoration-none text-light">Tableau de bord</a></li>
          </ul>
        </div>
        <!-- messagerie -->
        <div class="col-lg-3 col-md-12">
          <h5 class="fw-bold mb-4">Restez informé !</h5>
          <p class="text-light">
            Recevez les nouvelles offres de stage et nos conseils <br> directement dans votre boîte mail.
          </p>
          <form action="" class="mt-3">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="votre email">
              <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>
  <script src="./vendor/js/bootstrap.bundle.min.js"></script>
</body>

</html>