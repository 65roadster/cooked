<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Waffles",
	"Mommy\'s home cooking, https://mommyshomecooking.com/eggless-waffles/",
	""
);

$tagArray = array(
	$TagBaking
);

$instructionArray = array(
	"Whisk dry ingredients in large bowl. Add the wet ingredients and mix just until smooth.",
	"Let batter rest at room temperature for 10 minutes. Preheat waffle iron.",
	"Spray waffle iron with non-stick cooking spray. Pour batter into waffle iron and cook according to manufacturer\'s instructions (most likely when you don\'t see steam coming out of the sides of the waffle iron).",
);

$ingredientArray = array(
	array("AP Flour", 			70,		"g",		""),
	array("Sugar",				32,		"g",		""),
	array("Baking Soda",		0.25,	"tsp",		""),
	array("Baking Powder", 		0.75,	"tsp",		""),
	array("Salt",				0.125,	"tsp",		""),
	array("Buttermilk",			4,		"oz",		""),
	array("Unsalted Butter",	1,		"Tbsp",		"melted"),
	array("Vanilla Extract",	0.5,	"tsp",		"")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);