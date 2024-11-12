<?php



require 'model/connexion_bdd.php';

$req = $bdd->prepare('SELECT *  from categorie WHERE anime_name= ?'); 
$req->bindParam(1, $nom_anime, PDO::PARAM_STR); 
$req->execute();  

if ($req->rowCount() == 0) { 

    require 'model/anime_ajout_model.php';
    
} 
else{

    echo"<div>La catégorie {$nom_categorie} existe déjà. </div>";

}
            
?>