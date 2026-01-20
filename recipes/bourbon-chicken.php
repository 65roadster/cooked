<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Bourbon Chicken",
	"https://therecipecritic.com/bourbon-chicken/#wprm-recipe-container-68557",
	""
);

$tagArray = array(
	$TagChicken
);

$instructionArray = array(
	'Start rice.',
	'In a medium sized skillet over medium high heat add the olive oil and chicken. Cook until brown and no longer pink.',
	'In a small bowl whisk together bourbon, soy sauce, brown sugar, and garlic. Whisk together cornstarch and water and add to the sauce.',
	'Pour the sauce over the chicken and simmer for 3-4 minutes until the sauce thickens up. Serve over rice and garnish with chopped green onions if desired.'
);

$ingredientArray = array(
	array("Chicken Thighs Boneless",	1,"lb",	"trimmed, cut into 1\" pieces"),
	array("Olive Oil",		1,		"Tbsp",	""),
	array("Bourbon",		0.25,	"cup",	""),
	array("Soy Sauce", 		0.5,	"cup",	""),
	array("Brown Sugar", 	0.25,	"cup",	""),
	array("Garlic",			3,		"clove","minced"),
	array("Cornstarch", 	1,		"tsp",	""),
	array("Water", 			1,		"Tbsp",	""),
	array("Scallion",		2,		"ea",	"minced"),
	array("White Rice",		1,		"cup",	"minced"),
	array("Water", 			1.25,	"cup",	""),
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);