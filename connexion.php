<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page de connexion</title>
  <link rel="stylesheet" href="./vendor/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./vendor/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="./css/connexion.css" />
</head>

<body class="container-fluid">

  </div>
  </div>
  </div>
  <section>
    <div class="row">
      <div class="col">
        <img src="./img/logo.png" alt="" class="logo" />
      </div>
    </div>
    <section class="row d-flex align-item-center">
      <div class="col col-sm- col">
        <h3 class="text-center">
          connexion <br />
          <span class="h6">Acceder à votre compte</span>
        </h3>
        <form action="">
          <div class="d-grid">
            <label for="email" class="my-2">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="styve@gmail.com" />
          </div>
          <div class="d-grid">
            <label for="password" class="my-2">Mot de passe</label>
            <input type="password" id="password" class="form-control" required />
          </div>
          <div class="row">
            <div class="col-sm-6 my-4">
              <input type="checkbox" class="" />
              <label for="" class="form-label">Se souvenir de moi</label>
            </div>
            <div class="col-sm-6 my-4">
              <p class="text-primary">Mot de passe oublier</p>
            </div>
          </div>
          <div class="d-flex justify-content-center align-item-center">
            <button type="submit" class="btn btn-primary w-25">
              Se connecter
            </button>
          </div>
          <div>
            <p class="text-center py-4">
              Pas encore de compte ?<a href="inscription.php" class="text-primary">S'inscrire</a>
            </p>
          </div>
        </form>
      </div>
      <div class="col-sm-6 ">
        <img src="./img/images (1).jpg" class="img-fluid border" alt="" />
      </div>
    </section>

    <script src="./vendor/js/bootstrap.bundle.min.js"></script>
  </section>
</body>

</html>