<?php
/*
	This file recurses through the recipes/ folder and includes each file as a php file
	Each php file is typically a stand alone recipe.
	
	There is a list of convenience variables that are used in legacy recipes.
	Those shouldn't be used going forward.

*/

include 'cooked_funcs.php';

/*
	*** deprecated
	The following convenience variables are for legacy recipes
*/

$APFlour = GetIngredientID($conn,"'AP Flour'");
$BreadFlour = GetIngredientID($conn, "'Bread Flour'");
$Sugar = GetIngredientID($conn, "'Sugar'");
$Yeast = GetIngredientID($conn, "'Yeast'");
$Water = GetIngredientID($conn, "'Water'");
$Salt = GetIngredientID($conn, "'Salt'");
$OliveOil = GetIngredientID($conn, "'Olive Oil'");
$Garlic = GetIngredientID($conn, "'Garlic'");
$RedPepperFlakes = GetIngredientID($conn, "'Red Pepper Flakes'");
$DriedOregano = GetIngredientID($conn, "'Dried Oregano'");
$DriedThyme = GetIngredientID($conn, "'Dried Thyme'");
$DriedBasil = GetIngredientID($conn, "'Dried Basil'");
$Tomatoes = GetIngredientID($conn, "'Tomatoes'");
$TomatoPaste = GetIngredientID($conn, "'Tomato Paste'");
$RedPepperFlakes = GetIngredientID($conn, "'Red Pepper Flakes'");

$grams = GetUnitsID($conn, "'g'");
$oz = GetUnitsID($conn, "'oz'");
$tsp = GetUnitsID($conn, "'tsp'");
$Tbsp = GetUnitsID($conn, "'Tbsp'");
$Cup = GetUnitsID($conn, "'Cup'");
$clove = GetUnitsID($conn, "'Clove'");
$medium = GetUnitsID($conn, "'Clove'");

$TagBaking = GetTagID($conn, "'baking'");
$TagBBQ = GetTagID($conn, "'bbq'");
$TagBread = GetTagID($conn, "'bread'");
$TagChicken = GetTagID($conn, "'chicken'");
$TagDessert = GetTagID($conn, "'dessert'");
$TagFavorite = GetTagID($conn, "'favorite'");
$TagMeat = GetTagID($conn, "'meat'");
$TagOther = GetTagID($conn, "'other'");
$TagPizza = GetTagID($conn, "'pizza'");
$TagSides = GetTagID($conn, "'sides'");

// iterate through all files recipes/ folder including subdirectories
$path="recipes/";
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

// for each file in that list get the path name
$fileList = array(); 
foreach ($rii as $file)
	if (!$file->isDir())
		$fileList[] = $file->getPathname();

// for each file in that list include it as a php file
foreach($fileList as $recipeFile) {
	echo '&nbsp &nbsp &nbsp &nbsp adding recipe: ' . $recipeFile . '<br>';
	include $recipeFile;
}
?>