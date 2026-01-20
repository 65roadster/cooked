<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"LFF Tuscan Mac and Cheese",
	"Lauren Fit Foodie",
	""
);

$tagArray = array(
    $TagChicken,
	$TagFavorite
);

$instructionArray = array(
	'Cook pasta to al dente, drain with cold water.',
	'Sautee veggies. Heat 1/2 Tbsp olive oil over medium heat in large skillet. Add the onion, sautee for 2 minutes, add mushrooms, season with salt and pepper, sautee until tender. Transfer to a bowl and set aside.',
	'Cook chicken. Heat 1/2 Tbsp olive oil in skillet over medium heat. Add chicken, salt and pepper. Cook until no longer pink, about 5 minutes. Transfer to bowl with mushrooms.',
	'Make cheese sauce. Wipe skillet clean. Melt butter over medium heat, whisk in flour. Whisk in broth and milk, italian seasoning, salt and pepper. Increase heat to medium-high and bring to a boil. Continue whisking until mixture thickens. Remove from heat and stir in both cheeses.',
	'Make mac and cheese. Fpld sun dried tomatoes, cooked pasta, chicken, veggies, and spinach into cheese sauce. Sprinkle with freshly cracked peper and serve.'
);


$ingredientArray = array(
	array("Chicken Breasts",	1,		"lb",	"vut into bite sized pieces"),
	array("Elbow Macaroni",		12,		"oz",	"large"),
	array("Sun Dried Tomatoes",	8,		"oz",	"in oil, cut into small pieces"),
	array("Olive Oil",			1,		"tbsp",	""),
	array("Baby Bella Mushrooms", 8,	"oz",	""),
	array("OniOn",				0.5,	"cup",	""),
	array("Butter",				1,		"tbsp",	""),
	array("AP Flour",			2,		"tbsp",	""),
	array("Chicken Broth",		1,		"cup",	""),
	array("Milk",				420,	"g",	""),
	array("Italian Seasoning",	1,		"tbsp",	""),
	array("Salt",				0.5,	"tsp",	""),
	array("Pepper",				0.25,	"tsp",	""),
	array("Cheddar Cheese", 	112,	"g",	"sharp"),
	array("Mozzarella Cheese", 	84, 	"g",	""),
	array("Baby Spinach", 		4, 		"cup",	"")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);