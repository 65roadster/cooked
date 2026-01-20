<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Garlic Rosemary Mashed Potatoes', 'Science of Good Cooking, p238', 'Similar to Cheesecake Factory')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

$tagArray = array(
	$TagSides,
	$TagFavorite
);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Place potatoes in large pan and cover with water by 1 inch. Add 1 tsp salt, bay leaf and 2 peeled garlic cloves. Bring to a boil over high heat, reduce heat to medium-low and simmer gently until a paring knife can be inserted into potatoes with no resistance, 35-45 minutes.'),
	($RecipeID, 'Reserve 1C cooking water, then drain potatoes. Return potatoes to pot, discard bay leaf and garlic cloves and let potatoes sit in pot until surfaces are dry, about 5 minutes.'),
	($RecipeID, 'While potatoes dry, melt 4T butter in 8-inch skillet over medium heat. Add minced garlic clove and rosemary and cook until fragrant, about 30 seconds, allow to cook at least slightly.'),
	($RecipeID, 'Whisk cream cheese and butter/garlic/rosemary sauce until fully incorporated. Add 1/4C of reserved cooking water, 1/2tsp salt and 1/2tsp pepper.'),
	($RecipeID, 'Using wooden spoon or spatula, smash potatoes enough to break skins. Fold in cream cheese mixture until most of liquid has been absorbed and chunks of potatoes remain. Add more cooking water as needed until potatoes are a bit looser than desired. Season with additional salt and pepper to taste.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Red Potatoes",		2,		"lb",		"NULL")     . "," .
	InsertIngredient($conn, $RecipeID, "Bay Leaf",			1,		"ea",			"NULL")     . "," .
	InsertIngredient($conn, $RecipeID, "Garlic",			2,		"Clove",	"peeled")   . "," .
	InsertIngredient($conn, $RecipeID, "Garlic",			1,		"Clove",	"minced")   . "," .
	InsertIngredient($conn, $RecipeID, "Dried Rosemary",	0.25,	"tsp",		"NULL")     . "," .
	InsertIngredient($conn, $RecipeID, "Cream Cheese",		4,		"oz",		"softened") . "," .
	InsertIngredient($conn, $RecipeID, "Unsalted Butter",	4,		"Tbsp",		"softened") .
	";", FALSE);

InsertTagArray($conn, $RecipeID, $tagArray);
?>