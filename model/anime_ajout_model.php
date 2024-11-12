<?php 
   
try { 

require 'model/connexion_bdd.php';   

$req = $bdd->prepare('INSERT INTO anime (anime_name, anime_episode, anime_picture,"resume") VALUES (?,?,?,?,?)'); 
$req->bindParam(1, $anime_categorie, PDO::PARAM_STR); 
$req->bindParam(2, $anime_categorie, PDO::PARAM_STR); 
$req->bindParam(3, $anime_categorie, PDO::PARAM_STR); 
$req->bindParam(4, $anime_categorie, PDO::PARAM_STR); 
$req->bindParam(5, $anime_categorie, PDO::PARAM_STR); 
$req->execute(); 
echo "<div class='categorie_ajoutee'>
Félicitations, la catégorie {$nom_categorie} a bien été ajoutée dans la BDD <br><br>

</div>"; 
} 
catch(Exception $error) 
{ 
    return $error->getMessage(); 

}
            
?>