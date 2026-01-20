<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Ultimate Green Bean Casserole",
	"Cook\'s Illustrated Cookbook, p250",
	""
);

$tagArray = array(
	$TagSides
);

$instructionArray = array(
	'<#>Topping:</#>',
	'Pulse bread, butter, salt, and pepper in food processor until mixture resembles coarse crumbs, about 10 pulses. Transfer to large bowl and toss with onions; set aside.',
	'<#>Beans and Sauce:</#>',
	'Adjust oven rack to middle position and heat to 425 degrees. Fill large bow with ice water. Line baking sheet with paper towels.',
	'Bring 4 quarts of water to boil in Dutch oven. Add beans and 2 Ttablespoons salt. Cook beans until bright green and crisp-tender, about 6 minutes. Drain beans in colander, then plunge immediately into ice water to stop cooking. Spread beans on prepared baking sheet to drain.',
	'Melt butter in now-empty Dutch oven over medium-high heat. Add mushrooms, garlic, 3/4 tsp salt and 1/8tsp pepper and cook until mushrooms release moisture and liquid evaporates, about 6 minutes.',
	'Add flour and cook for 1 minute, stirring constantly. Stir in broth and bring to simmer, stirring constantly. Add cream, reduce heat to medium and simmer until sauce is thickened and reduced to 3-1/2 cups, about 12 minutes. Season with salt and pepper to taste.',
	'Add grean beans to sauce and stir until evenly coated. Arrange in even layer in 3-quart or 13x9\" baking dish. Sprinkle with topping and bake until top is golden brown and sauce is bubbling around edges, about 15 minutes. Serve immediately.'
);

$ingredientArray = array(
	array("Subgroup", 		0,	"",		"Topping"),
	array("Sandwich Bread", 4,	"slice","torn into quarters"),
	array("Butter",			2,	"tbsp",	"NULL"),
	array("Salt", 			0.25,"tsp",	"NULL"),
	array("Pepper", 		0.125,"tsp",		"NULL"),
	array("Fried Onions",	3,"cup",	"(about 6 oz)"),

	array("Subgroup", 		0,	"",		"Beans and Sauce"),
	array("Green Beans", 	2,	"lb",	"trimmed and halved crosswise"),
	array("Butter", 		3, 	"tbsp",	"NULL"),
	array("White Mushrooms",1,	"lb",	"NULL"),
	array("Garlic",			3,	"clove","minced"),
	array("AP FLour",		3,	"tbsp",	"NULL"),
	array("Chicken Broth",	1.5,"cup",	"NULL"),
	array("Heavy Cream",	1.5,"cup",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);