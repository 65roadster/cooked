<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Gluten Free Neopolitan Pizza",
	"No Gluten No Problem Pizza, p55",
	"Excellent"
);

$tagArray = array(
	$TagPizza
);

$instructionArray = array(
	'In a small bowl, whisk together water, sugar and yeast. Set aside to allow the yeast to activate, about 5 minutes, until foamy.',
	'In a medium bowl, whisk together the  millet flour, potato starch, quinoa flour, tapioca starch, rice flour, psyllium husk, salt, and xanthan gum',
	'When the yeast mixture is foamy on top, add the oil and stir to combine.',
	'Pour the yeast mixture into the flour mixture and stir vigorously with a spoon until it is smooth, there are no lumps, and it forms a loose dough.'
);

$ingredientArray = array(
	array("Water", 				100,	"g",	"110F"),
	array("Sugar", 				1,		"tsp",	"NULL"),
	array("Active Dry Yeast",	1,		"tsp",	"NULL"),
	array("Millet Flour",		20,		"g",	"NULL"),
	array("Potato Starch",		20,		"g",	"NULL"),
	array("Quinoa Flour",		20,		"g",	"NULL"),
	array("Tapioca Starch",		20,		"g",	"NULL"),
	array("Brown Rice Flour",	10,		"g",	"NULL"),
	array("Psyllium Husk Powder",0.5,	"tsp",	"NULL"),
	array("Salt",				0.5,	"tsp",	""),
	array("Xanthan Gum",		0.5,	"tsp",	"NULL"),
	array("Olive Oil",			2, 		"tbsp",	"")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);