<!-- ///////////////////////   GAUCHE   ///////////////////////// -->
<div class="gauche">
            
            <div class="gauche_p1">
                
                <?php
                $liens = [
                    ["href" => "index.php", "img_src" => "/View/pics/icones/home_icon.png", "alt" => "icone accueil", "text" => "Accueil"],
                    ["href" => "populaires.php", "img_src" => "/View/pics/icones/home_icon.png", "alt" => "icone page populaires", "text" => "Populaires"],
                    ["href" => "nouveaute.php", "img_src" => "/View/pics/icones/home_icon.png", "alt" => "icone accueil", "text" => "Nouveauté"],
                    ["href" => "categorie.php", "img_src" => "/View/pics/icones/home_icon.png", "alt" => "icone accueil", "text" => "Catégories"],
                    ["href" => "index.php", "img_src" => "/View/pics/icones/home_icon.png", "alt" => "icone accueil", "text" => "Voir mon profil"],
                ];

                foreach ($liens as $lien) {
                    echo '
                    <a href="' . htmlspecialchars($lien['href']) . '" class="liens_gauche">
                        <div class="icone_gauche">
                            <img src="' . htmlspecialchars($lien['img_src']) . '" alt="' . htmlspecialchars($lien['alt']) . '">
                        </div>
                        <span>' . htmlspecialchars($lien['text']) . '</span>
                    </a>';
                }

                // VERIFICATION SI ADMIN
                require './model/verification_admin.php';
                if ($isAdmin) {
                    echo '
                    <a href="admin.php" class="liens_gauche">
                        <div class="icone_gauche">
                            <img src="/View/pics/icones/home_icon.png" alt="icone accueil">
                        </div>
                        <span>Page Admin</span>
                    </a>';
                } else {
                    // Rien à afficher pour les utilisateurs non connectés ou non administrateurs
                }                
                ?>    
            </div>
    
            <div class="gauche_p2">
    
                <a href="index.php" class="liste_gauche">
                        <div class="icone_liste_gauche">
                            <img src="/View/pics/home_icon.png" alt="icone accueil">
                        </div>
    
                        <span> Ma liste d'anime</span>
    
                    </a>
            </div>
    
    
        </div>