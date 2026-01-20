<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Smoked Pulled Pork', 'Various', 'Pulled Pork')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

$tagArray = array(
	$TagBBQ,
	$TagFavorite
);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Trim most of the fat from the exterior of the meat, leaving no more than 1/8\". Rinse and thoroughly dry the meat. Salt all sides, wrap with plastic wrap and put in the fridge for 12-24 hours.'),
	($RecipeID, 'Heat grill to 225F. Wet the surface with water and apply rub generously. Tie meat with butcher\'s twine cross- and length-wise. Place meat in grill and cook to 202F, about 8 hours. A fork should be able to be inserted and rotated 90 degrees with minimal effort.'),
	($RecipeID, 'When done remove meat from grill and slice, chop or pull apart with forks mixing the dark bits of bark in with the rest of the meat. Serve with sauce on the side.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Pork Butt", 150,	"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Salt", 	0.5,	"tsp",	"per lb pork") . "," .
	InsertIngredient($conn, $RecipeID, "Pork Rub", 	0.333,	"cup",	"NULL") .
	";", FALSE);
InsertTagArray($conn, $RecipeID, $tagArray);
?>