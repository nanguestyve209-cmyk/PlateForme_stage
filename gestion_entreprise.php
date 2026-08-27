<?php
include 'connect.php'
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
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css" />
</head>

<body>
    <main class="row">
        <div class="col-2">
            <?php include 'include/sidebar_admin.php' ?>
        </div>
        <div class="col-10">
            <table class="table table-stripped table-responsive table-hover">
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
                            <td><button class="btn btn-primary">Modifier</button><button class="btn btn-danger">Supprimer</button></td>
                        </tr>
                    <?php
                        $i++;
                    } ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src=" vendor/js/bootstrap.bundle.min.js"></script>
</body>

</html>