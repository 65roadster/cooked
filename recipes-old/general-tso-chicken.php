<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"General Tso\'s Chicken",
	"https://www.seriouseats.com/the-best-general-tsos-chicken-food-lab-chinese-recipe",
	"Very good replica of restaurant take-home"
);

$tagArray = array(
	$TagMeat,
	$TagFavorite
);

$instructionArray = array(
	'<#>Start heating frying oil and cooking rice:</#>',
	'Start bringing fying oil up to temperature, 350F to 375F. Do not forget to start rice.',
	'<#>Marinate Chicken:</#>',
	'Beat egg whites until broken down. Add soy sauce, wine and voda and mix thoroughly. Reserve half of this mix for use later. Add cornstarch and baking soda and wisk to combine. Add chicken, mix to coat thoroughly, cover with plastic wrap and set aside.',
	'<#>Dry Coat:</#>',
	'Wisk flour, corn starch, baking powder, and salt together in large bowl. Add reserved marinate sauce and wish until the mixture has coarse clumps.',
	'Working one piece at a time, transfer chicken from marinade to dry coat mixture, tossing in between each addition to coat chicken. When all chicken is added to dry coat, toss with hands, pressing dry mixture onto chicken so it adheres, and making sure that every piece is coated thoroughly.',
	'<#>Fry Chicken:</#>',
	'Lift chicken one piece at a time, shake off excess coating, and carefully lower into hot oil (do not drop it). Once all chicken is added, cook, agitating with long chopsticks or a metal spider, and adjusting flame to maintain a temperature of 325 to 375°F (163 to 191°C), until chicken is cooked through and very crispy, about 4 minutes. Transfer chicken to a paper towel-lined bowl to drain. Pour frying oil through a fine-mesh strainer set over a large heatproof bowl; allow to cool, then reserve for future frying.',
	'<#>Make Sauce and Finish:</#>',
	'Combine sugar, chicken stock, soy sauce, wine, vinegar, cornstarch, and sesame oil in a small bowl and stir with a fork until cornstarch is dissolved and no lumps remain. Set aside.',
	'Combine oil, garlic, ginger, minced scallions, and red chiles in a wok or large skillet and place over medium heat. Cook, stirring, until vegetables are aromatic and soft, but not browned, about 3 minutes. Stir sauce mixture and add to wok, making sure to scrape out any sugar or starch that has sunk to the bottom of bowl. Cook, stirring, until sauce boils and thickens, about 1 minute. Add scallion segments.',
	'Add chicken to sauce, then toss, folding it with a wok spatula or silicone spatula until all pieces are thoroughly coated. Serve immediately with white rice.'
		
);

$ingredientArray = array(
	array("Subgroup",		0,	"",		"For Marinade"),
	array("Egg Whites",		1, 	"ea",	""),
	array("Dark Soy Sauce",	2,	"tbsp",	""),
	array("Shaoxing Wine",	2,	"tbsp",	""),
	array("Vodka",			2,	"tbsp",	"80 proof"),
	array("Cornstarch",		3,	"tbsp",	""),
	array("Baking Soda",	0.25,"tsp",	""),
	array("Chicken Thighs Boneless",	1,	"lb",	"trimmed, cut into 3/4\" pieces"),

	array("Subgroup",		0,	"",		"For Dry Coat"),
	array("AP Flour",		62, "g",	""),
	array("Cornstarch",		0.5,"cup",	""),
	array("Baking Powder",	0.5,"tsp",	""),
	array("Kosher Salt",	0.5,"tsp",	""),

	array("Subgroup",		0,	"",		"To Fry Chicken"),
	array("Canola Oil",		1.5,"quart",""),

	array("Subgroup",		0,	"",		"Sauce and Finish"),
	array("Sugar",			13,	"g",	"1T"),
	array("Chicken Broth", 	3,	"tbsp",	""),
	array("Dark Soy Sauce",	45,	"g",	"3T"),
	array("Shaoxing Wine", 	30,	"g",	"2T"),
	array("Rice Vinegar",	30,	"g",	"2T"),
	array("Cornstarch", 	1,	"tbsp",	""),
	array("Toasted Sesame Oil",		1,	"tsp",	""),
	array("Vegetable Oil",	2,	"tsp",	""),
	array("Garlic",			2,	"tsp",	"2 med cloves"),
	array("Ginger",			2,	"tsp",	"3/4\" ginger"),
	array("Scallion",		6,	"ea",	"6 bottoms minced, 1 green parts"),
	array("Arbol Chilis",	8,	"ea",	"remove/reserve seeds"),
	array("Arbol Chili Seeds",	0.125,	"tsp",	"heaping 1/8 tsp")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);