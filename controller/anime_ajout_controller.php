<?php


$message = "basic message";

if (isset($_POST['submit_anime'])) {
    if (isset($_POST["nom_anime"]) && !empty($_POST["nom_anime"]) &&
    isset($_POST["episode_anime"]) && !empty($_POST["episode_anime"]) &&
    isset($_FILES["image_anime"]) && !empty($_FILES["image_anime"]) &&
    isset($_POST["categorie_anime"]) && !empty($_POST["categorie_anime"]) &&
    isset($_POST["resume_anime"]) && !empty($_POST["resume_anime"])) {

        $nom_anime = htmlentities(strip_tags(trim($_POST["nom_anime"])));
        echo "Le nom de l'anime est {$nom_anime}"; 
        $episode_anime = htmlentities(strip_tags(trim($_POST["episode_anime"])));
        $categorie_ids = isset($_POST['categorie_anime']) && is_array($_POST['categorie_anime']) ? $_POST['categorie_anime'] : [];
        $resume_anime = htmlentities(strip_tags(trim($_POST["resume_anime"])));

        echo "Catégories récupérées : "; 
        print_r($categorie_ids);

        $target_dir = "view/pics/"; 
        $target_file = $target_dir . basename($_FILES["image_anime"]["name"]); 
        $uploadOk = 1; 
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Vérifier si le fichier est une image réelle 
        $check = getimagesize($_FILES["image_anime"]["tmp_name"]); 
        if($check !== false) { $uploadOk = 1;
        } 
        else { 
        echo "Le fichier n'est pas une image.";
        $uploadOk = 0;
        } 
        // Vérifier si le fichier existe déjà 
        if (file_exists($target_file)) { echo "Désolé, le fichier existe déjà."; $uploadOk = 0;
        } 
        // Vérifier la taille du fichier 
        if ($_FILES["image_anime"]["size"] > 500000) { 
            echo "Désolé, votre fichier est trop volumineux.";
            $uploadOk = 0;
            } 
        // Autoriser certains formats de fichiers 
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) { 
            echo "Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
             $uploadOk = 0;
             } 
        // Vérifier si $uploadOk est défini à 0 par une erreur 
        if ($uploadOk == 0) { 
            echo "Désolé, votre fichier n'a pas été uploadé.";

        } else {
            if (move_uploaded_file($_FILES["image_anime"]["tmp_name"], $target_file)) {
                echo "Le fichier ". htmlspecialchars(basename($_FILES["image_anime"]["name"])). " a été uploadé.";
                require 'model/anime_check_model.php'; }
                else {
                    echo "Désolé, une erreur est survenue lors de l'upload de votre fichier.";
                }
            

        }



    } else {
        echo "Remplissez correctement le formulaire";
    }
}




?>