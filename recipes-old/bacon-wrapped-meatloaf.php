<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Bacon Wrapped Meatloaf",
	"Cook\'s Illustrated Cookbook, p390",
	"Excellent"
);

$tagArray = array(
	$TagMeat,
	$TagFavorite
);

$instructionArray = array(
	'<#>Make Glaze:</#>',
	'Combine all ingredients in small saucepan; set aside.',
	'<#>Make Meatloaf:</#>',
	'Line 9x13\" baking pan with aluminum foil; set aside.',
	'Preheat oven to 350 degrees.',
	'Heat oil in 10\" skillet over medium heat. Add onion and garlic, cook until softened, about 5 minutes. Set aside to cool.',
	'In large bowl comine milk, eggs, mustard, Worcestershire, salt, peper, thyme, and hot sauce. Add meat, saltines, parsley, and sauteed onion mixture; mix with fork until evenly blended and meat mixture does not stick to bowl. If mixture sticks, add additional milk, 2 tablespoons at a time, until mixture no longer sticks.',
	'Turn meat mixture onto work surface. With wet hands, pat mixture into approximately 9x5\" loaf shape. Place in prepared baking pan. Brush with half of glaze, then arrange bacon slices, crosswise, over loaf, overlapping slightly and tucking only bacon tip ends under loaf.',
	'Bake loaf until bacon is crisp and loaf registers 160 degrees, about 1 hour. Cool at least 20 minutes. Simmer remaining glaze over medium heat until thickened slightly. Slice meatloaf and serve with extra glaze.'
);

$ingredientArray = array(
	array("Subgroup", 		0,	"",		"Glaze"),
	array("Ketchup", 		135,"g",	"NULL"),
	array("Brown Sugar",	48,	"g",	"NULL"),
	array("Cider Vinegar", 	4,	"tsp",	"NULL"),
	array("Subgroup", 		0,	"",		"Meatloaf"),
	array("Vegetable Oil",	2,	"tsp",	"NULL"),
	array("Onion", 			1,	"ea",	"chopped"),
	array("Garlic", 		2, 	"clove","NULL"),
	array("Whole Milk",		120,"g",	"NULL"),
	array("Eggs",			2,	"",		"NULL"),
	array("Dijon Mustard",	2,	"tsp",	"NULL"),
	array("Worcestershire Sauce",	2,"tsp",	"NULL"),
	array("Salt",			1,	"tsp",	"NULL"),
	array("Pepper",			0.5,"tsp",	"NULL"),
	array("Dried Thyme",	0.5,"tsp",	"NULL"),
	array("Hot Sauce",		0.25,"tsp",	"NULL"),
	array("Ground Beef",	1.5,"lb",	"NULL"),
	array("Ground Pork",	1.5,"lb",	"NULL"),
	array("Saltines",		0.66,"cup",	"crushed"),
	array("Fresh Parsley",	0.33,"cup",	"NULL"),
	array("Bacon", 			10,	"slice","Thin sliced")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);