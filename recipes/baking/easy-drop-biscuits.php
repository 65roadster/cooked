<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Easy Buttermilk Drop Biscuits",
	"Cook\'s Illustrated Baking Book, 2013, p54",
	""
);

$tagArray = array(
	$TagBaking
);

$instructionArray = array(
	'Adjust oven rack to upper middle position and preheat to 475 degrees. Line rimmed baking sheet with parchment paper.
		Whisk flour, baking powder, baking soda, sugar, and salt in large bowl. Combine buttermilk and 4 tablespoons
		melted butter in medium bowl, stirring until butter forms small clumps.',
	'Add buttermilk mixture to flour mixture and stir with rubber spatula until just incorporated and batter pulls away from sides of bowl.
		Scoop level amounts of batter and drop onto prepared sheet
		(biscuits should measure about 2-1/4 inches in diameter and 1-1/4 inches high). Repeat with remaining batter,
		spacing biscuits about 1-1/2 inches apart. Bake until tops are golden brown and crisp, 12 to 14 minutes,
		rotating sheet halfway through baking.',
	'Brush biscuit tops with remaining 1 tablespoon melted butter. Transfer sheet to wire rack and let cool for 5 minutes before serving.'
);

$ingredientArray = array(
	array("AP Flour", 			5,		"oz",		""),
	array("Baking Powder", 		1,		"tsp",		""),
	array("Baking Soda",		0.25,	"tsp",		""),
	array("Sugar",				0.5,	"tsp",		""),
	array("Salt",				0.375,	"tsp",		""),
	array("Buttermilk",			4,		"oz",		"chilled"),
	array("Unsalted Butter",	4,		"Tbsp",		"melted and cooled slightly"),
	array("Butter",	1,		"Tbsp",		"melted")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);