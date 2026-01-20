<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Sausage-Stuffed French Loaf",
	"Souther Living Quick & Easy Weeknight Favorites",
	""
);

$tagArray = array(
	$TagMeat,
	$TagFavorite
);

$instructionArray = array(
	'Adjust rack to upper middle position and preheat oven to 400 degrees.',
	'Cut off ends of loaf, set ends aside. Hollow out loaf with a long serrated bread knife, leaving a 1/2\" shell. Process bread removed from inside of loaf in a food processor to make coase bread crumbs.',
	'Cook sausage, beef, and onion in a large skillet until meat is browned, stirring until it crumbles, drain. Stir in 2 cups breadcrumbs, cheese, egg, parsley, basil, salt and pepper.',
	'Place bread sheel on foil lined baking sheet. Spoon cooked mixture into bread shell, replace ends.',
	'Mix butter in a saucepan. Add garlic, cook 1 minute. Brush over loaf. Wrap loaf in foil, leaving top open slightly; bake for 25 minutes. Cut each loaf into pieces, serve.'
);
	
$ingredientArray = array(
	array("French Bread",			1,	"loaf",	"16oz ea"),
	array("Ground Pork Sausage",	0.25,"lb",	"NULL"),
	array("Ground Beef",			0.25,"lb",	"NULL"),
	array("Onion",					1,	"ea",	"NULL"),
	array("Mozzarella Cheese",		4,	"oz",	"Shredded"),
	array("Egg",					1,	"ea",	"NULL"),
	array("Fresh Parsley",			0.12,"cup",	"Chopped"),
	array("Dried Basil",			0.25,"tsp",	"NULL"),
	array("Salt",					0.25,"tsp",	"NULL"),
	array("Pepper",					0.125,"tsp",	"NULL"),
	array("Butter",					1,	"Tbsp",	"NULL"),
	array("Garlic",					1,	"Clove","NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);

?>

