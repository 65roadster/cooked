<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Chex Mix",
	"Chex Cereal Box",
	""
);

$tagArray = array(
	$TagFavorite
);

$instructionArray = array(
	'Preheat oven to 250F',
	'Melt butter in roasting pan, stir in seasoning salt and Worcestershire sauce. Add cereal in large roasting pan.',
	'Bake 1 hour, sirring every 15 minutes. Spread out to cool, eat it up.'
);

$ingredientArray = array(
	array("Corn Chex", 			125,	"g",	"NULL"),
	array("Rice Chex", 			125,	"g",	"NULL"),
	array("Butter",				6,		"tbsp",	"NULL"),
	array("Worcestershire Sauce",1.5,	"tbsp",	"NULL"),
	array("Seasoning Salt", 	1.25,	"tsp",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);