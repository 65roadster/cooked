<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"LFF Cookies and Cream Milkshake",
	"https://laurenfitfoodie.com/cookies-and-cream-protein-milkshake/",
	"Great taste per calories"
);

$tagArray = array(
	$TagDessert,
	$TagFavorite
);

$instructionArray = array(
	'Add all ingredients except oreos to blender and blend for 10 seconds.',
	'Taste, add Stevia for more sweetness, add milk to thin, add 2-3 ice cubes to thicken, blend again.',
	'Add Oreo cookies and pulse a few times to break up slightly.'
);

$ingredientArray = array(
	array("Vanilla Protein Powder",	32, "g", ""),
	array("Unsweetened Vanilla Almond Milk", 200, "g", ""),
	array("Ice Cubes",			 200,	"g", ""),
	array("Vanilla Ice Cream",	  45,	"g", ""),
	array("Black Cocoa Powder",    1,	"tbsp", ""),
	array("Oreos",				   2,	"ea",	"or 5 oreo minis"),
	array("Vanilla Extract",	   1,	"tsp",	""),
	array("Xanthan Gum",		0.25,	"tsp",	""),
	array("Liquid Stevia",	  	0.25,	"tsp",	"")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);