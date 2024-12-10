<?php
require './model/connexion_bdd.php';
require './model/connexion_model.php';

if (isset($_POST['submit_connexion'])) {
    // Récupérer les données du formulaire
    $email = trim($_POST['user_mail']);
    $password = trim($_POST['user_mdp']);

    // Initialiser le modèle utilisateur
    $userModel = new UserModel($bdd);

    // Valider l'utilisateur
    $user = $userModel->validateUser($email, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user_name'] = $user['user_name'];
    } else {
        echo 'Erreur de connexion';
    }
} else {

}
?>
