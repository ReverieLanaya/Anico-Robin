<?php



require 'model/connexion_bdd.php';

$req = $bdd->prepare('SELECT *  from categorie WHERE categorie_name= ?'); 
$req->bindParam(1, $nom_categorie, PDO::PARAM_STR); 
$req->execute();  

if ($req->rowCount() == 0) { 

    require 'model/categorie_ajout_model.php';
    
} 
else{

    echo"<div>La catégorie {$nom_categorie} existe déjà. </div>";

}
            
?>