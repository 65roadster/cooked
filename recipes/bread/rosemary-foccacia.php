<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Rosemary Focaccia",
	"ATK Baking Book",
	"Crowd Pleaser"
);

$tagArray = array(
	$TagBread,
	$TagFavorite
);

$instructionArray = array(
	'<#>Make Biga:</#>',
	'Stir flour, water and yeast together in large bowl with wooden spoon until uniform mass forms and no dry flour remains.',
	'Cover bowl tightly with plastic wrap and let sit overnight at room temperature (about 70 degrees) overnight (<#red>at least 8 and up to 24 hours</#red>).',
	'Use immediately or store in refrigerator for up to 3 days. Allow to stand at room temperature for 30 minutes before using.',

	'<#>Make dough and let rest:</#>',
	'Stir flour, water and yeast into biga with wooden spoon until no dry flour remains, about 1 minute.',
	'Cover with plastic wrap and let rise at room temperature for 15 minutes.',

	'<#>Add salt and let rise:</#>',
	'Sprinkle 2 teaspoons Kosher salt (half that amount if table salt) and stir until thoroughly incorporated, about 1 minute.',
	'Cover with plastic wrap and <#red>let rise at room temperature for 30 minutes.</#red>',

	'<#>Fold dough and let rise:</#>',
	'Spray rubber spatula with cooking spray. Fold dough over itself by gently lifting and folding edge of dough into middle.',
	'Rotate 90 degrees and fold again. Turn and fold 6 more times (for a total of 8).',
	'Cover with plastic wrap and let rise at room temperature for 30 minutes.',
	'Repeat folding, turning and rising 2 more times for a total of <#red>three 30 minute rises.</#red>',

	'<#>Heat oven and baking stone:</#>',
	'Meanwhile adjust oven rack to middle position, place stone on rack and preheat to 500 degrees at least 30 minutes before baking.',
	
	'<#>Shape dough and let rest:</#>',
	'Chop rosemary to yield 2 Tbsp.',
	'Gently transfer dough to lightly floured counter. Lightly dust top of dough with flour and divide in half. Shape each piece of dough into 5-inch round by gently tucking under edges.',
	'Coat two 9-inch round cake pans with 2 Tbsp olive oil each. Sprinkle each pan with 1/2 tsp Kosher salt.',
	'Place round of dough in pan, seam side up. Slide dough around pan to coat bottom and sides, then flip dough over, seam side down.',
	'Repeat with second round of dough.',
	'Cover pans with plastic wrap and let rest for 5 minutes.',
	'Using fingertips, gently press dough out toward edges of pan. If dough resists stretching let it relax for 5-10 minutes and try again.',
	'Using dinner fork, poke surface of dough 25-30 times, popping any large bubbles.',
	'Sprinkle rosemary over top of dough.',
	'Let dough rest until slightly bubbly, 5-10 minutes.',

	'<#>Bake, cool and serve:</#>',
	'Place pans on baking stone and reduce temperature to 450 degrees. <#red>Bake until tops are golden brown, 25-28 minutes</#red>, switching placement of pans halfway through baking.',
	'Transfer pans to wire rack and let cool for 5 minutes.',
	'Remove loaves from pans and place on cooling racks.',
	'Let cool 30 minutes before serving.'
);

$ingredientArray = array(
	array("Subgroup", 		0,	"",		"Biga"),
	array("AP Flour", 		70,	"g",	"NULL"),
	array("Water", 			76,	"g",	"NULL"),
	array("Yeast", 			0.25,"tsp",	"NULL"),
	array("Subgroup", 		0,	"",		"Dough"),
	array("AP Flour", 		355,"g",	"NULL"),
	array("Water", 			285,"g",	"NULL"),
	array("Yeast", 			1,"tsp",	"NULL"),
	array("Olive Oil", 		4,"Tbsp",	"NULL"),
	array("Fresh Rosemary", 2,"Tbsp",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);