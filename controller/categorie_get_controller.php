<?php
class CategorieController {
    public function getCategories() {
        $categorieModel = new CategorieModel();
        return $categorieModel->getCategories();
    }
}
?>
