<?php 

class AnimeController {
    private $animeModel;

    public function __construct($animeModel) {
        $this->animeModel = $animeModel;
    }

    public function showAnimeDetails($slug) {
        // Récupérer l'anime par slug
        $anime = $this->animeModel->getAnimeBySlug($slug);

        // Incrémenter le compteur de visites
        if ($anime) {
            $this->animeModel->incrementVisits($anime['anime_id']);
        }

        // Inclure la vue pour afficher les détails de l'anime
        include 'View/contenu_page_anime.php';
    }

    // Autres méthodes du contrôleur...
}
