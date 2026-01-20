<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Kansas City BBQ Sauce', 'KC Classic BBQ Sauce, AmazingRibs.com, 2016', 'Favorite BBQ Sauce')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

$tagArray = array(
	$TagBBQ
);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'In small bowl mix chili powder, black pepper and salt. In large bowl mix ketchup, mustard, vinegar, Worcestershire, lemon juice, steak sauce, molasses, honey, hot sauce and brown sugar.'),
	($RecipeID, 'Heat oil in large saucepan over medium heat. Add onions and saute until translucent, about 5 minutes. Add garlic and saute for 1 minute. Add dry spices and
	cook until fragrant, about 2 minutes. Add wet ingredients and simmer for 15 minutes to
	thicken. Optionally strain garlic and onions out.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Dried Chili Powder", 18, "g", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Pepper", 1, "tsp", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Salt", 1, "tsp", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Ketchup", 544, "g", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Mustard", 40, "g", "ballpark tstyle") . "," .
	InsertIngredient($conn, $RecipeID, "Cider Vinegar", 60, "g", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Worcestershire Sauce", 85, "g", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Lemon Juice", 120, "g", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Steak Sauce", 65, "g", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Dark Molasses", 85, "g", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Honey", 85, "g", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Hot Sauce", 1, "tsp", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Dark Brown Sugar", 200, "g", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Vegetable Oil", 3, "Tbsp", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Onion", 1, "medium", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Garlic", 4, "clove", "finely chopped") .
	";", FALSE);
InsertTagArray($conn, $RecipeID, $tagArray);
?>