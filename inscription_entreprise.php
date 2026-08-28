<?php
include 'connect.php';
/* fonction d'ajout dans la base de donnees */

if (isset($_POST['inscrire'])) {

    $nom_entreprise = $_POST['nom_entreprise'];
    $email = $_POST['email'];
    $secteur_activite = $_POST['secteur_activite'];

    // Récupération du fichier
    $logo = $_FILES['logo'];

    // Informations du fichier
    $tmp = $logo['tmp_name'];
    $nom_logo = $logo['name'];

    // Chemin où le logo sera enregistré
    $chemin_logo = 'uploads/' . $nom_logo;

    // Déplacement du fichier
    move_uploaded_file($tmp, $chemin_logo);

    // Insertion dans la base de données
    $sql = "INSERT INTO entreprise
            (nom_entreprise, email, secteur_activite, logo)
            VALUES
            ('$nom_entreprise', '$email', '$secteur_activite', '$chemin_logo')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location:dashboard_entreprise.php ");
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire d'inscription entreprise</title>
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

        <section class="row d-flex">

            <form action="inscription_entreprise.php" method="POST" enctype="multipart/form-data" class="col-lg-6 col-md-12">
                <h3 class="text-center">Créer un compte entreprise</h3>
                <span class="text-center">Rejoignez notre plateforme</span>

                <label for="nom" class="form-label">Nom Entreprise</label><br />
                <input required type="text" name="nom_entreprise" class="form-control" /><br />

                <label for="email" class="form-label">Email</label><br />
                <input
                    type="email"
                    id="email"
                    class="form-control"
                    placeholder="jeandupont@gmail.com"
                    name="email" required /><br />

                <label for="secteur_activite" class="form-label">Secteur D'activité</label>
                <input
                    type="text"
                    id="secteur_activite"
                    class="form-control"
                    name="secteur_activite"
                    required />

                <div class="my-3 d-grid">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control" required />
                </div>

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

            <div class="col-lg-6 col-md-12">
                <img
                    src="img/images (1).jpg"
                    alt="Entreprise partenaire"
                    class="img-fluid rounded-4 shadow-sm hero-img" />
            </div>
        </section>

    </main>
    <script src="./vendor/js/bootstrap.bundle.min.js"></script>
</body>

</html>