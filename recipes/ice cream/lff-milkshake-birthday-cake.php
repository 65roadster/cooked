<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"LFF Birthday Cake Milkshake",
	"https://laurenfitfoodie.com/birthday-cake-protein-milkshake/",
	"Great taste per calories"
);

$tagArray = array(
	$TagDessert,
	$TagFavorite
);

$instructionArray = array(
	'Add all ingredients except sprinkles to blender and blend for 10 seconds.',
	'Taste, add Stevia for more sweetness, add milk to thin, add 2-3 ice cubes to thicken, blend again.',
	'Top with sprinkles.'
);

$ingredientArray = array(
	array("Vanilla Protein Powder",	32,	"g", ""),
	array("Unsweetened Vanilla Almond Milk", 200, "g", ""),
	array("Ice Cubes",			 200,	"g", 	""),
	array("Vanilla Ice Cream",	  45,	"g", 	""),
	array("Cake Batter Extract",   1,	"tsp",	""),
	array("Liquid Stevia",	   	0.25,	"tsp",	""),
	array("Xanthan Gum",		0.25,	"tsp",	""),
	array("Sprinkles",			   1,	"tsp",	"")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);