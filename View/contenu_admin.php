<!-- ///////PARTIE PHP ///////////// -->
 


<!-- ///////PARTIE HTML ///////////// -->
<div class="contenu_admin">

    <div class="admin_categorie">
        <h3>Ajouter une nouvelle catégorie</h3>

        <form method="POST" class="form_ajout_categorie">
            <div class="form_ajout_categorie2">
                <div class="input_form">
                    <label for="nom_categorie">Nom de la catégorie:</label>
                    <input type="text" id="nom_categorie" name="nom_categorie" required>
                </div>

                <button type="submit" name="submit_categorie">Ajouter</button>
            </div>

            <?php 
            require 'model/categorie_check_model.php';
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
                    
                    require 'model/connexion_bdd.php';
                    require 'model/categorie_get_model.php';

                    ?>

                    <div class="input_form">
                        <label for="categorie_anime">Catégorie:</label> 
                        <select id="categorie_anime" name="categorie_anime[]" multiple required> 
                            <?php foreach($categories as $categorie): ?> 
                                <option value="<?= $categorie['categorie_id'];?>">
                                <?= $categorie['categorie_name']; ?>
                                </option> <?php endforeach; ?> </select>
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


</div>
