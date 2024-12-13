<?php
require 'connexion_bdd.php';
echo "Données admin icii";
$isAdmin = false;
var_dump($_SESSION);

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    echo "Données admin icii";

    try {
        // Préparer et exécuter la requête pour vérifier le rôle de l'utilisateur
        $query = $bdd->prepare('SELECT user_role FROM user WHERE user_id = ?');
        $query->bindParam(1, $user_id, PDO::PARAM_INT);
        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);

        echo "Données admin icii";
        
        if ($result && $result['user_role'] === 'admin') {
            $isAdmin = true;
        }
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
} else {
    // ne rien afficher
}
?>
