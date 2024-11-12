<?php


$message = "basic message";

if (isset($_POST['submit_anime'])) {
    if (isset($_POST["nom_anime"]) && !empty($_POST["nom_anime"]) &&
    isset($_POST["episode_anime"]) && !empty($_POST["episode_anime"]) &&
    isset($_POST["image_anime"]) && !empty($_POST["image_anime"]) &&
    isset($_POST["resume_anime"]) && !empty($_POST["resume_anime"])) {

        $nom_anime = htmlentities(strip_tags(trim($_POST["nom_anime"])));
        $episode_anime = htmlentities(strip_tags(trim($_POST["episode_anime"])));
        $categorie_anime = htmlentities(strip_tags(trim($_POST["categorie_anime"])));
        $resume_anime = htmlentities(strip_tags(trim($_POST["resume_anime"])));

        $target_dir = "view/pics/"; 
        $target_file = $target_dir . basename($_FILES["image_anime"]["name"]); 
        $uploadOk = 1; 
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        require 'model/anime_check_model.php';

    } else {
        echo "Remplissez correctement le formulaire";
    }
}




?>