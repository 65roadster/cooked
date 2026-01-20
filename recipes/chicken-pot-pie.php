<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Chicken Pot Pie",
	"Cook\'s Illustrated Cookbook",
	""
);

$tagArray = array(
	$TagMeat,
	$TagFavorite
);

$instructionArray = array(
	'<#>Make Pie Dough:</#>',
	'Mix flour and salt in workbowl of food processor fitted with steel blade. Scatter butter pieces over flour mixture, tossing to coat butter with a little of the flour. Cut butter into flour with five one-second pulses. Add shortening; contine cutting in until flour is pale yellow and resembles coarse cornmeal, keeping some butter bits the size of small peas, about four more one-second pulses. Turn mixture into meduim bowl.',
	'Sprinkle 3 tbsp ice-cold water over the mixture. Using rubber spatula, fold water into flour mixture. Then press down on dough mixture with broad side of spatula until dough sticks together, adding up to 1 tbsp more cold water if dough will not come together. Shape dough into ball, then flatten into 4" wide disc. Wrap in plastic and refrigerate 30 minutes while preparing filling.',
	'<#>Make Filling:</#>',
	'Adjust oven rack to lower-middle position and preheat to 400 degrees.',
	'Put chicken and broth in small Dutch oven over medium heat. Cover, bring to simmer; simmer unti chicken is just done, 8 to 10 minutes. Transfer meat to large bowl, reserving broth in measuring cup.',
	'Increase heat to medium-high; heat oil in now-empty pan. Add onions, carrots, and celery; saute until just tender, about 5 minutes. Season to taste with salt and pepper. While vegetables are sauteing, shred meat into bite-sized pieces. Transfer cooked vegetables to bowl with chicken; set aside.',
	'Heat butter over medium heat in empty Dutch oven. When foaming subsides, add flour; cook about 1 minute. Whisk in chicken broth, milk, any accumulated chicken juices, and thyme. Bring to simmer, then continue to simmer until sauce fully thickens, about 1 minute. Season to taste with salt and pepper, stir in sherry.',
	'Pour sauce over chicken mixture; stir to combine. Stir in peas and parsley. Adjust seasonings. Can be covered and refrigerated overnight; reheat before topping with pastry.',
	'To assemble: Roll dough on floured surface to approximate 15x11" rectangle, about 1/8" thick.',
	'Pour chicken mixture into 13x9" pan. Lay dough over pot pie filling, trimming dough to 1/2" of lip. Flute edges all around. Or do not trim dough and simply tuck overhanging dough into pan side. Cut at least four 1" vent holes in crust.',
	'Bake until pasatry is golden brown and filling is bubbly, 30 minutes.'	
);

$ingredientArray = array(
	array("Subgroup", 		0,	"",		"Pie Dough"),
	array("AP Flour", 		213,"g",	"NULL"),
	array("Salt",			0.5,"tsp",	"NULL"),
	array("Butter", 		8,	"tbsp",	"Chilled, 1/4\" pieces"),
	array("Shortening", 	48,	"g",	"Chilled"),
	array("Subgroup", 		0,	"",		"Filling"),
	array("Chicken Thighs Boneless",	1.5,"lb",	"Or Breasts, boneless, skinless"),
	array("Vegetable Oil", 	1.5,"tbsp",	"NULL"),
	array("Onion", 			1, 	"ea",	"NULL"),
	array("Carrot",			3,	"ea",	"peeled, cut crosswise 1/4\" thick"),
	array("Celery",			2,	"rib",	"cut crosswise 1/4\" thick"),
	array("Butter",			4,	"tbsp",	"NULL"),
	array("AP Flour",		70,	"g",	"NULL"),
	array("Milk",			365,"g",	"NULL"),
	array("Dried Thyme",	0.5,"tsp",	"NULL"),
	array("Dry Sherry",		3,	"tbsp",	"NULL"),
	array("Frozen Peas",	0.75,"cup",	"NULL"),
	array("Minced Fresh Parsley", 3,"tbsp",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);