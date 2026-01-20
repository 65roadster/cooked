<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Eric\'s Pizza Dough",
	"Eric Crampton",
	"Makes Two 12\" Pizzas, Good for the Ooni oven"
);

$tagArray = array(
	$TagPizza,
	$TagFavorite
);

$instructionArray = array(
	'Combine all ingredients, add flour or water to get to desired hydation. Dough should not be sticky.',
	'Let rise until doubled, about 2 hours. Split into two equal sized balls. Let rise for 45 minutes.',
	'Shape into 12\" round pizza with a proper cornicione.',
	'Top as desired and bake to perfection.'
);


$ingredientArray = array(
	array("00 Flour",	255,	"g",	""),
	array("Water",		180,	"g",	""),
	array("Salt",		1,	"tsp",	""),
	array("Yeast", 		0.5,	"tsp",	""),
	array("Sugar", 		0.25,	"tsp",	"")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);