<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Grandma Cookies (Sugar Cookie)",
	"Grandma Hanlon",
	"Excellent"
);

$tagArray = array(
	$TagBaking
);

$instructionArray = array(
	'Preheat oven to 375 degrees with rack in middle position.',
	'Cream sugar, shortening, oil and vanilla. Add eggs and beat well. Combine flour, cream of tartar, baking soda and salt. Mix dry ingredients into creamed mixture until just blended.',
	'Scoop balls onto baking sheet. Wet the bottom of a very flat glass with water, press into a dish of sugar, then on ball of dough pressing it down flat.',
	'Bake for about 10 minutes.'
);

$ingredientArray = array(
	array("Crisco",			150,"g",	"NULL"),
	array("Brown Sugar",	275,"g",	"NULL"),
	array("Milk",			2,	"tbsp",	"NULL"),
	array("Vanilla Extract",1,	"tbsp",	"NULL"),
	array("Egg",			1,	"ea",	"NULL"),
	array("AP Flour",		245,"g",	"NULL"),
	array("Salt",			1,	"tsp",	"NULL"),
	array("Baking Soda",	0.75,"tsp",	"NULL"),
	array("Chocolate Chips",1,	"cup",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);
?>