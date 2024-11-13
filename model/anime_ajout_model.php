<?php 
   
try { 

    require 'model/connexion_bdd.php';   
    echo"<div>appel insertion des info dans bdd </div>";

    $req = $bdd->prepare('INSERT INTO anime (anime_name, anime_episodes, anime_picture, anime_resume) VALUES (?,?,?,?)'); 
 
    $req->bindParam(1, $nom_anime, PDO::PARAM_STR);
    $req->bindParam(2, $episode_anime, PDO::PARAM_STR); 
    $req->bindParam(3, $target_file, PDO::PARAM_STR); 
    $req->bindParam(4, $resume_anime, PDO::PARAM_STR); 
    // $req->execute(); 
    echo"<div>ERREUR EXECUTE </div>";

    if ($req->execute()) { 
        echo "Les informations ont été insérées avec succès.";
     } else { echo "Erreur lors de l'insertion des informations.";
         $errorInfo = $req->errorInfo(); 
         echo "SQLSTATE error code: " . $errorInfo[0] . "<br>"; 
         echo "Driver-specific error code: " . $errorInfo[1] . "<br>"; 
         echo "Driver-specific error message: " . $errorInfo[2] . "<br>";
     }

    echo"<div>PROBLEM  HERE </div>";
    echo "<div class='categorie_ajoutee'>
    Félicitations, l'anime {$nom_anime} a bien été ajoutée dans la BDD <br><br>

    </div>"; 

    $anime_id = $bdd->lastInsertId(); // Ajouter les catégories à l'anime 
    if (isset($_POST['categorie_anime']) && is_array($_POST['categorie_anime'])) { 
        foreach ($_POST['categorie_anime'] as $categorie_id) { 
            $catReq = $bdd->prepare('INSERT INTO anime_categorie (anime_id, categorie_id) VALUES (?, ?)'); 
            $catReq->execute([$anime_id, $categorie_id]); 
        
        } 
    }
    else { 
        echo "Désolé, une erreur est survenue lors de l'upload de votre fichier."; }
    } 
catch(Exception $error) 
{ 
    return $error->getMessage(); 
    echo "$error";

}
            
?>