<?php


namespace App\Controllers\PagesController;


use \PDO;
use \App\Models\RecipesModel;


function homeAction(PDO $conn)
{
    include_once __DIR__ . '/../models/recipesModel.php';
    $randomRecipe = RecipesModel\findOneByRand($conn);


    global $title, $content;
    $title = "Home";
    ob_start();
    include __DIR__ . '/../views/pages/home.php';
    $content = ob_get_clean();
}
