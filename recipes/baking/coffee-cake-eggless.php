<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Peach Coffee Cake",
	"stuff",
	""
);

$tagArray = array(
	$TagBaking
);

$instructionArray = array(
	'Preheat oven to 350F. Line a 8x8-inch or 9x9-inch squre cake pan with parchment paper. Lightly grease with baking spray.',
	'<#>Prepare the Peaches:</#>',
	'Peel, pit, and chop the peaches. Combine flour and sugar, and sprinkle mixture over the peaches. Toss until peaches are evenly coated. Set aside.',
	'<#>Prepare the Crumb Topping:</#>',
	'Mix flour, sugar, and salt in a medium bowl. Add the melted butter and use a fork to combine until mixture resembles coarse crumbs. Set aside. ',
	'<#>Make the Cake Batter:</#>',
	'Combine flour, baking powder, baking soda, and salt in a large mixing bowl. In separate bowl, whisk together milk, vinegar, butter, oil, sugar, and vanilla. Add wet ingredients to dry ingredients, mix to combine.',
	'<#>Assemble and Bake:</#>',
	'Spread half of batter into the prepared baking pan. Add half of the peaches on top of the batter. Then, add the remaining batter on top of the peaches, and then add the remaining peaches on top.  Sprinkle the crumb evenly over the top. Bake for 55-60 minutes, or until a toothpick inserted in the center comes out clean or with a few crumbs. Cool in the pan for 10 minutes, then remove from pan to cool completely before glazing and cutting.',
	'<#>Glaze:</#>',
	'Whisk together powdered sugar and milk. Drizzle over cooled cake.'
);

$ingredientArray = array(
	array("Subgroup", 			0,		"",	"Peaches"),
	array("Peaches", 			420,	"g",	"chopped"),
	array("AP Flour", 			18,		"g",	""),
	array("Brown Sugar", 		24,		"g",	""),
	array("Subgroup", 			0,		"",	"Crumb Topping"),
	array("AP Flour", 			70,		"g",		""),
	array("Brown Sugar", 		70,		"g",		""),
	array("Salt",				0.25,	"tsp",		""),
	array("Unsalted Butter",	4,		"Tbsp",		"melted"),
	array("Subgroup", 			0,		"",	"Cake Batter"),
	array("AP Flour", 			350,	"g",		""),
	array("Baking Powder", 		10,		"g",		""),
	array("Salt",				4,		"g",		""),
	array("Milk",				1.25,	"cup",		""),
	array("White Vinegar",		4,		"tsp",		""),
	array("Unsalted Butter",	4,		"Tbsp",		"melted"),
	array("Vegetable Oil",		67,		"ml",		""),
	array("Sugar",				162,	"g",		""),
	array("Vanilla Extract",	1,		"tsp",		""),
	array("Subgroup", 			0,		"",	"Glaze"),
	array("Powdered Sugar",		60,		"g",		""),
	array("Milk",				2.5,	"tsp",		"")
	
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);