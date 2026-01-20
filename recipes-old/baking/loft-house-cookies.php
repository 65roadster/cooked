<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Loft House Cookies', 'Bravetart', 'Just like the original')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

ExecuteSQL($conn,
	"INSERT INTO TagList (recipe, tag) VALUES
	($RecipeID, $TagDessert)
	;", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Make frosting:'),
	($RecipeID, 'Combine powdered sugar, salt, cream and vanilla in the bowl of a stand mixer with a paddle attachment. Mix on low to moisten, increase to medium and beat until smooth, abuot 3 minutes.'),
	($RecipeID, 'Transfer to a zip-top bag, wipe any excess from bowl and beater with a paper towel.'),
	($RecipeID, 'Make the cookies:'),
	($RecipeID, 'Adjust oven rack to middle position, preheat to 350 degrees and line two aluminum baking sheets with parchment paper.'),
	($RecipeID, 'Combine butter, sugar, baking powder and salt in the mixing bowl. Mix on low with the paddle attachment, then increase to medium and beat until creamy, about 5 minutes.'),
	($RecipeID, 'Meanwhile, whisk eggs whites, cream and vanilla together in a glass measuring cup; add to butter in four or five additions and beat until smooth. Scrape bowl and beater with a flexible spatula, then resume on low. Sprinkle in cake flour, mixing to form a soft dough. Fold once or twice from the bottom to ensure it\'s well mixed, then trtansfer to a piping bag fitted with a 1-1/2\" plain tip.'),
	($RecipeID, 'Pipe twelve 1.25oz portions onto each baking sheet. Bake until puffy and pale gold around the edges, about 15 minutes. Cool until no trace of warmth remains, at least 20 minutes.'),
	($RecipeID, 'Snip off a corner of the frosting bag; working two or three at a time, squeeze a tablespoon of frosting over each cookie and spread into an even layer with a knife. Top with sprinkles. Wrapped in plastic, leftovers will keep 3 days at room temperature.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Subgroup",			1,		"",		"Frosting") . "," .
	InsertIngredient($conn, $RecipeID, "Powdered Sugar",	285,	"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Salt",				0.125,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Heavy Cream",		70,		"g",	"Cold") . "," .
	InsertIngredient($conn, $RecipeID, "Vanilla Extract",	1,		"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Subgroup", 			1,		"",		"Cookies") . "," .
	InsertIngredient($conn, $RecipeID, "Butter",			16,		"Tbsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Sugar",				200,	"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Baking Powder",		2,		"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Salt",				0.625,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Egg Whites",		2,		"",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Heavy Cream",		2,		"Tbsp",	"Cold") . "," .
	InsertIngredient($conn, $RecipeID, "Vanilla Extract",	1,		"Tbsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Cake Flour",		310,	"g",	"NULL") .
	";", FALSE);
?>
