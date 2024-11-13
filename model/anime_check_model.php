<?php



require 'model/connexion_bdd.php';

echo"<div>appel de check_model </div>";
$req = $bdd->prepare('SELECT *  from anime WHERE anime_name= ?'); 
$req->bindParam(1, $nom_anime, PDO::PARAM_STR); 
$req->execute();  

if ($req->rowCount() == 0) { 

    require 'model/anime_ajout_model.php';
    echo"<div>L'anime {$nom_anime} existe pas encore. </div>";
    
} 
else{

    echo"<div>L'anime {$nom_anime} existe déjà. </div>";

}
            
?>