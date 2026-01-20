<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Chicken Bites",
	"Ray",
	""
);

$tagArray = array(
	$TagChicken,
	$TagFavorite
);

$instructionArray = array(
	'Cut chicken into desired sized pieces. Combine flour and seasonings. Dip chicken pieces into buttermilk, then seasoned flour.',
	'Fry in 1/2\" of vegetable oil.'
);

$ingredientArray = array(
	array("Chicken Breasts",4,	"ea",	"NULL"),
	array("Salt",			2,	"tsp",	"NULL"),
	array("Paprika",		2,	"tsp",	"NULL"),
	array("Buttermilk",		1,	"cup",	"NULL"),
	array("AP Flour", 		2,	"cup",	"NULL"),
	array("Pepper",			0.25,"tsp",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);