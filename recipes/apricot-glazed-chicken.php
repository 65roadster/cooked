<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Apricot Glazed Chicken",
	"https://www.thekitchn.com/easy-apricot-glazed-chicken-256177#post-recipe-12578",
	""
);

$tagArray = array(
	$TagChicken
);

$instructionArray = array(
    'Arrange a rack in the middle of the oven and heat to 350°F.',
	'Place the apricot preserves, vinegar, tamari or soy, ginger, garlic, and red pepper flakes in a small bowl and whisk to combine; set aside.',
	'Pat the chicken thighs dry with paper towels and season on both sides with salt and pepper. Heat the oil in a large cast iron or oven-safe skillet over medium-high heat until shimmering but not smoking. Add the chicken skin-side down and cook until the fat is rendered and the skin is crisp and golden-brown, adjusting the heat if the skin begins to burn, 6 to 8 minutes.',
	'Flip the chicken thighs and carefully pour the glaze evenly over them. Transfer the skillet to the oven and cook, spooning some of the glaze in the skillet back over the chicken halfway through, until chicken reaches an internal temperature of 165°F, 10 to 12 minutes total. Sprinkle the chicken with cilantro and serve, with plenty of the sauce, over rice.'
);

$ingredientArray = array(
	array("Apricot Preserves", 	0.75,   "cup",	"NULL"),
	array("Rice Vinegar", 		0.333,  "cup",	"Nakano seasoned"),
	array("Soy Sauce", 			2,    	"Tbsp",	"NULL"),
	array("Ginger", 			1,  	"Tbsp",	"fresh grated"),
	array("Garlic", 			2,  	"clove","Minced"),
	array("Red Pepper Flakes", 	0.125,  "tsp",	"Pinch"),
	array("Chicken Thighs Bone In", 2,  "lb",	"NULL"),
	array("Olive Oil", 			1,  	"Tbsp",	"NULL"),
	array("Cilantro", 			0.25,  	"cup",	"chopped"),
	array("Broccoli", 			1.5,  	"cup",	"one head"),
	array("White Rice", 		1,  	"cup",	"NULL"),
	array("Water", 				1.25,  	"cup",	"for rice")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);

?>