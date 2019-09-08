<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Bagels', 'Bread Baker\'s Apprentice', 'BBA\'s Bagels')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

ExecuteSQL($conn,
	"INSERT INTO TagList (recipe, tag) VALUES
	($RecipeID, $TagFavorite),
	($RecipeID, $TagBread)
	;", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Make sponge: Stir yeast and flower together, then add water and mix only until a thick, sticky batter forms. Cover and let ferment at room temperature for ~2 hrs or until mixture becomes very foamy and bubbly approximately doubling in size.'),
	($RecipeID, 'Make dough: add the additional yeast to the sponge and stir. Then add the rest of the flour and all of the salt and malt. Mix on low speed with the dough hook until ingredients form a ball (~3 minutes).'),
	($RecipeID, 'Continue to mix on low for about 6 more minutes. The dough should be firm and should pass the window pane test and be at 80F. Add a few drops of water or a little flour to reach desired consistency.'),
	($RecipeID, 'Immediately divide the dough into 128g piecesd for standard bagels or 71g for small bagels. Form into balls and cover with a damp cloth and let rest for 20 minutes.'),
	($RecipeID, 'Shape and put on parchment lined baking sheet then place in the fridge for at least 8 hours and up to 3 days.'),
	($RecipeID, 'When ready to bake bagels preheat the oven to 500F with racks in the middle. Put a large pot of water on a heated stove to bring to a boil and add 1Tbsp baking soda. Remove pans from the fridge and place a test bagel in the water and see if it floats. If so then pat it dry, return it to the pan and return the pan to the fridge to keep dough cool. If it doesn\'t float let the pan of bagels sit at room temperature for 10-20 minutes and test again. Repeat until bagel floats.'),
	($RecipeID, 'Remove pans from fridge and boil bagels for 30 seconds per side, returning them to the pan as you go, adding toppings while the bagels are still wet.'),
	($RecipeID, 'Put pans in oven to bake. Rotate after 7 minutes and turn temperature down to 450F. Continue to bake an additional 7-8 minutes or longer to reach desired darkness. Remove from oven and let bagels cool for at least 15 minutes (longer gives a chewier crust).')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Subgroup",		0,		"tsp",	"Sponge") . "," .
	InsertIngredient($conn, $RecipeID, "Yeast",			1,		"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "High Gluten Flour",	510,"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Water",			565,	"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Subgroup",		0,		"tsp",	"Dough") . "," .
	InsertIngredient($conn, $RecipeID, "Yeast",			0.5,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "High Gluten Flour",	480,"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Salt",			20,		"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Non-diastatic Malt Powder",	2,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Baking Soda",	1,		"Tbsp",	"NULL") .
	";", FALSE);
?>