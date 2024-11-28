<?php


$message = "basic message";

if (isset($_POST['submit_inscription'])) {
    if (isset($_POST["user_name"]) && !empty($_POST["user_name"]) &&
    isset($_POST["user_mail"]) && !empty($_POST["user_mail"]) &&
    isset($_POST["user_mdp"]) && !empty($_POST["user_mdp"]) &&
    isset($_POST["user_mdp2"]) && !empty($_POST["user_mdp2"]) ) {

        require ('./model/account_check_model.php');



    } else {
        echo "Remplissez correctement le formulaire";
    }
}




?>