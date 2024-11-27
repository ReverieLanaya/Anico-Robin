<?php
require_once 'model/connexion_bdd.php'; 
require_once 'model/categorie_get_model.php';

class CategorieController {
    private $categorieModel;

    public function __construct($categorieModel) {
        $this->categorieModel = $categorieModel;
    }

    public function getCategories() {
        return $this->categorieModel->getCategories();
    }
}

// Initialiser la connexion à la base de données
$database = new PDO('mysql:host=localhost;dbname=anicodb', 'root', '');
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Initialiser le modèle et le contrôleur
$categorieModel = new CategorieModel($database);
$categorieController = new CategorieController($categorieModel);

// Récupérer les catégories
$categories = $categorieController->getCategories();
?>
