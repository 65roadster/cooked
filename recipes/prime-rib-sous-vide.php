<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Prime Rib Sous Vide",
	"America\'s Test Kitchen",
	""
);

$tagArray = array(
	$TagMeat,
	$TagFavorite
);

$instructionArray = array(
	'Shave/Trim fat from rib roast, leaving 1\2".',
	'Cut 1" crosshatch pattern through fat cap.',
	'Season with 2Tbsp Kosher salt (for 3 rib roast), let rest in the fridge uncovered for 24-96 hours.',
	
	'Prepare sous vide bath set to 133F.',
	'Heat 1Tbsp oil in skillet over medium-high heat until beginning to smoke. Brown on non-convex sides.',
	'Season with ground pepper. Vacuum seal in bag, then cook in sous vide for 16-24 hours.',
	'Remove roast from bag, reserving juices for sauce/jus.',
	'Pat roast dry, place in roasting pan, fat cap on top, placing a foil ball under thin side to create even surface for browning. Broil until browned on top (approximately 4-8min), transfer to carving board, cut and serve.'
);

$ingredientArray = array(
	array("Prime Rib Roast", 1,	"ea",	"NULL"),
	array("Vegetable Oil", 	2,	"tbsp",	"NULL"),
	array("Garlic Powder",	2,	"tsp",	"NULL"),
	array("Onion Powder",	2,	"tsp",	"NULL"),
	array("Paprika",		1.5,"tsp",	"NULL"),
	array("Dried Oregano",	1,	"tsp",	"NULL"),
	array("Dried Thyme",	1,	"tsp",	"NULL"),
	array("Salt",			1,	"tsp",	"NULL"),
	array("Pepper",			0.5,"tsp",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);