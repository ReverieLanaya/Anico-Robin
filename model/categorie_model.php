<?php 
   
try { 

$bdd = new PDO("mysql:host=localhost;dbname=anicodb","root","", 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$req = $bdd->prepare('INSERT INTO categorie (categorie_name) VALUES (?)'); 
$req->bindParam(1, $nom_categorie, PDO::PARAM_STR); 
$req->execute(); 
echo "Félicitations, la catégorie {$nom_categorie} a bien été ajoutée dans la BDD <br><br>"; 
} 
catch(Exception $error) 
{ 
    return $error->getMessage(); 

}
            
?>