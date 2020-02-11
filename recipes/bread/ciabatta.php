<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Ciabatta",
	"ATK Baking Book",
	"Excellent Ciabatta"
);

$tagArray = array(
	$TagBread,
	$TagFavorite
);

$instructionArray = array(

    
    '<#>Make Biga:</#>',
    'Combine 1 cup all­purpose flour, 1/8 teaspoon instant yeast, and 1/2 cup room temperature water in medium bowl and stir with wooden spoon until uniform mass forms, about 1 minute.',
    'Cover bowl tightly with plastic wrap and let stand at room temperature (about 70 degrees) overnight (<#red>at least 8 hours</#red> and up to 24 hours).',

    '<#>Make Dough, let rise:</#>',
    'Place biga, flour, yeast, salt, water, and milk in stand mixer fitted with paddle.',
    'Mix on lowest speed until roughly combined and shaggy dough forms, about 1 minute, scraping down sides of bowl as necessary.',
    'Continue mixing on medium­low speed until dough becomes uniform mass that collects on paddle and pulls away from sides of bowl, 4 to 6 minutes.',
    'Change to dough hook and knead bread on medium speed until smooth and shiny (dough will be very sticky), about 10 minutes.',
    'Transfer dough to large bowl and cover tightly with plastic wrap. 8. Let dough rise at room temperature until doubled in volume, <#red>about 1 hour</#red>.',

    '<#>Fold Dough and Continue Rising</#>',
    'Spray rubber spatula or bowl scraper with vegetable oil spray.',
    'Fold partially risen dough over itself by gently lifting and folding edge of dough toward middle.',
    'Turn bowl 90 degrees and fold again.',
    'Turn bowl and fold dough 6 more times (total of 8 turns).',
    'Cover with plastic wrap and let rise for <#red>30 minutes</#red>.',

    '<#>Heat Oven and Baking Stone</#>',
    'Meanwhile, adjust oven rack to lower­middle position.',
    'Place baking stone on rack and heat oven to 450 degrees at least 30 minutes before baking.',

    '<#>Finish Folding and Rising</#>',
    'Repeat folding, replace plastic wrap, and let rise until doubled in volume, <#red>about 30 minutes</#red> longer.',

    '<#>Shape and Proof Dough</#>',
    'Cut two 12­ by 6­inch pieces of parchment paper and liberally dust with flour.',
    'Transfer dough to liberally floured counter, being careful not to deflate completely.',
    'Liberally flour top of dough.',
    'Divide dough in half with bench scraper.',
    'Turn 1 piece of dough so cut side is facing up and dust with flour.',
    'With well­floured hands, press dough into rough 12­ by 6­inch shape.',
    'Fold shorter sides of dough toward center, overlapping them like a business letter to form 7­ by 4­inch loaf.',
    'Repeat with second dough piece',
    'Gently transfer each loaf seam­side down to parchment sheets, dust with flour, and cover with plastic wrap.',
    'Let loaves sit at room temperature for <#red>30 minutes</#red> (surfaces of loaves will develop small bubbles).',

    '<#>Bake Loaves</#>',
    'Slide parchment with loaves onto inverted, rimmed baking sheet or pizza peel.',
    'Using floured fingertips, evenly poke entire surface of each loaf to form 10­ by 6­inch rectangle; spray loaves lightly with water.',
    'Carefully slide parchment with loaves onto baking stone using jerking motion.',
    'Bake, spraying loaves with water twice more during first 5 minutes of baking time.',
    'Continue baking until crust is deep golden brown and instantread thermometer inserted into centers of loaves registers 210 degrees, <#red>22 to 27 minutes</#red> in total.',
    'Transfer to wire rack, discard parchment, and cool loaves to room temperature, about 1 hour, before slicing and serving.'
);

$ingredientArray = array(
	array("Subgroup", 		0,	    "",		"Biga"),
	array("AP Flour", 		142,    "g",	"NULL"),
	array("Yeast", 			0.125,  "tsp",	"NULL"),
	array("Water", 			113,    "g",	"Room temperature"),

	array("Subgroup", 		0,	    "",		"Dough"),
	array("AP Flour", 		283,    "g",	"NULL"),
	array("Yeast", 			0.5,    "tsp",	"NULL"),
	array("Salt",   		1.5,    "tsp",	"NULL"),
	array("Water", 			170,    "g",	"NULL"),
	array("Milk", 		    57,     "g",	"Room temperature. Skim, low-fat or whole"),
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);