<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de publication d'offres</title>
    <link rel="stylesheet" href="css/sidebar_admin.css">
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">

<body>
    <main class="row">
        <div class="col-2">
            <?php
            include 'include/sidebar_entreprise.php';
            ?>
        </div>
        <div class="col-10">

            <form action="" method="" class="my-5">
                <h5>Publier une offre de stage</h5>
                <fieldset class="border p-5">
                    <!--  -->
                    <div class="row">
                        <div class="col-6">
                            <label for="titre_poste" class="form-label">Titre de l'offre</label>
                            <input class="form-control" type="text" name="titre_poste" placeholder="Ex:Develloppeur web stagiaire"></input>
                        </div>
                        <div class="col-6">
                            <label for="nom_categorie" class="form-label">Categorie</label>
                            <select name="nom_categorie"" id=""></select>
                    </div>
                </div>
                <!--  -->
                    <div class=" row">
                                <div class="col-6">
                                    <label for="ville" class="form-label">Ville</label>
                                    <input type="text" class="form-control" placeholder="Ex:Douala" name="ville">
                                </div>
                                <div class="col-6">
                                    <label for="duree" class="form-label">Durée</label>
                                    <input type="text" name="duree">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="date_debut" class="form-label">date de debut</label>
                                <input type="date" class="form-control" name="date_debut">
                            </div>
                            <div class="col-6">
                                <label for="certification">Certification</label>
                                <select name="" id="">
                                    <option value="oui">oui</option>
                                    <option value="">oui</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="description">descrption de l'offre</label>
                                <textarea name="description" id="" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-item-center">
                            <button class="btn-primary my-2">Publier l'offre</button>
                        </div>
                </fieldset>
            </form>
        </div>
    </main>
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
</body>

</html>