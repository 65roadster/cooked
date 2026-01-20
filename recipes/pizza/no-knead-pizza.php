<?php

//include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('No Knead Pizza', 'Jim Lahey', 'Ray\'s Favorite Pizza')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

ExecuteSQL($conn,
	"INSERT INTO TagList (recipe, tag) VALUES
	($RecipeID, $TagPizza),
	($RecipeID, $TagFavorite)
	;", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Mix flour, yeast and salt in medium bowl. Add water and mix. Cover with plastic and let rise until doubled, around 18 hours at 72F.'),
	($RecipeID, 'Scrape the dough onto a floured surface. Divide into 4 equal parts, fold 4 sides into the center to shape into rounds and place seam side down onto pan. Cover with plastic wrap and refrigerate until ready to use (up to 3 days) or proceed straight to shaping.'),
	($RecipeID, 'To shape, gently press into disc and then pull around the edge until desired size is reached.'),
	($RecipeID, 'Put baking stone in oven and preheat 550F for 1 hr. Bake for approx 3 min/side.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES
	($RecipeID, $BreadFlour,'500', 	$grams, NULL),
	($RecipeID, $Salt, 		'16', 	$grams, NULL),
	($RecipeID, $Yeast, 	'0.25', $tsp, 	NULL),
	($RecipeID, $Water, 	'350', 	$grams, 'room temp')
	;", FALSE);

?>
