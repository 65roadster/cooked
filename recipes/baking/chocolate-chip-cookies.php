<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Chocolate Chip Cookies",
	"Crisco Ultimate Chocolate Chip Cookies",
	""
);

$tagArray = array(
	$TagBaking,
	$TagFavorite
);

$instructionArray = array(
	'Preheat oven to 375 degrees with rack in middle position.',
	'Combine Crisco, brown sugar, milk and vanilla in large bowl. Beat egg into creamed mixture.',
	'Combine flour, salt and baking soda. Mix into creamed mixture until just blended. Stir in chocolate chips.',
	'Scoop rouind balls of dough into baking sheet. Bake for 8 to 13 minutes for chewy or crispy cookies.'
);

$ingredientArray = array(
	array("Crisco",			150,	"g",	"NULL"),
	array("Brown Sugar",	275,	"g",	"NULL"),
	array("Milk",			30,		"g",	"NULL"),
	array("Vanilla Extract",1,		"tbsp",	"NULL"),
	array("Egg",			1,		"ea",	"NULL"),
	array("AP Flour",		245,	"g",	"NULL"),
	array("Salt",			1,		"tsp",	"NULL"),
	array("Baking Soda",	0.75,	"tsp",	"NULL"),
	array("Chocolate Chips",1,		"cup",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);
?>