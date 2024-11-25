<?php

require 'model/connexion_bdd.php';


try {
    $req = $bdd->query('SELECT categorie_id, categorie_name FROM categorie');
    return $req->fetchAll(PDO::FETCH_ASSOC);
} catch(Exception $error) {
    return [];
}
    

?>
