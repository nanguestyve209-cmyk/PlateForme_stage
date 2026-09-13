<?php
include 'connect.php';
?>
<!-- fonction de modification -->
<?php
if (isset($_POST['modifier'])) {
    $id_etudiant = $_POST['id_etudiant'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sql = "UPDATE etudiant SET nom_complet = '$nom', email = '$email' WHERE id_etudiant = '$id_etudiant'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: gestion_etudiant.php");
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>
<!-- fontion de suppression -->
<?php if (isset($_GET['supprimer'])) {
    $id_etudiant = $_GET['id_etudiant'];
    $nom = $_GET['nom'];
    $email = $_GET['email'];
    $sql = "DELETE FROM etudiant WHERE id_etudiant = '$id_etudiant' ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location:gestion_etudiant.php");
        exit();
    } else {
        die(mysqli_error($con));
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidebar_admin.css">
    <link rel="stylesheet" href="css/datatable.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
</head>

<body class="">

    <main class="row ">
        <div class="d-md-none p-2">
            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMobile"><i class="fa-solid fa-bars"></i></button>
        </div>
        <div class=" col-12 col-md-2 d-none d-md-block">
            <?php include 'include/sidebar_admin.php'; ?></div>
        <div class=" col-md-10">

            <h1 class="text-center text-primary h4">Étudiant/Jeune diplômé inscrit</h1>
            <div class="table-responsive">
                <table id="table" class="table table-stripped table-hover table-bordered">
                    <thead class="bg-primary bg-primary bg-opacity-25">
                        <tr>
                            <td>#</td>
                            <td>Nom</td>
                            <td>Email</td>
                            <td>date d'inscription</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM etudiant";
                        $result = mysqli_query($con, $sql);
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $i; ?>
                                </td>
                                <td>
                                    <?php echo htmlspecialchars($row['nom_complet']); ?>
                                </td>

                                <td>
                                    <?php echo htmlspecialchars($row['email']); ?>
                                </td>
                                <td>
                                    <?php echo htmlspecialchars($row['date_inscription'] ?? ''); ?>
                                </td>
                                <td class="d-flex flex-wrap gap-1">
                                    <a href="?supprimer=1&id_etudiant=<?php echo $row['id_etudiant']; ?>"
                                        class="btn btn-danger mx-1"
                                        onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?');">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                    <button type="button" class="btn btn-primary btn-modifier"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        data-id_etudiant="<?php echo $row['id_etudiant']; ?>"
                                        data-nom="<?php echo htmlspecialchars($row['nom_complet']); ?>"
                                        data-email="<?php echo htmlspecialchars($row['email']); ?>">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                </td>
                            </tr>

                        <?php
                            $i++;
                        }

                        ?>

                    </tbody>

                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header alert alert-primary">
                        <h1 class="modal-title fs-5 text-center " id="staticBackdropLabel">Modifier</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" class="p-3">
                            <input type="hidden" name="id_etudiant" id="modal_id_etudiant" value=">
                            <label for=" nom_cplt" class="form-label">Nom complet</label><br />
                            <input required type="text" name="nom" id="modal_nom" class="form-control" /><br />
                            <label for="email" class="form-label">Email</label><br />
                            <input
                                required type="text"
                                id="modal_email"
                                class="form-control"
                                placeholder="jeandupont@gmail.com"
                                name="email" /><br />
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </main>
    <div class="offcanvas offcanvas-start " tabindex="-1" id="sidebarMobile">
        <div class="offcanvas-header bg-dark">
            <h5 class="text-white">Stage<span class="text-primary">Link</span></h5ssss>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body bg-dark">
            <?php include 'include/sidebar_admin.php'; ?>
        </div>
    </div>

    <script src="vendor/js/bootstrap.bundle.min.js"></script>
    <script src="js/datatable.min.js"></script>
    <script src="/jquery-ui-1.14.2.custom/external/jquery/jquery.js"></script>
    <script>
        $(document).ready(function() {
            $("#table").DataTable();
        });
        /* script pour la fonction de modification */
        document.querySelectorAll('.btn-modifier').forEach(function(button) {

            button.addEventListener('click', function() {

                document.querySelector('#modal_id_etudiant').value =
                    this.dataset.id_etudiant;

                document.querySelector('#modal_nom').value =
                    this.dataset.nom;

                document.querySelector('#modal_email').value =
                    this.dataset.email;

            });

        });
    </script>
</body>

</html>