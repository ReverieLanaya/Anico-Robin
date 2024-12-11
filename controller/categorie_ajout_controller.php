<?php
$message = "basic message";

if (isset($_POST['submit_categorie'])) {
    echo "TOTOTOTOOTTOTO <br>";
    if (isset($_POST["nom_categorie"]) && !empty($_POST["nom_categorie"]) &&
    isset($_FILES["image_categorie"]) && !empty($_FILES["image_categorie"])) {
       
        $nom_categorie = htmlentities(strip_tags(trim($_POST["nom_categorie"])));
        $image_categorie = $_FILES["image_categorie"];

        $target_dir = "view/pics/categories/"; 
        $target_file = $target_dir . basename($image_categorie["name"]); 
        $uploadOk = 1; 
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Vérifier si le fichier est une image réelle 
        $check = getimagesize($_FILES["image_categorie"]["tmp_name"]); 
        if($check !== false) { $uploadOk = 1;
        } 
        else { 
        echo "Le fichier n'est pas une image. <br>";
        $uploadOk = 0;
        } 
        // Vérifier si le fichier existe déjà 
        if (file_exists($target_file)) { echo "Désolé, le fichier existe déjà. <br>"; $uploadOk = 0;
        } 
        // Vérifier la taille du fichier 
        if ($_FILES["image_categorie"]["size"] > 500000) { 
            echo "Désolé, votre fichier est trop volumineux. <br>";
            $uploadOk = 0;
            } 
        // Autoriser certains formats de fichiers 
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) { 
            echo "Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés. <br>";
             $uploadOk = 0;
             } 
        // Vérifier si $uploadOk est défini à 0 par une erreur 
        if ($uploadOk == 0) { 
            echo "Désolé, votre fichier n'a pas été uploadé. <br>";

        } else {
            if (move_uploaded_file($_FILES["image_categorie"]["tmp_name"], $target_file)) {
                echo "Le fichier ". htmlspecialchars(basename($_FILES["image_categorie"]["name"])). " a été uploadé.";
                require 'model/categorie_check_model.php'; }
                else {
                    echo "Désolé, une erreur est survenue lors de l'upload de votre fichier.";
                }
            

        }
    } else {
        echo "Remplissez correctement le formulaire";
    }
}
?>
