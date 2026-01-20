<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Marinara Sauce', 'The Science of Good Cooking, p154', 'Favorite Pizza Sauce')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

ExecuteSQL($conn,
	"INSERT INTO TagList (recipe, tag) VALUES
	($RecipeID, $TagPizza),
	($RecipeID, $TagFavorite)
	;", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Put basil, sugar, salt and pepper flakes in opened can of tomatoes'),
	($RecipeID, 'Heat oil in large skillet over medium heat. Add garlic and cook until
				 just starting to brown, 2-3 minutes.'),
	($RecipeID, 'Stir in remaining ingredients, bring to hard simmer, reduce heat to low, break up tomatoes and simmer until desired consistency is reached.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES
	($RecipeID, $OliveOil, 		'1.5', 	$Tbsp,	NULL),
	($RecipeID, $Garlic, 		'3', 	$clove,	'minced'),
	($RecipeID, $Tomatoes, 		'28', 	$oz, 	'can whole peeled tomatoes'),
	($RecipeID, $TomatoPaste,	'0.25',	$Cup, 	NULL),
	($RecipeID, $DriedBasil,	'2', 	$tsp, 	'or 2-3Tbsp fresh, chopped'),
	($RecipeID, $Sugar, 		'0.5', 	$tsp, 	NULL),
	($RecipeID, $Salt, 			'0.25', $tsp,	NULL),
	($RecipeID, $RedPepperFlakes, '0.125', $tsp, NULL)
	;", FALSE);
?>