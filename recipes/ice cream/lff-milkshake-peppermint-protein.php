<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"LFF Peppermint Protein Milkshake",
	"https://laurenfitfoodie.com/skinny-peppermint-protein-milkshake-copycat-chick-fil-a/",
	"Great taste per calories"
);

$tagArray = array(
	$TagDessert,
	$TagFavorite
);

$instructionArray = array(
	'Add all ingredients to belder and blend for 10 seconds.',
	'Taste, add Stevia for more sweetness, add milk to thin, add 2-3 ice cubes to thicken, blend again.',
	'Top with whipped cream and cherry if desired.'
);

$ingredientArray = array(
	array("Vanilla Protein Powder",	32,	"g", ""),
	array("Unsweetened Vanilla Almond Milk", 200, "g", ""),
	array("Ice Cubes",			 200,	"g", ""),
	array("Vanilla Ice Cream",	  45,	"g", ""),
	array("Peppermint Bark",	  15,	"g", ""),
	array("Liquid Stevia",		 0.5,	"tsp",	""),
	array("Peppermint Extract",	0.25,	"tsp",	"scant"),
	array("Xanthan Gum",		0.25,	"tsp",	""),
	array("Red Food Coloring",	   1,	"ea",	"optional"),
	array("Whipped Cream",		   1,	"tbsp", "optional"),
	array("Marachino Cherry",	   1,	"tsp",	"optional")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);