
    
<header>
    <div class="header">

           <div class="logo_header">    

                <img src="/View/pics/anico_logo.jpeg" alt="Logo Anico Robin">    
            
            </div> 
            
        <div class="recherche">
            <img src="/View/pics/recherche_icone.png" alt="recherche">
            <h3>Rechercher</h3>
        </div>


        <?php

        require ('./controller/connexion_controller.php');
        if (isset($_SESSION['user_id'])) { 
            echo '<h4>' . htmlspecialchars($_SESSION['user_name']) . '</h4>';
            echo '<img src="" alt="">';
        } else {
            echo '
            <div class="connexion_header" onclick="openForm()">
                <button>Se connecter</button>
            </div>';
        }
        ?>



        <!-- <div class="connexion_header" onclick="openForm()">
            <button>
                Se  connecter 
            </button>
        </div> -->

</div>

<div class="login_popup myForm" id="myForm">

    <div class="login_info">

        <button class="close_button" onclick="closeForm()">
            X
        </button>

        <div class="login_info2">
        
            <h3>Se connecter</h3>


            <form method="post" class="login_form">
               
                    <label for="user_mail">Adresse mail:</label>
                    <input type="text" id="user_mail" name="user_mail" required>
                
                
                    <label for="user_mdp">Mot de passe:</label>
                    <input type="password" id="user_mdp" name="user_mdp" required>
               
                <button type="submit">Se connecter</button>
            </form>

            <div class="oubli_mdp">

            <button class="mdp_button" onclick="openForm1()">Mot de passe oublié</button>
            <button class="inscription_button" onclick="openForm2()"> S'inscrire</button>

            </div>


        </div>

    </div>

    <div class="mdp_oublie myForm" id="myForm1">

        <div class="login_info" >

            <button class="close_button" onclick="closeForm()">
                X
            </button>

            <div class="login_info2">

                <h3>Se connecter</h3>


                <form method="post" class="login_form">
                
                        <label for="user_mail">Adresse mail</label>
                        <input type="text" id="user_mail" name="user_mail" required>
                
                    <button type="submit">Envoyer</button>
                </form>

                <div class="retour_connex">

                <button class="mdp_button" onclick="closeForm1()">Revenir à la connexion</button>

                </div>


                </div>

        </div>
    </div>

    <div class="inscription myForm" id="myForm2" >

        <div class="login_info"  >

                <button class="close_button" onclick="closeForm()">
                    X
                </button>

                <div class="login_info2">

                    <h3>Se connecter</h3>


                    <form method="post" class="login_form">
                    
                            <label for="user_mail">Nom d'utilisateur</label>
                            <input type="text" id="user_name" name="user_name" required>

                            <label for="user_mail">Adresse mail</label>
                            <input type="text" id="user_mail" name="user_mail" required>

                            <label for="user_mail">Mot de passe</label>
                            <input type="text" id="user_mdp" name="user_mdp" required>

                            <label for="user_mail">Confirmer le mot de passe</label>
                            <input type="text" id="user_mdp2" name="user_mdp2" required>


                    
                        <button type="submit" name="submit_inscription" >Envoyer</button>
                    </form>

                    <?php
                    require './controller/inscription_controller.php' ?>

                    <div class="retour_connex">

                    <button class="mdp_button" onclick="closeForm2()">Revenir à la connexion</button>

                    </div>


                </div>

        </div>
    </div>


</div>



</header>