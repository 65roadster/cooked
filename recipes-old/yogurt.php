<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Yogurt",
	"Ray",
	"Very Tangy"
);

$tagArray = array(
	$TagOther
);

$instructionArray = array(
	'Heat milk in saucepan to 195 degrees, hold for 10 minutes to denature whey proteins for firmer texture.',
	'Let cool to 110F. Stir in 1Tbsp active yogurt culture per quart of milk.',
	'Hold at 110F for ~12 hours using sous vide machine, adjust time for taste preference.',
	'Note: Skim milk produces firmer texture. Fermentation can be from 86-114F for 12 to 2 hours.',
	'Note: Reference On Food and Cooking, revised, 2004, page 47.'
);
	
$ingredientArray = array(
	array("Skim Milk",		8,	"Cup",	"NULL"),
	array("Yogurt Culture",	2,	"Tbsp",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);

?>

