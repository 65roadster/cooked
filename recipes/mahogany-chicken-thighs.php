<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Mahogany Chicken Thighs', 'ATK Season 15', 'Ray Likes')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

ExecuteSQL($conn,
	"INSERT INTO TagList (recipe, tag) VALUES
	($RecipeID, $TagChicken)
	;", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Water",			1.5,	"cup",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Soy Sauce",		1,		"cup",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Dry Sherry",	0.25,	"cup",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Sugar",			2,		"Tbsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Molasses",		2,		"Tbsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Distilled white vinegar", 1,"Tbsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Chicken Thighs",8,		"lb",	"Boneless") . "," .
	InsertIngredient($conn, $RecipeID, "Ginger", 		2,		"inch", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Garlic", 		6,		"clove","NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Cornstarch", 	1,		"Tbsp", "NULL") .
	";", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Adjust oven rack to middle position and heat to 300 degrees. Wisk 1C water, soy sauce, sherry, sugar, molasses and vinegar in oven safe 12\" skilled until sugar is dissolved. Arrange chicken skin side down in soy mixture and nestle ginger and garlic between pieces of chicken.'),
	($RecipeID, 'Bring soy mixture to simmer over medium heat and simmer for 5 minutes. Transfer skillet to oven and cook, uncovered, for 30 minutes.'),
	($RecipeID, 'Flip chicken skin side up and continue to cook, uncovered, until chicken registers 195 degrees, 20-30 minutes longer. Transfer chicken to platter, taking care not to tear skin. Pour cooking liquid through fine mesh strainer into fat separator and let settle for 5 minutes. Turn oven to broil.'),
	($RecipeID, 'Wisk cornstarch and remaining 1/2C water together in bowl. Pour 1C defatted cooking liquid into now-empty skillet and bring to simmer over medium heat. Wisk cornstartch mixture into cooking liquid and simmmer until thickened, about 1 minute. Pour sauce into bowl and set aside.'),
	($RecipeID, 'Return chicken skin side up to now-empty skillet and broil until well browned, about 4 minutes. Return chicken to platter and let rest for 5 minutes. Serve, passing reserved sauce separately.')
	;", FALSE);
	
?>
