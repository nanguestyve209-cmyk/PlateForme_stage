<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tableau de board etudiant</title>
  <link rel="stylesheet" href="css/sidebar_admin.css" />
  <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css" />

</head>

<body class="container-fluid">
  <section class="row">
    <div class="d-md-none p-2">
      <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMobile"><i class="fa-solid fa-bars"></i></button>
    </div>
    <aside class="col-sm-2 d-none d-md-block">
      <?php include 'include/sidebar_etudiant.php'; ?>
    </aside>
    <div class="col-sm-10">
      <div>
        <h1>
          Bonjour <br />
          <span class="h6">Voir un apercue de votre activité</span>
        </h1>
      </div>
      <div class="row">
        <div class="col  border-top border-success border-5 rounded shadow-lg bg-primary bg-opacity-10">
          <h1>
            <span>12</span> <br />
            <span class="h6">Offres consultées</span>
          </h1>
        </div>
        <div class="col mx-3 border-top border-success border-5 rounded shadow-lg bg-warning bg-opacity-10">
          <h1>
            <span>5</span><br />
            <span class="h6">Candidatures envoyées</span>
          </h1>
        </div>
        <div class="col me-5 border-top border-success border-5 rounded shadow-lg bg-success bg-opacity-10">
          <h1>
            <span>3</span><br />
            <span class="h6">reponses recus</span>
          </h1>
        </div>
      </div>
      <div>
        <h3>Offres recentes</h3>
        <fieldset class="my-2 py-3 border-bottom border-2 border-warning">
          <div class="row">
            <div class="col-2"><i class="fa solid fa-bars"></i></div>
            <div class="col-6">
              <h5>Développeur Web Stagiaire</h5>
            </div>
            <div class="col-2">Softtech sarl</div>
            <div class="col-2">il ya 2 jours</div>
          </div>
        </fieldset>
        <fieldset class="my-2 py-3 border-bottom border-2 border-warning">
          <div class="row">
            <div class="col-2"><i class="fa solid fa-bars"></i></div>
            <div class="col-6">
              <h5>Développeur Web Stagiaire</h5>
            </div>
            <div class="col-2">Softtech sarl</div>
            <div class="col-2">il ya 2 jours</div>
          </div>
        </fieldset>
        <fieldset class="my-2 py-3 border-bottom shadow border-2 border-warning border-opacity-10">
          <div class="row">
            <div class="col-2"><i class="fa solid fa-bars"></i></div>
            <div class="col-6">
              <h5>Développeur Web Stagiaire</h5>
            </div>
            <div class="col-2">Softtech sarl</div>
            <div class="col-2">il ya 2 jours</div>
          </div>
        </fieldset>

      </div>
      <div>
        <button class="btn text-primary border-primary my-3">Voir toutes les offres</button>
      </div>
    </div>
    <div class="offcanvas offcanvas-start " tabindex="-1" id="sidebarMobile">
      <div class="offcanvas-header bg-dark">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body bg-dark">
        <?php include 'include/sidebar_etudiant.php'; ?>
      </div>
    </div>
  </section>
  <script src="vendor/js/bootstrap.bundle.min.js"></script>
  <script src="/jquery-ui-1.14.2.custom/external/jquery/jquery.js"></script>
</body>

</html>