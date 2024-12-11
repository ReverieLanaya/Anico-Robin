<?php 
require 'model/connexion_bdd.php';    

try {
    $query = $bdd->prepare('INSERT INTO categorie (categorie_name, categorie_picture) VALUES (?,?)');
    $query->bindParam(1, $nom_categorie, PDO::PARAM_STR);
    $query->bindParam(2, $target_file, PDO::PARAM_STR);
    $query->execute();

    echo 'Catégorie ajoutée avec succès';
} catch (Exception $e) {
    echo $e;
}
            
?>