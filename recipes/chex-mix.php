<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Chex Mix",
	"Chex Cereal Box",
	""
);

$tagArray = array(
	$TagOther
);

$instructionArray = array(
	'Preheat oven to 250F',
	'Melt butter in microwave, stir in seasonings and Worcestershire sauce. Toss with cereal in large roasting pan.',
	'Bake 1 hour, sirring every 15 minutes. Spread out to cool, eat it up.'
);

$ingredientArray = array(
	array("Corn Chex", 		90,	"g",	"NULL"),
	array("Rice Chex", 		90,	"g",	"NULL"),
	array("Wheat Chex", 	3,	"cup",	"NULL"),
	array("Butter",			6,	"tbsp",	"NULL"),
	array("Worcestershire Sauce",	2,	"tbsp",	"NULL"),
	array("Seasoning Salt", 1.5, "tsp", "NULL"),
	array("Garlic Powder",	0.75,"tsp", "NULL"),
	array("Onion Powder",	0.5, "tsp", "NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);