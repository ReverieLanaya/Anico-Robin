<!-- ///////PARTIE PHP ///////////// -->

<?php
// VERIFICATION SI ADMIN
require './model/verification_admin.php';
if ($isAdmin): ?>

<div class="contenu_admin">

    <div class="admin_categorie">
        <h3>Ajouter une nouvelle catégorie</h3>

        <form method="POST" class="form_ajout_categorie" enctype="multipart/form-data">
            <div class="form_ajout_categorie2">
                <div class="input_form">
                    <label for="nom_categorie">Nom de la catégorie:</label>
                    <input type="text" id="nom_categorie" name="nom_categorie" required>  
                </div>

                <div class="input_form">
                    <label for="image_categorie">Image:</label>
                    <input type="file" id="image_categorie" name="image_categorie" required>
                </div>

                <button type="submit" name="submit_categorie">Ajouter</button>
            </div>

            <?php 
            require 'controller/categorie_ajout_controller.php';
            ?>
            
        </form>

        
    </div>
        
    <div class="admin_anime">
        <h3>Ajouter un nouvel anime</h3>

        <form method="POST" class="form_ajout_anime" enctype="multipart/form-data">
                <div class="form_ajout_anime2">
                    <div class="input_form">
                        <label for="nom_anime">Nom de l'anime:</label>
                        <input type="text" id="nom_anime" name="nom_anime" required>
                    </div>
                    
                    <div class="input_form">
                        <label for="episode_anime">Nombre d'épisode:</label>
                        <input type="text" id="episode_anime" name="episode_anime" required>
                    </div>

                    <?php
                    require 'controller/categorie_get_controller.php'; 
                    ?>

                    <div class="input_form">
                        <label for="categorie_anime">Catégorie:</label>
                        <select id="categorie_anime" name="categorie_anime[]" multiple required>
                            <?php foreach($categories as $categorie): ?>
                                <option value="<?= htmlspecialchars($categorie['categorie_id']); ?>">
                                    <?= htmlspecialchars($categorie['categorie_name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    
                        
                    <div class="input_form">
                        <label for="image_anime">Image:</label>
                        <input type="file" id="image_anime" name="image_anime" required>
                    </div>

                
                    <div class="input_form ">
                        <label for="resume_anime">Petit résumé:</label>
                        <input type="text" id="resume_anime" name="resume_anime" class="input_resume" required>  
                    </div>
                    

                    <button type="submit" name="submit_anime">Ajouter</button>
                </div>

                <?php 
                require 'controller/anime_ajout_controller.php';
                ?>
                
            </form>



    </div>

    <div class="admin_edit_anime">
        <h3>Modifier anime</h3>

        <form method="POST" class="form_edit_anime">
                <div class="form_ajout_categorie2">

                    <div class="input_form">
                        <label for="nom_anime">Nom de l'anime:</label>
                        <input type="text" id="nom_anime" name="nom_anime" required>
                    </div>

                    <div class="input_form">
                        <label for="episode_anime">Nombre d'épisode:</label>
                        <input type="text" id="episode_anime" name="episode_anime" required>
                    </div>

                    <div class="input_form">
                        <label for="categorie_anime">Catégorie:</label>
                        <input type="text" id="categorie_anime" name="categorie_anime" required>
                    </div>
                                        
                    <div class="input_form">
                        <label for="image_anime">Image:</label>
                        <input type="file" id="image_anime" name="image_anime" required>
                    </div>

                    <div class="input_form">
                        <label for="resume_anime">Petit résumé:</label>
                        <input type="text" id="resume_anime" name="resume_anime" class="input_resume" required>
                    </div>

                        <button type="submit" name="submit_anime">Ajouter</button>
                </div>
                
            </form>



    </div>

    <div class="admin_account">
        

        <h3>Créer un compte admin</h3>


        <form method="post" class="login_form">

                <label for="user_mail">Nom d'utilisateur</label>
                <input type="text" id="user_name" name="user_name" required>

                <label for="user_mail">Adresse mail</label>
                <input type="text" id="user_mail" name="user_mail" required>

                <label for="user_mail">Mot de passe</label>
                <input type="text" id="user_mdp" name="user_mdp" required>

                <label for="user_mail">Confirmer le mot de passe</label>
                <input type="text" id="user_mdp2" name="user_mdp2" required>



            <button type="submit" name="submit_add_admin" >Envoyer</button>
        </form>

        <?php
        require './controller/ajout_admin_controller.php' ?>

    </div>

</div>


<?php else :?>
<h3 class="msg_page_admin">Vous ne pouvez pas accéder à cette page</h3>

<?php endif; ?>
?>
