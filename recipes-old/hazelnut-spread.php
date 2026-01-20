<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Hazelnut Spread",
	"ATK YouTube Channel",
	"Similar to nutella"
);

$tagArray = array(
	$TagDessert
);

$instructionArray = array(
	'If not roasted, spread hazelnuts on a cooking pan, toast in the oven for 12-15 minutes, until peels go from pale to dark brown. Let cool. Shake peels off in a pair of bowls (one flipped onto the other).',
	'Process nuts in food processor, scraping sides as needed, until oil is released and forms a smooth paste, about 5 minutes.',
	'Add remaining ingredients. Process for about 2 minutes, scraping bowl as needed. Add additional oil to make less stiff, if needed.'
);

$ingredientArray = array(
	array("Hazelnuts",		2,	"cup",	"NULL"),
	array("Powdered Sugar",	1,	"cup",	"NULL"),
	array("Cocoa Powder",	0.33,"cup",	"NULL"),
	array("Hazelnut Oil",	2,	"tbsp",	"NULL"),
	array("Vanilla Extract",1,	"tsp",	"NULL"),
	array("Salt",			0.125,"tsp",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);