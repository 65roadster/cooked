<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Quick Pizza', 'Sur la Table', 'Good for being quick')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

ExecuteSQL($conn,
	"INSERT INTO TagList (recipe, tag) VALUES
	($RecipeID, $TagPizza)
	;", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'In a large bowl combine flour, salt and yeast.
				Add water and olive oil and knead until smooth and elastic but still tacky.'),
	($RecipeID, 'Let rise at room temperature until doubled in size, about 1-1/2hrs'),
	($RecipeID, 'Preheat oven with cast iron pan inside for 1 hour'),
	($RecipeID, 'Spread pizza out, brush with olive oil and minced garlic.
				Cook oil side down 6 minutes then flip, add sauce and ingredients on top and cook to finish')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES
	($RecipeID, $APFlour, 	'460', 	$grams, '3-1/4C, 16.25oz'),
	($RecipeID, $Salt, 		'1.5', 	$tsp, 	NULL),
	($RecipeID, $Yeast, 	'2.25', $tsp, 	NULL),
	($RecipeID, $Water, 	'1.25', $Cup, 	'100-110F'),
	($RecipeID, $OliveOil, 	'3', 	$Tbsp,	NULL),
	($RecipeID, $Garlic, 	'6', 	$clove,	'minced')
	;", FALSE);

?>
