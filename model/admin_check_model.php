<?php
require 'model/connexion_bdd.php';

$user_name = htmlentities(strip_tags(trim($_POST["user_name"])));
$user_mail = htmlentities(strip_tags(trim($_POST["user_mail"])));
$user_mdp = trim($_POST["user_mdp"]);
$user_mdp2 = trim($_POST["user_mdp2"]);

echo "<div>Mot de passe choisi : $user_mdp</div>";

try {

    $req = $bdd->prepare('SELECT * FROM user WHERE user_mail = ?');
    $req->bindParam(1, $user_mail, PDO::PARAM_STR);
    $req->execute();


    if ($req->rowCount() == 1) {
        echo "<div>Cette adresse mail est déjà prise</div>";
    } elseif ($user_mdp !== $user_mdp2) {
        echo "<div>Les deux mots de passe ne correspondent pas</div>";
    } else {
        echo "<div>Cette adresse mail n'est pas prise et les deux mots de passe correspondent</div>";
        
        require 'model/admin_ajout_model.php';
    }
} catch (Exception $error) {
    echo 'Erreur : ' . $error->getMessage();
}
?>
