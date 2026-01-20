<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Fresh Pasta",
	"ATK Cooking School. slightly modified",
	"Excellent"
);

$tagArray = array(
	$TagFavorite
);

$instructionArray = array(
	'Pulse flour in food processor to aerate and break up clumps. Add 3 eggs and process until rough dough forms, about 30 seconds',
	'If douge resembles small pebbles, dough is too dry; add water, 1/2tsp at a time and proces until dough forms rough ball.',
	'If dough sticks to sides of bowl, dough is too wet; add flour, 1 tbsp at a time and process until dough forms rough ball.',
	'Turn dough ball and small bits onto dry work surface. Knead by hand until dough is smooth, elastic and homogenoush, several minutes.',
	'Cover dough with plastic wrap and set aside for at lesat 15 minutes and up to 2 hours to allow gluten to relax so dough rolls out easily.',
	'Cut about one-sixth of dough from ball, flatten into disk. Re-cover remaining dough with plastic wrap to prevent drying out.',
	'Run disk through rollers of pasta machine set to widest position. Bring ends of dough towards middle and press down to seal. Feed through rollers again. Repeat until dough rolls smoothly through machine.',
	'If dough is at all sticky, dust with flour.',
	'Roll pasta thinner by putting it through machine repeatedly, narrowing setting each time. Roll until dough is thin and satiny.',
	'Cut pasta sheet into desired dough shape',
);

$ingredientArray = array(
	array("AP Flour", 		10,	"oz",	"NULL"),
	array("Eggs",			3,	"ea",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);