<?php

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Ferment Pizza', 'Ray Crampton', 'Another good dough')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

ExecuteSQL($conn,
	"INSERT INTO TagList (recipe, tag) VALUES
	($RecipeID, $TagPizza)
	;", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Poolish: Mix first three ingredients \(flour, water and yeast\), set aside, covered, for 12-18 hours.'),
	($RecipeID, 'Dough: Add remaining flour and water to the poolish, mix well and allow to rest for 20 minuites. Add the remaining ingredients, mixing and kneading to form a smooth dough. Allow the dough to rise, covered, for 45 minutes. Gently fold the edges to the middle, turn over and let rise an additional 45 minutes.'),
	($RecipeID, 'Divide dough in half and shape each half into a 9 inch round and let rest for 30 minutes.'),
	($RecipeID, 'Cook on cast iron on high grill or in oven at 550 as desired.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES
	($RecipeID, $BreadFlour,'120', 	$grams, NULL),
	($RecipeID, $Water, 	'120', 	$grams, 'room temp'),
	($RecipeID, $Yeast, 	'0.125',$tsp, 	NULL),
	($RecipeID, $BreadFlour,'270', 	$grams, NULL),
	($RecipeID, $Water, 	'170', 	$grams, 'room temp'),
	($RecipeID, $Yeast, 	'1',	$tsp, 	NULL),
	($RecipeID, $Salt, 		'1.25', $tsp, 	NULL),
	($RecipeID, $Sugar, 	'1', 	$tsp, 	NULL),
	($RecipeID, $OliveOil, 	'1', 	$Tbsp, 	NULL)
	;", FALSE);

?>
