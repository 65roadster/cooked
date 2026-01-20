<?php

include 'cooked_funcs.php';

ExecuteSQL($conn,
	"INSERT INTO Recipes (name, source, description)
	VALUES ('Scones', 'The Science of Good Cooking, p371', '')
	;", FALSE);

$RecipeID = mysqli_insert_id($conn);

ExecuteSQL($conn,
	"INSERT INTO TagList (recipe, tag) VALUES
	($RecipeID, $TagBaking)
	;", FALSE);

ExecuteSQL($conn,
	"INSERT INTO RecipeInstructions (recipe, instruction) VALUES
	($RecipeID, 'Adjust oven rack to middle position and preheat to 425 degrees. Line baking sheet with parchment paper.'),
	($RecipeID, 'Remove half of wrapper from frozen sticks of butter and grate half of each stick on large holes of cheese grater. Put grated butter in freezer until needed. Melt 2T of remaining butter and set aside. Save remaining butter for another use. Place blueberries in freezer until needed.'),
	($RecipeID, 'Wisk milk and sour cream together in medium bowl; refrigerate until needed. Wisk flour, 1/2C sugar, baking powder, baking soda, salt and lemon zest together in medium bowl. Add frozen grated butter to flour mixture and toss with fingers until butter is thoroughly coated.'),
	($RecipeID, 'Add milk mixture to flour mixture and fold with rubber spatula until just combined. Transfer to floured surface and knead 6-8 times, unti lit just holds together in a ragged ball, adding flour as needed to prevent sticking.'),
	($RecipeID, 'Roll dough into a 12\"x12\" square. Fold in thirds, then fold in thirds again to get a 4\"x4\" square. Transfer to a plate dusted with flour and chill in freezer for 5 minutes.'),
	($RecipeID, 'Transfer dough to floured counter and roll into approximate 12\" square again. Sprinkle blueberries evenly over surface of dough, then press down so they are slightly embedded. Using bench scraper, roll dough into a cylinder to form a tight log, seam side down and press into a 12\"x4\" rectangle. Using a sharp, floured knife, cut rectangle crosswise into 4 equal pieces, then cut into 8 triangles and transfer to prepared baking sheet.'),
	($RecipeID, 'Brush tops with melted butter and sprinkle with sugar, bake until tops and bottoms are golden brown, about 20-30 minutes.'),
	($RecipeID, 'To make ahead: After placing scones on baking sheet either refrigerate them overnight or freeze for up to 1 month. When ready to bake, for refrigerated scones, follow directions above. For frozen scones, do not thaw. Preheat oven to 375 degrees and follow directions above, extending cooking time as needed.')
	;", FALSE);
	
ExecuteSQL($conn,
	"INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description)
	VALUES ".
	InsertIngredient($conn, $RecipeID, "Butter",		16,	"Tbsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Blueberries",	4,	"oz",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Whole Milk",	120,"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Sour Cream",	120,"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "AP Flour",		285,"g",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Sugar", 		100,"g", 	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Baking Powder", 2,	"tsp",	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Baking Soda", 	0.25,"tsp", "NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Salt", 			0.5,"tsp", 	"NULL") . "," .
	InsertIngredient($conn, $RecipeID, "Lemon Zest", 	1,	"tsp", 	"Grated") .
	";", FALSE);
?>
