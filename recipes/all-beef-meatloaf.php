<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"All Beef Meatloaf",
	"Cook\'s Illustrated Cookbook",
	""
);

$tagArray = array(
	$TagMeat,
	$TagFavorite
);

$instructionArray = array(
	'<#>Make Meatloaf:</#>',
	'Preheat oven to 375 degrees with rack in middle position.',
	'Spread grated cheese on a plate and place in freezer until ready to use.',
	'Set a metal cooling rack over a rimmed backing sheet. Fold a sheet of heavy-duty aluminum foil to form a 10\" x 6\" rectangle. Center foil on cooling rack and poke holes in foil with skewer. Spray foil with nonstick cooking spray.',
	'Heat butter in 10\" skillet over medium-high heat until foaming; add onion and celery and cook, stirring occasionally, until beginning to brown, 6 to 8 minutes. Add garlic, thyme, and paprika and cook, stirring, until fragrant, about 1 minute. Reduce heat to low, add tomato juice. Cook, stirring to scrape up browned bits from pan, until thickened, about 1 minute. Transfer mixture to small bowl and set aside to cool.',
	'Whisk broth and eggs in large bowl until combined. Sprinkle gelatin over liquid and let stand 5 minutes. Stir in soy sauce, mustard, saltines, parsley, salt, pepper, and onion mixture. Crumble frozen cheese into a coarse powder and sprinkle over mixture. Add ground beef; mix gently with your hands until thoroughly combined, about 1 minute. Transfer the meat to foil and shape into a 10\" x 6\" oval about 2\" high. Smooth top and edges of meatloaf with a moistened spatula. Bake until instant-read thermometer registers 135-140F, 55-65 minutes. Remove meat loaf from oven and turn on the broiler.',
	'<#>Make Glaze:</#>',
	'While meatloaf cooks, combine ingredients for glaze in a small saucepan; bring to simmer over medium heat and cook, stirring, until thick and syrupy, about 5 minutes.',
	'Spread half of glaze evenly over cooked meatloaf with a rubber spatula; place under broiler and cook until glaze bubbles and begins to brown at edges, about 5 minutes.',
	'Let meatloaf cool about 20 minutes before slicing.'
);

$ingredientArray = array(
	array("Subgroup", 		0,	"",		"Meatloaf"),
	array("Monterey Cheese",3,	"oz",	"grated on small holes"),
	array("Butter", 		1,	"tbsp",	"NULL"),
	array("Onion", 			1,	"ea",	"chopped fine"),
	array("Celery", 		1, 	"rib",	"chopped fine"),
	array("Garlic", 		1, 	"clove","minced"),
	array("Fresh Thyme",	2,	"tsp",	"minced"),
	array("Paprika",		1,	"tsp",	"NULL"),
	array("Tomato Juice",	2,	"oz",	"NULL"),
	array("Chicken Broth",	4,	"oz",	"NULL"),
	array("Eggs",			2,	"ea",	"NULL"),
	array("Gelatin",		0.5,"tsp",	"NULL"),
	array("Soy Sauce",		1,	"tbsp",	"NULL"),
	array("Dijon Mustard",	1,	"tsp",	"NULL"),
	array("Saltines",		0.66,"cup",	"crushed"),
	array("Fresh Parsley",		2,"tbsp",	"NULL"),
	array("Salt",			0.75,"tsp",	"NULL"),
	array("Pepper",			0.5,"tsp",	"NULL"),
	array("Ground Sirloin", 1,	"lb",	"NULL"),
	array("Ground Chuck", 	1,	"lb",	"NULL"),
	array("Subgroup", 		0,	"",		"Glaze"),
	array("Ketchup", 		135,"g",	"NULL"),
	array("Hot Sauce", 		1, 	"tsp",	"NULL"),
	array("Ground Coriander",0.5, "tsp","NULL"),
	array("Cider Vinegar", 	2,	"oz",	"NULL"),
	array("Brown Sugar",	38,	"g",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);