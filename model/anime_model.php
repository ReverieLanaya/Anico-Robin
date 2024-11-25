<?php
class AnimeModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAnimeBySlug($slug) {
        $stmt = $this->db->prepare("SELECT * FROM anime WHERE slug = ?");
        $stmt->execute([$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function incrementVisits($anime_id) {
        $stmt = $this->db->prepare("UPDATE anime SET nb_visite = nb_visite + 1 WHERE anime_id = ?");
        $stmt->execute([$anime_id]);
    }

    // Autres méthodes du modèle...
}
