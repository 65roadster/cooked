<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Roasted Chicken Thighs",
	"Downshiftology Crispy Baked Chicken Thighs",
	""
);

$tagArray = array(
	$TagMeat,
	$TagFavorite
);

$instructionArray = array(
	'Preheat oven to 425 degrees with rack in middle position.',
	'Pat chicken dry and allow to come to room temperature.',
	'Mix all herbs and spices together in a small bowl. Sprinkle 1/3 of spice mix on underside of chicken. Turn chicken skin side up and sprinkle remaining spices on top and under the skin. Place on roasting rack.',
	'Bake for 20-30 minutes or until internal temperature reaches 170 degrees. Turn on broiler for the last several minutes for extra crispy skin (not needed when prepared in the air fryer).',
	'If using pre-prepared spice mix, then 3g spice mix per thigh.'
);

$ingredientArray = array(
	array("Chicken Thighs Bone In", 8,	"ea",	"Bone in, skin on"),
	array("Garlic Powder",	2,	"tsp",	"NULL"),
	array("Onion Powder",	2,	"tsp",	"NULL"),
	array("Paprika",		1.5,"tsp",	"NULL"),
	array("Dried Oregano",	1,	"tsp",	"NULL"),
	array("Dried Thyme",	1,	"tsp",	"NULL"),
	array("Salt",			1,	"tsp",	"NULL"),
	array("Pepper",			0.5,"tsp",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);