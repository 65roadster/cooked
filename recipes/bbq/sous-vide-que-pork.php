<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Sous Vide Que Pork",
	"https://amazingribs.com/tested-recipes/pork-recipes/sous-vide-que-pork-loin-recipe",
	""
);

$tagArray = array(
	$TagBBQ
);

$instructionArray = array(
	"<#>Brine Pork:</#>",
	"Most pork is already saturated with a salt solution and shouldn\'t be brined. Otherwise season the pork with 1\/2tsp of kosher salt per pound of meat and let rest for 1-2 hours",
	"<#>Sous Vide:</#>",
	"Prepare sous vide bath at 140F.",
	"Season pork with Meathead\'s Memphis Dust pork rub.",
	"Put pork in vacuum sealed bag or gallon size ziploc with air removed using your method of choice.",
	"Let cook for 4 hours, then submerge pork, still in ziplock or vacuum sealed pouch, in ice path until it drops below 40F, 30-60 minutes. Refrigerate for a few days or freeze for longer-term storage.",
	"<#>Smoke Meat:</#>",
	"Smoke at 325F until center of meat reaches 120F, about 1.5 hours. Serve."
);

$ingredientArray = array(
	array("Pork Loin",			4,	"lb",	"4-6 lbs typically"),
	array("Kosher Salt",			2,	"tsp",	"1/2 tsp per lb pork"),
	array("Meathead\'s Memphis Dust",	1,"cup",	"")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);