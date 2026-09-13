<?php
include 'connect.php';
/*  fonction de suppresion d'une entreprise */
if (isset($_GET['supprimer'])) {
    $id_entreprise = $_GET['id_entreprise'];
    $nom = $_GET['nom_entreprise'];
    $email = $_GET['email'];
    $secteur = $_GET['secteur_activite'];
    $logo = $_GET['logo'];
    $sql = "DELETE FROM entreprise WHERE id_entreprise= '$id_entreprise' ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: gestion_entreprise.php");
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>
<!-- fonction de modification des informations de l'entreprise -->
<?php
if (isset($_POST['modifier'])) {
    $id_entreprise = $_POST['id_entreprise'];
    $nom_entreprise = $_POST['nom_entreprise'];
    $email = $_POST['email'];
    $secteur_activite = $_POST['secteur_activite'];
    $logo = $_POST['logo'];
    $sql = "UPDATE  entreprise SET nom_entreprise = '$nom_entreprise',secteur_activite = '$secteur_activite' ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: gestion_entreprise.php");
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
    <title>Gestion des entreprises</title>
    <title>Tableau de board etudiant</title>
    <link rel="stylesheet" href="css/sidebar_admin.css" />
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/datatable.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css" />
</head>

<body>
    <main class="row">
        <div class="col-2">
            <?php include 'include/sidebar_admin.php' ?>
        </div>
        <div class="col-10">
            <div class="table-responsive">
                <table class="table table-stripped  table-hover  " id="table">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Nom de l'entreprise</td>
                            <td>Email</td>
                            <td>Secteur d'activité</td>
                            <td>Logo</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM entreprise";
                        $result = mysqli_query($con, $sql);
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo htmlspecialchars($row['nom_entreprise']) ?></td>
                                <td><?php echo htmlspecialchars($row['email']) ?></td>
                                <td><?php echo htmlspecialchars($row['secteur_activite']) ?></td>
                                <td><img class="rounded-circle" src="<?php echo $row['logo']; ?>" width="60" height="60"></td>
                                <td>
                                    <!-- boutton d'ouverture du modal -->
                                    <button class="btn btn-primary btn-modifier" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id_entreprise=<?php echo $row['id_entreprise'] ?> data-nom_entreprise=<?php echo $row['nom_entreprise'] ?> data-email=<?php echo $row['email'] ?> data-secteur_activite=<?php echo $row['secteur_activite'] ?> data-logo=<?php echo $row['logo'] ?>>Modifier</button>
                                    <a class="btn btn-danger" href="?supprimer =1&id_entreprise=<?php echo $row['id_entreprise']; ?>" onclick="return confirm('Voulez vous vraiment supprimer cet entreprise')">Supprimer</a>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- modal pour la modification des informations -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header alert alert-primary">
                        <h1 class="modal-title fs-5 text-center " id="staticBackdropLabel">Modifier</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" class="p-3">
                            <input type="hidden" name="id_entreprise" id="modal_id_entreprise" value="">
                            <label for="nom_entreprise" class="form-label">Nom entreprise</label><br />
                            <input
                                required type="text"
                                id="modal_nom_entreprise"
                                class="form-control"
                                placeholder="SoftwareTech"
                                name="nom_entreprise" /><br />
                            <label for="email" class="form-label">Adresse email</label><br />
                            <input
                                required type="text"
                                id="modal_email"
                                class="form-control"
                                placeholder="SoftwareTech@gmail.com"
                                name="email" /><br />

                            <label for="secteur_activite" class="form-label">secteur D'activité</label><br />
                            <input
                                required type="text"
                                id="modal_secteur_activite"
                                class="form-control"
                                placeholder="informatique"
                                name="secteur_activite" /><br />
                            <label for="logo" class="form-label">Logo de l'entreprise</label><br />
                            <input
                                required type="file"
                                id="modal_logo"
                                class="form-control"

                                name="logo" /><br />
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <!--  -->
    </main>

    <script src=" vendor/js/bootstrap.bundle.min.js"></script>
    <script src="js/datatable.min.js"></script>
    <script src="/jquery-ui-1.14.2.custom/external/jquery/jquery.js"></script>
    <script>
        $(Document).ready(function() {
            $("#table").DataTable();
        })
        /* script pour la fonction de modification */
        document.querySelectorAll('.btn-modifier').forEach(function(button) {
            button.addEventListener('click', function() {
                document.querySelector('#modal_id_entreprise').value =
                    this.dataset.id_entreprise;

                document.querySelector('#modal_nom_entreprise').value =
                    this.dataset.nom_entreprise;

                document.querySelector('#modal_email').value =
                    this.dataset.email;
                document.querySelector('#modal_secteur_activite').value = this.dataset.secteur_activite;
                document.querySelector('#modal_logo').value = this.dataset.logo;
            })
        })
    </script>
</body>

</html>