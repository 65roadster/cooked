<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Garlic Rosemary Roasted Potatoes', 'Serious Eats Website', '')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

$tagArray = array(
	$TagSides
);


ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Adjust oven rack to middle position and preheat to 450 degrees. Heat 2 quarts water until boiling, add baking soda and potatos. simmer for about 10 minutes, until knife meets little resistance when inserted.'),
	($RecipeID, 'Meanwhile combine olive oil, with rosemary, garlic and a few grinds of black pepper in a small saucepan over medium heat. Cook, stirring and shaking pan constantly until garlic just begins to turn golden, about 3 minutes. Immediately strain oil through fine mesh strainer set in a large bowl. Set garlic/rosemary mixture aside to use later.'),
	($RecipeID, 'When potatos are cooked, drain and let rest for 30 seconds to allow moisture to evaporate. Transfer to bowl with oil, season to taste with salt and pepper and toss to coat, shaking bowl roughly until a thick layer of paste builds up on the potato chunks.'),
	($RecipeID, 'Transfer potatoes to lined baking sheet and separate, spreading out evenly. Transfer to oven and roast without disturbing for 20 minutes. Shake pan, turn potatoes and continue roasting and turning until browned on all sides, 30-40 minutes longer. '),
	($RecipeID, 'Transfer potatoes to a large bowl, add garlic/rosemary mixture and minced parsley, toss to coat. Season with salt and pepper to taste, serve immediately.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Baking Soda",	0.5,	"tsp",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Potatoes",		4,		"lb",		"Russet or Yukon Gold, peeled, cut into chunks") . "," .
	InsertIngredient($conn, $RecipeID, "Olive Oil",		5,		"Tbsp",		"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Fresh Rosemary",1,		"Tbsp",		"chopped") . "," .
	InsertIngredient($conn, $RecipeID, "Garlic",		3,		"Clove",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Parsley",		1,		"Tbsp",		"minced") .
	";", FALSE);

InsertTagArray($conn, $RecipeID, $tagArray);
?>