<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Quicny\'s Rolls",
	"http://www.aducksoven.com/2014/05/pulled-pork-sandwiches-on-homemade-rolls.html",
	"Excellent"
);

$tagArray = array(
	$TagBread
);

$instructionArray = array(
	'Combine milk, butter and sugar in small saucepan. Cook over low heat until butter is melted.',
	'In mixer fitted with paddle combine water and yeast. After milk mixture has cooled to 110F add to mixer bowl along with egg and salt. Add flour in 1/2C increments until no longer sticky, about 5 minutes.',
	'Place dough in oiled bowl, cover with plastic wrap and let rise until doubled, <#red>about 45 minutes</#red>.',
	'De-gas and shape into 12 tight balls. Arrange in 9x13 glass baking dish and cover with plastic wrap. Let rise until nearly doubled and rolls are just pressing against each other, <#red>about 45 minutes</#red>.',
	'While rising, preheat oven to 400 degrees. Bake rolls for <#red>15-20 minutes</#red> or until tops are golden brown.',
);

$ingredientArray = array(
	array("Water", 			113,"g",	", 110F"),
	array("Yeast",			2.25,"tsp",	"NULL"),
	array("Whole Milk", 	113,"g",	"NULL"),
	array("Butter",			75,	"g",	"NULL"),
	array("Sugar", 			50,	"g",	"NULL"),
	array("Eggs", 			1, 	"ea",	"NULL"),
	array("Salt",			1,	"tsp",	"NULL"),
	array("AP Flour",		525,"g",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);