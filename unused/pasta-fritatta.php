<?php
include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Pasta Frittata', 'America\'s Test Kitchen, Season 15', 'Sausage, cheese and pasta frittata')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

ExecuteSQL($conn,
	"INSERT INTO TagList (recipe, tag) VALUES
	($RecipeID)
	;", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Whisk eggs, oil, cheese, parsley, salt and pepper in a bowl until it forms a consistent, even color with no unmixed egg whites.'),
	($RecipeID, 'Cook sausage until nearly done (some pink remains, it will finish cooking later), then add garlic and cook until aromatic, about 30 seconds. Stir sausage/garlic into eggs, stirring to avoid cooking any of the eggs.'),
	($RecipeID, 'Add water, pasta, salt and vegetable oil to an 8\" nonstick skillet and bring to a simmer. Occasionally stir pasta to avoid sticking/clumping, allowing it to simmer until all water is gone and pasta is left cooking in the pan, sizzling/popping and browning on the bottom, about 7 minutes.'),
	($RecipeID, 'Push pasta up the edges of the pan to form a large nest. Add the egg mixture and use tongs to pull some pasta up into the egg mixture without disturbing the browned bottom layer.'),
	($RecipeID, 'COVER WITH A LID and let cook until eggs are nearly done, about 7 minutes.'),
	($RecipeID, 'Slide frittata onto a plate and flip over using a second plate, then slide back into pan. Tuck the permieter of the frittata into the pan and cook until the bottom has browned, 2-4 minutes. Remove from heat and let rest 5 minutes. Then flip onto pan, cut and serve.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Eggs",				8,		"large",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Olive Oil",			3,		"Tbsp",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Parmesan Cheese",	0.5,	"Cup",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Dried Parsley",		1.5,	"tsp",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Salt",				0.5,	"tsp",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Pepper",			0.5,	"tsp",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Sausage",			0.75,	"lb",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Garlic",			2,		"Clove",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Angel Hair Pasta",	6,		"oz",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Water",				3,		"Cup",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Salt",				0.75,	"tsp",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Vegetable Oil",		3,		"Tbsp",		"NULL") .
	";", FALSE);
?>