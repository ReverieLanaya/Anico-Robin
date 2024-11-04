<?php


$message = "basic message";

if (isset($_POST['submit_categorie'])) {
    if (isset($_POST["nom_categorie"]) && !empty($_POST["nom_categorie"])) {

        $nom_categorie = htmlentities(strip_tags(trim($_POST["nom_categorie"])));
        require 'model/categorie_model.php';

    } else {
        echo "Remplissez correctement le formulaire";
    }
}




?>