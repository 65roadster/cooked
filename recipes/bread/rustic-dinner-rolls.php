<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Rustic Dinner Rolls",
	"America\'s Test Kitchen Baking Book",
	""
);

$tagArray = array(
	$TagBread
);

$instructionArray = array(
    'Whisk water, yeast, and honey in bowl of stand mixer until well combined, making sure no honey sticks to bottom of bowl. Add flours and mix on low speed with dough hook until cohesive dough is formed, about 3 minutes. Cover bowl with plastic wrap and let sit at room temperature <#red>30 minutes</#red>.',
	'Remove plastic wrap and evenly sprinkle salt over dough. Knead on low speed (speed 2 on KitchenAid) 5 minutes. (If dough creeps up attachment, stop mixer and scrape down using well-floured hands or greased spatula.) Increase speed to medium and continue to knead until dough is smooth and slightly tacky, about 1 minute. If dough is very sticky, add 1 to 2 tablespoons flour and continue mixing 1 minute. Lightly spray 2-quart bowl with nonstick cooking spray; transfer dough to bowl and cover with plastic wrap. Let dough rise in warm, draft-free place until doubled in size, about <#red>1 hour</#red>.',
	'Fold dough over itself; rotate bowl quarter turn and fold again. Rotate bowl again and fold once more. Cover with plastic wrap and let rise <#red>30 minutes</#red>. Repeat folding, replace plastic wrap, and let dough rise until doubled in volume, about <#red>30 minutes</#red>.',
	'Preheat oven to 500F.',
	'Transfer dough to floured work surface, sprinkle top with flour. Using bench scraper cut dough into desired portions. Roll into tight balls and place on parchment lined cookie sheet. Loosely cover with plastic wrap and let rise until doubled in volume, about <#red>30 minutes</#red>.',
	'Remove plastic wrap, spray rolls lightly with water, and place in oven. Bake 10 minutes until tops of rolls are brown; remove from oven. Reduce oven temperature to 400 degrees; Continue to bake until rolls develop deep golden brown crust and sound hollow when tapped on bottom, 10 to 15 minutes; rotating baking sheet halfway through baking time. Transfer rolls to wire rack and cool to room temperature, about <#red>1 hour</#red>.'
);

$ingredientArray = array(
	array("Bread Flour", 		470,    "g",	"NULL"),
	array("Whole Wheat Flour", 	28,  	"g",	"NULL"),
	array("Water", 				355,    "g",	"Room temperature"),
	array("Yeast", 				1.5,  	"tsp",	"NULL"),
	array("Salt", 				1.5,  	"tsp",	"NULL"),
	array("Honey", 				2,  	"tsp",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);

?>