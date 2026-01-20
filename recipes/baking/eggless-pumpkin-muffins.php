<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Eggless Pumpkin Muffins",
	"https://mommyshomecooking.com/eggless-pumpkin-muffins/#recipe",
	""
);

$tagArray = array(
	$TagBaking,
	$TagFavorite
);

$instructionArray = array(
	'Preheat oven to 425 degrees. Line a 12-cup muffin pan with cupcake liners.',

	'<#>Make Batter:</#>',
	'In a large bowl, whisk together flour, baking powder, baking soda, pumpkin pie spice, and salt. Set aside.',
	'In a separate medium bowl, whisk together melted butter, brown sugar, pumpkin puree, vanilla, buttermilk and vinegar.',
	'Add the wet ingredients to the dry ingredients and mix until just combined. Let rest for 10-15 minutes while making crumble.',

	'<#>Make Crumble:</#>',
	'In a medium bowl, stir together sugar, flour and cinnamon. Add butter and use a fork to cut into the flour until mixture is coarse crumbs.',

	'<#>Bake:</#>',
	'Spoon batter into cupcake liners, filling to the top. Sprinkle crumble evenly over muffins.',
	'Bake 5 minutes, reduce oven temperature to 350 degrees and bake until golden brown and a toothpick comes out clean, another 20-25 minutes. Transfer to a wire rack to cool.',

	'<#>Glaze (Optional):</#>',
	'When muffins are cool, whisk together powdered sugar and milk and drizzle over the tops.'
);

$ingredientArray = array(
	array("Subgroup", 		0,		"",		"Batter"),
	array("AP Flour",		280,	"g",	"NULL"),
	array("Baking Powder",	3,		"tsp",	"NULL"),
	array("Baking Soda",	0.5,	"tsp",	"NULL"),
	array("Pumpkin Pie Spice",1,	"tbsp",	"NULL"),
	array("Salt",			0.5,	"tsp",	"NULL"),
	array("Butter",			0.5,	"cup",	"melted"),
	array("Brown Sugar",	250,	"g",	"NULL"),
	array("Pumpkin Puree",	240,	"g",	"NULL"),
	array("Vanilla Extract",1,		"tsp",	"NULL"),
	array("Buttermilk",		120,	"g",	"NULL"),
	array("Apple Cider Vinegar",0.5,"tsp",	"NULL"),

	array("Subgroup", 		0,		"",		"Crumble"),
	array("Sugar",			100,	"g",	"NULL"),
	array("AP Flour",		47,		"g",	"NULL"),
	array("Butter",			0.25,	"cup",	"NULL"),
	array("Cinnamon",		1,		"tsp",	"NULL"),

	array("Subgroup", 		0,		"",		"Glaze"),
	array("Powdered Sugar",	120,	"g",	"NULL"),
	array("Milk",			30,		"g",	"NULL"),
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);
?>