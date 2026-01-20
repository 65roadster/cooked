<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Bob\'s Ice Cream', 'Bob\'s Wife at Blount Memorial Hospital', 'Easy Granular Ice Cream')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

ExecuteSQL($conn,
	"INSERT INTO TagList (recipe, tag) VALUES
	($RecipeID, $TagDessert)
	;", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Mix ingreidents into bowl, add whole milk if there is room left in the ice cream machine.'),
	($RecipeID, 'Follow ice cream maker instructions.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Eggs",			6,	"",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Heavy Cream",	225,"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Half and Half",	225,"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Condensed Milk",312,"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Vanilla Extract",2,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Salt", 			0.25,"tsp",	"NULL") .
	";", FALSE);
?>
