<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Braised Chicken with Mushrooms",
	"Spend with pennies",
	""
);

$tagArray = array(
	$TagChicken,
	$TagFavorite
);

$instructionArray = array(
	'Preheat oven to 425 degrees with rack positioned for cooking pot.',
	'Season chicken with salt and pepper.',
	'Heat butter and oil in a skillet over high heat. Add chicken, skin side down and brown. Remove from pan and set aside.',
	'Quickly toss mushrooms with soy sauce. Cook mushrooms, garlic, thyme and rosemary until mushrooms are tender, about 5 minutes.',
	'Add chicken broth and wine and, simmer for 2 minutes.',
	'Place seasoned chicken, skin side up, over mushrooms.',
	'Bake for 35-45 minutes or until internal temperature reaches 170 degrees. Broil to crispen chicken skin.',
	'Spoon mushroom sauce over chicken, garnish with parsley and serve.'
);

$ingredientArray = array(
	array("Chicken Thighs Bone In", 2,		"lb",	"NULL"),
	array("Seasoning Salt", 0.5,	"tsp",	"NULL"),
	array("Olive Oil",		1,		"tbsp",	"NULL"),
	array("Butter",			2,		"tbsp",	"NULL"),
	array("White Mushrooms",1,		"lb",	"Sliced"),
	array("Soy Sauce",		2,		"tsp",	"NULL"),
	array("Garlic",			4, 		"clove","Minced"),
	array("Dried Thyme",	0.5,	"tsp",	"NULL"),
	array("Dried Rosemary",	0.5,	"tsp",	"Crushed"),
	array("Fresh Parsley",	1,		"tbsp",	"NULL"),
	array("Chicken Broth",	0.666,	"cup",	"NULL"),
	array("White Wine",		0.5,	"cup",	"Optional")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);