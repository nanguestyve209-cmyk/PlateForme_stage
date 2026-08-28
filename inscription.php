<?php
include 'connect.php';

if (isset($_POST['inscrire'])) {

  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $psw = $_POST['psw'];
  $type_compte = $_POST['type_compte'];

  $sql = "INSERT INTO etudiant (nom_complet, email, mot_passe)
            VALUES ('$nom', '$email', '$psw')";

  $result = mysqli_query($con, $sql);

  if ($result) {
    header("Location: dashboard_etudiant.php");
    exit();
  } else {
    die(mysqli_error($con));
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>page d'inscription</title>
  <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="css/inscription.css" />
</head>

<body class="container-fluid">
  <main class="">
    <div class="row">
      <div class="col">
        <img src="./img/logo.png" alt="" class="logo" />
      </div>
    </div>

    <section class="row d-flex ">


      <form action="inscription.php" method="POST" class="col-lg-6 col-md-12">
        <h3 class="text-center">Créer un compte</h3>
        <span class="text-center">Rejoignez notre plateforme</span>
        <!-- Choix du type de compte -->
        <div class="">
          <label class="form-label d-block">Je suis :</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type_compte" id="type_etudiant" value="etudiant" checked>
            <label class="form-check-label" for="type_etudiant">Étudiant</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type_compte" id="type_entreprise" value="entreprise">
            <label class="form-check-label" for="type_entreprise">Entreprise</label>
          </div>
        </div>
        <label for="nom_cplt" class="form-label">Nom complet</label><br />
        <input required type="text" name="nom" class="form-control" /><br />
        <label for="email" class="form-label">Email</label><br />
        <input
          type="text"
          id="email"
          class="form-control"
          placeholder="jeandupont@gmail.com"
          name="email" required /><br />
        <label for="psw" class="form-label">Mot de passe</label>
        <input type="password" id="psw" class="form-control" name="psw" required />
        <label for="cfr_psw" class="form-label">Confirmer le mot de passe</label>
        <input type="password" id="cfr_psw" class="form-control" required />
        <div class="d-flex">
          <input type="checkbox" />
          <p>
            J'accepte les
            <span class="text-primary">conditions d'utilisations</span>
          </p>
        </div>
        <div class="d-flex justify-content-center align-item-center">
          <button class="btn btn-primary" name="inscrire">S'inscrire</button>
        </div>
        <div class="d-flex justify-content-center align-item-center">
          <p>Déjà un compte ? <span class="text-primary"><a href="connexion.php">Se connecter</a></span></p>
        </div>
      </form>
      <div class=" col-lg-6 col-md-12">
        <img
          src="img/images (1).jpg"
          alt="Étudiants collaborant sur un projet en entreprise"
          class="img-fluid rounded-4 shadow-sm hero-img" />
      </div>
    </section>

  </main>
  <script src="./vendor/js/bootstrap.bundle.min.js"></script>
  <script>
    const etudiant = document.getElementById("type_etudiant");
    const entreprise = document.getElementById("type_entreprise");

    etudiant.addEventListener("change", function() {
      if (this.checked) {
        window.location.href = "inscription.php";
      }
    });

    entreprise.addEventListener("change", function() {
      if (this.checked) {
        window.location.href = "inscriptionEntreprise.php";
      }
    });
  </script>
</body>

</html>