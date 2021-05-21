<?php
require('function/addCategory.php'); 

//Création d'un tableau de catégories produit : tableau à 1 dimension
$monTableauCategories = array('Pantalon', 'T-Shirt', 'Pull', 'Sous-Vêtements', 'Robe', 'Chaussures', 'Accessoires', 'blbla');
$monTableauCategories = addCategory($monTableauCategories, 'Ma nouvelle categorie');

addCategoryBis('Ma nouvelle categorie utilisant les globales');

//Methode 1 Parcours du tableau pour afficher les catégories
/*
foreach($monTableauCategories as $uneCategorie):
    echo $uneCategorie;
endforeach;
*/

//Methode 2 avec {}
/*
foreach($monTableauCategories as $uneCategorie){
    echo $uneCategorie;
}
*/