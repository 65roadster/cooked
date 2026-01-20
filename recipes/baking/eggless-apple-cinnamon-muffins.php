<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Eggless Apple Cinnamon Crumb Muffins",
	"https://mommyshomecooking.com/easy-apple-cinnamon-crumb-muffins/#recipe",
	""
);

$tagArray = array(
	$TagBaking,
	$TagFavorite
);

$instructionArray = array(
	'Preheat oven to 425 degrees. Line a 12-cup muffin pan with cupcake liners.',

	'<#>Make Crumb Topping:</#>',
	'Mix all the topping ingredients with a fork until crumbly in a bowl; set aside.',

	'<#>Make Batter:</#>',
	'Whisk the flour, baking powder, baking soda, cinnamon, and salt together in a large bowl until combined. Add the chopped apples and mix to coat with flour. Set aside.',
	'In a mixing bowl, combine the milk, vinegar, vanilla, melted butter, oil, and granulated sugar; mix until the sugar is dissolved.',
	'Fold the wet ingredients into the dry ingredients and mix everything together by hand. Do not overmix; the batter will be thick and a little lumpy.',
	
	'<#>Bake:</#>',
	'Spoon the batter evenly into the muffin cups or liners, filling each one to the top. Then, sprinkle the crumble mixture evenly over the muffins and lightly press.',
	'Bake for 5 minutes, then reduce the oven temperature to 350 degrees and continue baking until golden brown and a toothpick inserted in the center comes out clean, another 20 to 25 minutes.',
	'Allow the muffins to cool for 5 minutes in the muffin pan, then transfer to a wire rack to continue cooling. '
);

$ingredientArray = array(
	array("Subgroup", 		0,		"",		"Batter"),
	array("AP Flour",		420,	"g",	"NULL"),
	array("Baking Powder",	3,		"tsp",	"NULL"),
	array("Baking Soda",	0.5,	"tsp",	"NULL"),
	array("Cinnamon",		1,		"tsp",	"NULL"),
	array("Salt",			0.5,	"tsp",	"NULL"),
	array("Apples",			240 ,	"g",	"peeled and chopped"),
	array("Milk",			360,	"g",	"NULL"),
	array("White Vinegar",		30,		"g",	"NULL"),
	array("Vanilla Extract",1,		"tsp",	"NULL"),
	array("Butter",			5,		"Tbsp",	"melted"),
	array("Vegetable Oil",	80,		"g",	"NULL"),
	array("Sugar",			200,	"g",	"NULL"),

	array("Subgroup", 		0,		"",		"Crumb Topping"),
	array("AP Flour",		140,	"g",	"NULL"),
	array("Cinnamon",		1.5,	"tsp",	"NULL"),
	array("Salt",			0.25,	"tsp",	"NULL"),
	array("Brown Sugar",	67,		"g",	"NULL"),
	array("Butter",			6,		"Tbsp",	"melted"),
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);
?>