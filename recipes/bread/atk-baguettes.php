<?php

include 'cooked_funcs.php';

$recipeInfoArray = array(
	"Baguettes",
	"ATK Cooking School",
	""
);


$tagArray = array(
	$TagBread,
	$TagFavorite
);

$instructionArray = array(
	'Sift 38g (1/4 cup) whole-wheat flour through fine-mesh strainer into bowl of stand mizer. Discard bran remaining in strainer.',
	'Add 425g (3 cups) all-purpose flour, 1.5 tsp salt, 1 tsp instant yeast and 1 tsp diastatic malt powder into mizer bowl.',
	'Fit stand mixer with dough hook, add 340g (3 cups) water and knead on low speed until cohesive dough forms and no dry flour remains, 5-7 minutes.',
	'Transfer dough to lightly oiled large bowl, cover with plastic wrap and <#red>lest rest at room temperature for 30 minutes</#red>.',
	'Holding edge of dough with your fingertips, fold dough over itself by gently lifting and folding edge of dough toward center.',
	'Turn bowl 45 degrees and fold again. Turn and fold 6 more times for a total of 8 folds. Cover with plastic and <#red>let rise for 30 minutes. Repeat folding and rising every 30 minutes, 3 more times.</#red>',
	'After 4th set of folds cover bowl tightly with plastic and refrigerate for <#red>at least 24 hours or up to 72 hours.</#red>',
	'Transfer dough to lightly floured counter, pat into 8\" sqaure (do not deflate) and divide in  half.',
	'Return 1 piece of dough to container, wrap tightly with plastic and refrigerate (dough can be shaped and baked any time within 72 hour window.',
	'Divide remaining dough in half crosswise, transfer to lightly floured rimmed bakiung sheet, and cover loosely with plastic. <#red>Let rest for 45 minutes.</#red>',
	'On lightly floured counter, roll each piece of dough into loose 3\­ to 4\­inch\­long cylinder. Return to floured baking sheet and cover with plastic. <#red>Let rest at room temperature for 30 minutes.</#red>',
	'Lightly mist underside of couche with water. Drape over inverted baking sheet, and dust with flour.',
	'Gently press 1 piece of dough into 6 by 4­inch rectangle on lightly floured counter with long edge facing you.',
	'Fold upper quarter of dough toward center and press gently to seal.',
	'Rotate dough 180 degrees and repeat folding step to form 8 by 2\" rectangle.',
	'Fold doug in half toward you, using thumb of your other hand to create crease along center of dough, seling iwth heel of your hand as you work your way along the loaf.',
	'Without pressing down on loaf, use heel of your hand to reinforce seal (do not seal ends of loaf).',
	'Cup your hand over center of dough and roll dough back and fold gently to tighten (it should form dog-bone shape.',
	'Starting at center of dough and working toward ends, gently and evenly roll and stretch dough until it measures 15\" long by 1.5\" wide.',
	'Moving your hands in opposite directions, use back and forth motion to roll ends of loaf under your palms to form shar points.',
	'Transfer dough to floured couche, seam side up. On either side of loaf, pinch edges of couche into pleat, then cover loosely with large plastic garbage bag.',
	'Repeat to shape second loaf.',
	'Fold edges of couche over loaves to cover completely, then carefully place sheet inside bag and tie or fold under to enclose.',
	'Let stand until loaves have nearly doubled in size and dough springs back minimally when poked gently with fingertip, <#red>45-60 minutes</#red>.',
	'While bread rises, adjust oven rack to middle position, place baking stone on rack and heat to 500 degrees',
	'Line pizza peel wth 16x12\" parchment paper. Gently transfer loaves to parchment paper with 3\" spacing between loaves.',
	'Slash tops of loaves with lame. Transfer loaves, on parchment paper, to baking stone, cover with stacked inverted disposable pans and bake for 5 minutes.',
	'Carefully remove pans and bake until loaves are evenly browned, 12-15 minutes longer, rotating parchment halfway through baking.',
	'Transfer loaves to cooling rack and let cool for at least 20 minutes. Consume within 4 hours'
);
	
$ingredientArray = array(
	array("Whole wheat flour", 	38,	"g",	"NULL"),
	array("AP Flour", 			425,"g",	"NULL"),
	array("Salt", 				1.5,"tsp",	"NULL"),
	array("Yeast",	 			1,	"tsp",	"NULL"),
	array("Diastatic malt powder",1,"tsp",	"NULL"),
	array("Water", 				340,"tsp",	"NULL")
);

InsertRecipe($conn, $recipeInfoArray);
$RecipeID = mysqli_insert_id($conn);

InsertTagArray($conn, $RecipeID, $tagArray);
InsertInstructions($conn, $RecipeID, $instructionArray);
InsertIngredients($conn, $RecipeID, $ingredientArray);