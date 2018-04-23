
<?php

require_once('../classes/recipecollection.php');
$recipeCollection = new RecipeCollection();

require_once('../classes/recipes.php');
$recipe = new Recipe();

require_once('../classes/render.php');
$render = new Render();

require_once('../inc/allrecipes.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Cookbook</title>
</head>
<body>
    <h1>My Cookbook</h1>
    <ul>
    
   

        <?php  echo displayRecipe($recipe); ?>
    
    </ul>
</body>
</html>

