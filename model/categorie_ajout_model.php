<?php 
   
try { 

require 'model/connexion_bdd.php';   

$req = $bdd->prepare('INSERT INTO categorie (categorie_name) VALUES (?)'); 
$req->bindParam(1, $nom_categorie, PDO::PARAM_STR); 
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