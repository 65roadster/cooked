<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Kung Pao Chicken",
	"https://www.seriouseats.com/recipes/2014/07/takeout-style-kung-pao-chicken-diced-chicken-peppers-peanuts-recipe.html",
	""
);

$tagArray = array(
	$TagMeat,
	$TagFavorite
);

$instructionArray = array(
	'<#>Velvet Chicken:</#>',
	'Combine chicken, salt, pepper, soy sauce, wine, sugar, sesame oil and cornstarch in a medium bowl and toss to coat. Set aside for 20 minutes.',
	'<#>Stir Fry:</#>',
	'Combine soy sauce, wine, vinegar, chicken broth, sugar, sesame oil and cornstarch in a small bowl and wisk together until homogenous. Set aside.',
	'Heat 1 tbsp vegetable oil in pan over high heat until smoking. Add chicken, spread into a single layer and cook without moving until lightly browned, 1-2 minutes. Continue cooking, tossing and stirring frequently until the exterior is opaque but chicken is still slightly raw in the center, about 2 minutes longer. Transfer to a clean bowl and set aside.',
	'Wipe out pan and heat remaining 2 Tbsp oil over high heat until smoking. Add vegetables and cook, stirring and tossing occasionally until brightly colored and browned in spots, about 1-2 minutes. Add peanuts and toss to combine.',
	'Push vegetables up side of pan to clear a space in the center. Add garlic, ginger, scallions and dried chilies and cook, stirring, until fragrant, about 30 seconds. Return chicken to pan and toss to combine. Stir sauce and add to wok. Cook, tossing until sauce thickens and coats ingredients and chicken is cooked through, about 1-2 minutes longer. Serve.'
);

$ingredientArray = array(
	array("Subgroup", 		0,	"",		"For Chicken"),
	array("Chicken Thighs Boneless",	1.5,"lb",	"trimmed, cut into 3/4\" pieces"),
	array("Kosher Salt",	0.5,"tsp",	""),
	array("White Pepper",	0.25,"tsp",	""),
	array("Soy Sauce", 		1,	"tsp",	""),
	array("Shaoxing Wine", 	5,	"g",	""),
	array("Sugar", 			4,  "g",	""),
	array("Sesame Oil",		2.5,"g",	""),
	array("Cornstarch", 	0.5,"tsp",	""),
	array("Subgroup", 		0,	"",		"Stir Fry"),
	array("Soy Sauce",		50,	"g",	""),
	array("Shaoxing Wine", 	40,	"g",	""),
	array("Distilled White Vinegar", 40, "g",	""),
	array("Chicken Broth",	6,	"tbsp",	""),
	array("Sugar",			45,	"g",	""),
	array("Sesame Oil",		15,	"g",	""),
	array("Cornstarch", 	15,	"g",	""),
	array("Vegetable Oil",	2.5,"tbsp",	""),
	array("Carrot",			2,	"ea",	"sliced into 1/4\" pieces"),
	array("Broccoli",		0.5,"ea",	"1 crown cut into pieces"),
	array("Red Bell Pepper",1,	"ea",	"cut into 3/4\" dice"),
	array("Celery Stalk",	2,	"ea",	"cut into 3/4\" dice"),
	array("Roasted Unsalted Peanuts",73,"g","1/2 cup"),
	array("Garlic",			15,	"g",	"minced"),
	array("Ginger",			10,	"g",	"minced"),
	array("Scallion",		2,	"ea",	"minced, white/light parts only"),
	array("Arbol Chilis",	8,	"ea",	"remove/reserve seeds"),
	array("Arbol Chili Seeds",	0.125,	"tsp",	"rounded tsp")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);