<?php
class CategorieModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getCategories() {
        $stmt = $this->db->query('SELECT * FROM categorie');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
