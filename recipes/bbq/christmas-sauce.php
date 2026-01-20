<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Christmas BBQ Sauce', 'Jan Crampton', 'Mace and allspice remind me of Christmas')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

$tagArray = array(
	$TagBBQ
);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Stir spices together in a small bowl. Stir in vinegar, then add hot sauce, ketchup and molasses and mix.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Allspice",		0.25,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Cinnamon",		0.25,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Mace",			0.25,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Pepper",		0.25,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Curry Powder",	0.5,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Dried Chili Powder",	0.5,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Paprika",		0.5,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "White Vinegar",	0.25,	"cup",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Hot Sauce",		0.25,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Ketchup",		1,		"cup",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Molasses",		0.333,	"cup",	"NULL") .
	";", FALSE);
InsertTagArray($conn, $RecipeID, $tagArray);
?>