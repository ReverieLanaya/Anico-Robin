<?php
class CategorieModel {
    private $bdd;

    public function __construct() {
        try {
            $this->bdd = new PDO("mysql:host=localhost;dbname=anicodb","root","", 
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getCategories() {
        try {
            $req = $this->bdd->query('SELECT categorie_id, categorie_name FROM categorie');
            return $req->fetchAll(PDO::FETCH_ASSOC);
        } catch(Exception $error) {
            return [];
        }
    }
}
?>
