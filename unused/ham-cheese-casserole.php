<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Ham and Cheese Casserole",
	"Mom\'s Resipe",
	"Good and easy"
);

$tagArray = array(
	$TagMeat,
	$TagFavorite
);

$instructionArray = array(
	'Preheat oven to 350F, set 9x13 pan aside.',
	'Cook onion in butter until softened.',
	'In medium bowl combine cooked onions and remaining ingredients. Pour into 13x9 pan.',
	'Cook for 45 minutes or until a knife inserted just off-center comes out clean.'
);

$ingredientArray = array(
	array("Butter",			1,		"tbsp",	"NULL"),
	array("Onion", 			1,		"ea",	"large, finely chopped"),
	array("Ham", 			1.5,	"lb",	"cooked, finely chopped"),
	array("Egg",	 		6,		"ea",	"lightly beaten"),
	array("American Cheese",8,		"oz",	"sharp processed, shredded"),
	array("Saltines",		30,		"ea",	"crushed"),
	array("Milk",	 		3, 		"cup",	"NULL"),
	array("Pepper",	 		0.125,	"tsp",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);