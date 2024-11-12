<?php 
class CategorieController { 

    

    public function getCategories() { 
        require 'model/connexion_bdd.php';
        $categorieModel = new CategorieModel(); 
        return $categorieModel->getCategories(); 
        } 
    } 
?>