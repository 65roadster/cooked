<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Gluten Free Lemon Pound Cake",
	"Canelle et Vanille Bakes Simple: A New Way to Bake Gluten-Free, p116",
	"Excellent"
);

$tagArray = array(
	$TagBaking
);

$instructionArray = array(
	'Preheat oven to 350 degrees. Grease the inside of a 8-1/2 by 4-1/2 inch loaf pan with olive oil.',
	'In a large bowl, rub together sugar and lemon zest until fragrant. This helps release natural lemon oil. Whisk in the remaining ingredients until the batter is smooth. Pour the batter into the prepared pan and bake for 45 to 55 minutes, until a toothpick inserted in the center comes out clean. Let the cake cool in the pan for 15 minutes, then invert onto a wire rack. Let the cake cool completely before glazing if you want the glaze to stay thick on top of the cake. If the cake is warm, the glaze will melt and run off.',
	'To make the glaze, in a medium bowl, whisk together the powdered sugar and lemon juice until smooth and lump free. As you begin to whisk, it might seem too thick, but as the sugar absorbs the juice, the glaze will thin out. The glaze should be pourable but not too runny.',
);

$ingredientArray = array(
	array("Subgroup", 					0,		"",			"For the Cake"),
	array("Sugar", 						200,	"g",		""),
	array("Lemon Zest", 				3,		"lemon",	""),
	array("Superfine Brown Rice Flour",	140,	"g",		""),
	array("Almond Flour",				100,	"g",		"No lumps"),
	array("Eggs",						3,		"ea",		""),
	array("Whole Milk Yogurt",			115,	"g",		""),
	array("Olive Oil",					110,	"g",		""),
	array("Vanilla Extract",			1,		"Tbsp",		""),
	array("Kosher Salt",				0.5, 	"tsp",		""),
	array("Subgroup", 					0,		"",			"For the Glaze"),
	array("Powdered Sugar",				240, 	"g",		""),
	array("Lemon Juice",				2, 		"Tbsp",		""),
	array("Pistachios",					2, 		"Tbsp",		"For topping")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);