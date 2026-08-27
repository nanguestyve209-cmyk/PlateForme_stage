<?php
include 'connect.php';
/* fonction de modification du profil */
if (isset($_POST['enregistrer'])) {

  $telephone = $_POST['telephone'];
  $ville = $_POST['ville'];
  $date_naissance = $_POST['date_naissance'];
  $formation = $_POST['formation'];
  $sql = "UPDATE etudiant SET telephone = '$telephone', ville = '$ville', date_naissance = '$date_naissance', formation = '$formation' ";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header("Location: profil_etudiant.php");
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
  <title>profil d'un etudiant</title>
  <link rel="stylesheet" href="css/sidebar_admin.css" />
  <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css" />
</head>

<body>
  <div class="row">
    <div class="col-2"><?php include 'include/sidebar_etudiant.php' ?></div>
    <div class="col-10">
      <h4 class="alert alert-primary text-center">Mon profil</h4>
      <div class="card">
        <div class="card-header d-flex">
          <!-- fonction poour afficher limage et le nom de letudiant -->
          <?php $sql = " select * from etudiant ";
          $result =
            mysqli_query($con, $sql);
          if ($result) {
            $row =
              mysqli_fetch_assoc($result); ?>
            <div>
              <img
                src="uploads/stagelink_maquette_complete_style_ameliore.png"
                alt=""
                width="120"
                height="120"
                class="rounded-circle" />
            </div>
            <div class="ms-5 d-flex">
              <div id="nom"><?php echo $row['nom_complet'] ?></div>
            </div>
          <?php } ?>
        </div>
        <div class="card-body">
          <?php $sql = " select * from etudiant ";
          $result =
            mysqli_query($con, $sql);
          if ($result) {
            $row =
              mysqli_fetch_assoc($result); ?>
            <fieldset class="row py-3 shadow">
              <div class="col-sm-3 rounded" id="email">Email</div>
              <div class="col-sm-3 rounded" id="email">
                <?php echo htmlspecialchars($row['email']) ?>
              </div>
            </fieldset>
            <fieldset class="row py-3 shadow">
              <div class="col-sm-3 rounded">Télephone</div>
              <div class="col-sm-3 rounded" id="tel">
                <?php echo htmlspecialchars($row['telephone']) ?>
              </div>
            </fieldset>
            <fieldset class="row py-3 shadow" name="">
              <div class="col-sm-3 rounded">Ville</div>
              <div class="col-sm-3 rounded" id="ville">
                <?php echo htmlspecialchars($row['ville']) ?>
              </div>
            </fieldset>
            <fieldset class="row py-3 shadow">
              <div class="col-sm-3 rounded">Date de naissance</div>
              <div class="col-sm-3 rounded" id="date_nais">
                <?php echo htmlspecialchars($row['date_naissance']) ?>
              </div>
            </fieldset>
            <fieldset class="row py-3 shadow">
              <div class="col-sm-3 rounded">Formation</div>
              <br />
              <div class="col-sm-3 rounded" id="formation">
                <?php echo htmlspecialchars($row['formation']) ?>
              </div>
            </fieldset>
          <?php } ?>
        </div>
        <div class="card-footer d-flex justify-content-center">
          <!-- boutton de louvertrure modal -->
          <button
            type="button"
            class="btn btn-primary btn-modifier"
            data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            modifier
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- modal -->
  <!-- Button trigger modal -->
  <!-- Modal -->
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
          <h1 class="modal-title fs-5" id="staticBackdropLabel">
            Mettre a jour son profil
          </h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="card">
              <div class="card-body">

                <div class="row">
                  <div class="col-6">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input
                      type="number"
                      name="telephone"
                      id="telephone"
                      class="form-control" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <label for="ville" class="form-label">Ville</label>
                    <input
                      type="text"
                      name="ville"
                      id="ville"
                      class="form-control" />
                  </div>
                  <div class="col-6">
                    <label for="" class="form-label">Durée</label>
                    <input
                      type="date"
                      name=""
                      id=""
                      value=""
                      class="form-control" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <label for="date_naissance" class="form-label">
                      Date de naissance
                    </label>
                    <input
                      type="date"
                      name="date_naissance"
                      id="date_naissance"
                      value=""
                      class="form-control" />
                  </div>
                  <div class="col-6">
                    <label for="niveau" class="form-label">Formation</label>

                    <input
                      type="text"
                      class="form-control"
                      name="formation"
                      id="formation" />
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
      </div>
    </div>
  </div>

  <script src="./vendor/js/bootstrap.bundle.min.js"></script>
</body>

</html>