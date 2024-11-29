<?php


$message = "basic message";

if (isset($_POST['submit_add_admin'])) {
    if (isset($_POST["user_name"]) && !empty($_POST["user_name"]) &&
    isset($_POST["user_mail"]) && !empty($_POST["user_mail"]) &&
    isset($_POST["user_mdp"]) && !empty($_POST["user_mdp"]) &&
    isset($_POST["user_mdp2"]) && !empty($_POST["user_mdp2"]) ) {

        echo  "Formulaire bien rempli";
        require ('./model/admin_check_model.php');



    } else {
        echo "Remplissez correctement le formulaire";
    }
}




?>