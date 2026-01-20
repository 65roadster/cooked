<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Pork Rub', 'Meat Head\'s Memphis Dust, AmazingRibs.com, 2016', 'Favorite Pork Rub')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

$tagArray = array(
	$TagBBQ
);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Moisten surface of meat with water or vegetable oil, apply rub at 1Tbsp per lb of meat, or as much as will adhere.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Brown Sugar", 	150,	"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Sugar", 		150,	"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Paprika", 		55,		"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Garlic Powder",	33,		"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Pepper", 		16,		"g",	"ballpark tstyle") . "," .
	InsertIngredient($conn, $RecipeID, "Ginger Powder",	12,		"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Onion Powder",	20,		"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Rosemary Powder", 2,	"tsp",	"NULL") .
	";", FALSE);
InsertTagArray($conn, $RecipeID, $tagArray);
?>