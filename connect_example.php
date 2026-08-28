<?php
// Copie ce fichier en "connect.php" et renseigne tes propres identifiants
$con = new mysqli('localhost', 'ton_utilisateur', 'ton_mot_de_passe', 'stage_link');
if (!$con) {
    echo "connection successfull";
}