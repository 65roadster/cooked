<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Vanilla Ice Cream', 'Bravetart', 'Ray\'s Favorite, Creamy')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

ExecuteSQL($conn,
	"INSERT INTO TagList (recipe, tag) VALUES
	($RecipeID, $TagDessert)
	;", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Steep the dairy:'),
	($RecipeID, 'In a 3-quart stainless steel pot bring cream and milk to a simmer over medium heat. Split the half vanilla bean with a paring knife and add to dairy. When it begins to bubble turn off the heat and cover tightly. Steep 30 minutes, cool to room temperature and refrigerate for up to 24 hours.'),
	($RecipeID, 'Make the ice cream base:'),
	($RecipeID, 'Whisk sugar, yolks and salt in a medium bowl. Return dairy to a simmer, remove the vainlla pod and reserve. Ladle 1/2 cup of hot dairy into the yolks, whisk to combine, then repeat with a second and third ladleful. Pour warmed eggs into the pot and cook over medium-low heat, stirring constantly with a flexible spatula until steaming hot.'),
	($RecipeID, 'Strain through a fine mesh sieve into a large bowl. Stir in the vanilla extract and add vanilla bean. Cool to room temperature (using an ice bath to speed the process) and refrigerate until very cold, at least 4 hours, up to a week.'),
	($RecipeID, 'Finish the ice cream:'),
	($RecipeID, 'Scrape the flavorful pulp inside the vanilla pod back into the ice cream base and discard the pod. Churn until fluffy and light, covering open top of machine with a pan to keep it cold as it churns. Meanwhile place a flexible spatula and quart container in the freezer.'),
	($RecipeID, 'Enjoy as soft serve or scrape into the chilled contaner. Press a sheet of plastic against the ice cream to minimize freezer burn and seal the container. Freeze until firm enough to scoop, about 12 hours.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Heavy Cream",	285,	"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Whole Milk",	225,	"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Vanilla Bean",	0.5,	"",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Egg Yolks",		7,		"",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Sugar",			170,	"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Salt", 			0.25,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Vanilla Extract",1,		"Tbsp",	"NULL") .
	";", FALSE);
?>
