<?php  
try {

    require './model/connexion_bdd.php';
    echo 'connexionBDD  réussie';

    $user_name = htmlentities(strip_tags(trim($_POST["user_name"])));
    $user_mail = htmlentities(strip_tags(trim($_POST["user_mail"])));
    $user_mdp = password_hash($_POST["user_mdp"], PASSWORD_DEFAULT);

    echo " mot de passe haché : $user_mdp";

    $req = $bdd->prepare('INSERT INTO user (user_mail, user_name, user_mdp) VALUES (?,?,?)');
    $req->bindParam(1, $user_mail, PDO::PARAM_STR);
    $req->bindParam(2, $user_name, PDO::PARAM_STR);
    $req->bindParam(3, $user_mdp, PDO::PARAM_STR);

    $req->execute();

    echo 'Création du compte réussi !';


}  catch (Exception $error ) {
    echo "$error"  ;

}

?>