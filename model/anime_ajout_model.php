<?php 
   
try { 

    require 'model/connexion_bdd.php';   
    echo"<div>appel insertion des info dans bdd </div>";

    // Fonction pour générer un slug
    function generateSlug($string) {
        $string = strtolower($string);
        $string = preg_replace('/[^a-z0-9-]+/', '-', $string);
        $string = trim($string, '-');
        return $string;
    }

    $slug = generateSlug($nom_anime);

    $req = $bdd->prepare('INSERT INTO anime (anime_name, anime_episodes, anime_picture, anime_resume, slug) VALUES (?,?,?,?,?)'); 

    $req->bindParam(1, $nom_anime, PDO::PARAM_STR);
    $req->bindParam(2, $episode_anime, PDO::PARAM_STR); 
    $req->bindParam(3, $target_file, PDO::PARAM_STR); 
    $req->bindParam(4, $resume_anime, PDO::PARAM_STR); 
    $req->bindParam(5, $slug, PDO::PARAM_STR); 
    $req->execute(); 

    echo "<div class='categorie_ajoutee'>
    Félicitations, l'anime {$nom_anime} a bien été ajoutée dans la BDD <br><br>

    </div>"; 

    // Récupérer l'ID du nouvel anime 
    $anime_id = $bdd->lastInsertId(); 

    if (!empty($categorie_ids)) { 
        try { 
            $catReq = $bdd->prepare('INSERT INTO anime_categorie (anime_id, categorie_id) VALUES (?, ?)');

             foreach ($categorie_ids as $categorie_id) { 
                $catReq->execute([$anime_id, $categorie_id]); 
            } 
            echo "Catégories ajoutées avec succès."; 
        } 
            catch (Exception $error) { 
                echo "Erreur lors de l'insertion des catégories : $error"; 
            } } 
            else { 
                echo "Aucune catégorie sélectionnée."; }
    } 
catch(Exception $error) { 
    echo "$error";

}
            
?>