<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
include 'connect.php';

/* fonction de modification du profil de lentreprise */
if (isset($_POST['enregistrer'])) {
    /* $id_entreprise = $_POST['id_entreprise']; */
    $nom_entreprise = $_POST['nom_entreprise'];
    $secteur_activite = $_POST['secteur_activite'];
    /* $email = $_POST['email']; */
    $ville = $_POST['ville'];
    /* $logo = $_FILES['logo']; */
    $telephone = $_POST['telephone'];
    $site_web = $_POST['site_web'];
    $a_propos = $_POST['a_propos'];
    $sql = " UPDATE entreprise SET nom_entreprise = '$nom_entreprise', secteur_activite = '$secteur_activite',  ville = '$ville', a_propos = '$a_propos',telephone= '$telephone', site_web = '$site_web'  ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: profil_entreprise.php");
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil entreprise</title>
    <link rel="stylesheet" href="css/sidebar_admin.css">
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
</head>

<body class="container-fluid">
    <main class="row">
        <div class="col-2">
            <?php
            include 'include/sidebar_entreprise.php'
            ?>
        </div>
        <div class="col-10 py-5 border">
            <h1>Profil de l'entreprise</h1>
            <div class="row">
                <div class="col-2 border">
                    <img src="img/images (1).jpg" alt="" class="img-fluid " width="140" height="140">
                </div>
                <div class="col-10 border py-5">
                    <fieldset>
                        <?php
                        $sql = "SELECT * FROM entreprise";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            $row =
                                mysqli_fetch_assoc($result);
                        ?>
                            <div class="row py-2">
                                <div class="col-6">
                                    <h5>Nom de l'entreprise :</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="fw-bold"><?php echo htmlspecialchars($row['nom_entreprise'] ?? 'non renseigne') ?></h5>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-6">
                                    <h5>Secteur d'activité :</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="fw-bold"> <?php echo htmlspecialchars($row['secteur_activite'] ?? 'non renseigne') ?></h5>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-6">
                                    <h5>Télephone :</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="fw-bold"> <?php echo $row['telephone'] ?? 'non renseigne' ?></h5>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-6">
                                    <h5>ville :</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="fw-bold"><?php echo htmlspecialchars($row['ville'] ?? 'non renseigne') ?></h5>
                                </div>
                            </div>
                            <div class="row py-2 border shadow">
                                <div class="col-6">
                                    <h5>SiteWeb :</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="fw-bold"> <?php echo htmlspecialchars($row['site_web'] ?? 'non renseigne'); ?></h5>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-6">
                                    <h5>À propos :</h5>
                                </div> <br>
                                <div class="border p-4">
                                    <?php echo htmlspecialchars($row['a_propos'] ?? 'non renseigne') ?>
                                </div>
                            </div>
                        <?php } ?>
                    </fieldset>
                    <div class="d-flex justify-content-center">
                        <!-- bouton douverture du modal -->
                        <button type="button"
                            class="btn btn-primary btn-modifier"
                            data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Modifier le profil</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <div
            class="modal fade"
            id="staticBackdrop"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel" alert alert-primary>
                            Mettre a jour son profil
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <form action="" method="POST" class="d-flex justify-content-center align-items-center">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-6">
                                            <label for="nom_entreprise" class="form-label">Nom de l'entreprise </label>
                                            <input
                                                type="text"
                                                name="nom_entreprise"
                                                id="nom_entreprise"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="secteur_activite" class="form-label">Secteur d'activité</label>
                                            <input
                                                type="text"
                                                name="secteur_activite"
                                                id="secteur_activite"
                                                class="form-control" />
                                        </div>
                                        <div class="col-6">
                                            <label for="telephone" class="form-label">Télephone</label>
                                            <input
                                                type="number"
                                                name="telephone"
                                                id="telephone"

                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="ville" class="form-label">
                                                Ville
                                            </label>
                                            <input
                                                type="text"
                                                name="ville"
                                                id="ville"

                                                class="form-control" />
                                        </div>
                                        <div class="col-6">
                                            <label for="site_web" class="form-label">Site web</label>

                                            <input
                                                type="text"
                                                class="form-control"
                                                name="site_web"
                                                id="site_web" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="a_propos" class="form-label">À propos</label>
                                        </div> <br>
                                        <textarea name="a_propos" id="a_propos" class="form-control"></textarea>
                                    </div>

                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                        <button
                            type="submit"
                            class="btn btn-primary"
                            name="enregistrer">
                            Enregistrer
                        </button>
                    </div>
                    </form>
                </div>
    </main>
    <script src="./vendor/js/bootstrap.bundle.min.js"></script>
</body>

</html>