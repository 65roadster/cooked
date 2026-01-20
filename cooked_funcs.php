<!-- Utility functions used in various places in php code -->


<?php
/*
	Function for executing an SQL command
	Silent if command is successful unless $debug is true
	Echos an error message if command is not successful
	
	$cmd is the command to be executed
	$conn is the database connection to be used
*/
if (!function_exists('ExecuteSQl')) {
	function ExecuteSQL($conn, $cmd, $debug = FALSE) {
		if ($conn->query($cmd) === TRUE) {
			if ($debug == TRUE) {
				echo "Success: " . $cmd . "<br>";
			}
		} else {
			echo "<errormsg>*** ERROR: " . $cmd . " msg-> ". $conn->error . "<br></errormsg>";
		}
	}
}

/*
	Function to get row of database in which an ingredient is stored

	$conn is the database connection to be used
	$ingredientName is a string containing the ingredient
	if $debug == TRUE then debug info is echo'ed out
 */
if (!function_exists('GetIngredientRow')) {
	function GetIngredientRow($conn, $ingredientName, $debug = FALSE) {
		echo "ingredient lookup:" . $ingredientName . "<br>";
		$sqlCommand = "select * from IngredientList where name = " .  $ingredientName . ";";
		$result = mysqli_query($conn, $sqlCommand);
		$id = mysqli_fetch_array($result,MYSQLI_NUM)[0];

		$result = mysqli_query($conn, "select * from IngredientList where id = " . $id . ";");
		$row = mysqli_fetch_array($result,MYSQLI_NUM);
		if ($debug == TRUE) {
			echo "  -> ".$row[0].", ".$row[1].", ".$row[2]."<br>";
		}
	}
}

/*
	Function to get primary key id of an ingredient

	$conn is the database connection to be used
	$ingredientName is a string containing the ingredient
	if $debug == TRUE then debug info is echo'ed out
	
	returns id
 */
if (!function_exists('GetIngredientID')) {
	function GetIngredientID($conn, $ingredientName, $debug = FALSE) {
		$sqlCommand = "select id from MasterIngredientList  where name = " . $ingredientName . ";";
		$result = mysqli_query($conn, $sqlCommand);
		$row = mysqli_fetch_array($result,MYSQLI_NUM);
		$id = $row[0];
		if(!mysqli_num_rows($result)) {
			echo "<errormsg>***ERROR GetIngredientID $ingredientName not found<br></errormsg>";
		}
		if ($debug == TRUE) {
			echo "id = " . $id . "<br>";
		}
		return ($id);
	}
}

/*
	Function to get primary key id of a unit

	$conn is the database connection to be used
	$unitsName is a string containing the unit
	if $debug == TRUE then debug info is echo'ed out
	
	returns id
 */
if (!function_exists('GetUnitsID')) {
	function GetUnitsID($conn, $unitsName, $debug = FALSE) {
		$sqlCommand = "select id from Units where name = " . $unitsName . ";";
		$result = mysqli_query($conn, $sqlCommand);
		$row = mysqli_fetch_array($result,MYSQLI_NUM);
		$id = $row[0];
		if(!mysqli_num_rows($result)) {
			echo "<errormsg>***ERROR GetUnitsID $unitsName not found<br></errormsg>";
		}
		if ($debug == TRUE) {
			echo "id = " . $id . "<br>";
		}
		return ($id);
	}
}

/*
	Function to get primary key id of a tag
	
	$conn is the database connection to be used
	$tagName is a string containing the tag
	if $debug == TRUE then debug info is echo'ed out
	
	returns id
 */
if (!function_exists('GetTagID')) {
	function GetTagID($conn, $tagName, $debug = FALSE) {
		$sqlCommand = "select id from MasterTagList where name = " . $tagName . ";";
		$result = mysqli_query($conn, $sqlCommand);
		$row = mysqli_fetch_array($result,MYSQLI_NUM);
		$id = $row[0];
		if(!mysqli_num_rows($result)) {
			echo "<errormsg>***ERROR GetTagID $tagName not found<br></errormsg>";
		}
		if ($debug == TRUE) {
			echo "id = " . $id . "<br>";
		}
		return ($id);
	}
}

/*
	*** depricated 
	*** used by older recipes to insert ingredients into the ingredient list

	Function to insert an ingredient into the list of ingredients used in a particular recipe
	To insert "100 grams apples chopped"
	"100" = $amount
	"grams" = $unit
	"apples" = $ingredient
	"chopped" = $comment
	
	$conn is the database connection to be used
	$recipeID is the recipe that uses this ingredient
	$amount is the amoung of the ingredient used in this recipe
	$unit is the unit associated with the amount of this ingredient
	$comment is a comment that is appended to the display of this ingredient
*/
if (!function_exists('InsertIngredient')) {
	function InsertIngredient($conn, $recipeID, $ingredientName, $amount, $unit, $comment) {
		$string =	"($recipeID," . 
					GetIngredientID($conn,"'".$ingredientName."'").",".
					"'$amount',".
					GetUnitsID($conn,"'".$unit."'") . ",";
					
			if ($comment == "NULL") {
				$string = $string . "NULL)";
			}
			else {
				$string = $string . "'$comment')";
			}
			
		return $string;
	}
}

/*
	Function to insert the list of instructions to make a recipe
	
	$conn is the database connection to be used
	$recipeID is the recipe that uses this ingredient
	$instructionArray is the list of instructions for this recipe
		Tags can be used to highlight instructions:
		<#> </#> -> <strong><em><u>
		<#red> </#red> -> <strong><em><span style="color:red">
*/
if (!function_exists('InsertInstructions')) {
	function InsertInstructions($conn, $recipeID, $instructionArray) {
		$sqlCommand = "INSERT INTO RecipeInstructions (recipe, instruction) VALUES ";

		$firstInstruction = TRUE;
		
		foreach ($instructionArray as $instruction) {
			if ($firstInstruction == TRUE) {
				$firstInstruction = FALSE;
			}
			else {
				$sqlCommand = $sqlCommand . ',';
			}

			$instruction = str_replace("<#>", "<br><strong><em><u>", $instruction);
			$instruction = str_replace("</#>", "</u></em></strong>", $instruction);
			$instruction = str_replace("<#red>", "<strong><em><span style=\"color:red\">", $instruction);
			$instruction = str_replace("</#red>", "</span style=\"color:red\"></em></strong>", $instruction);
			$sqlCommand = $sqlCommand . "($recipeID, '$instruction')";
		}
		$sqlCommand = $sqlCommand . ";";
		ExecuteSQL($conn,$sqlCommand, FALSE);
	
	}
}

/*
	Function to insert the list of tags associated with a recipe
	
	$conn is the database connection to be used
	$recipeID is the recipe that uses this ingredient
	$tagArray is the list of tags for this recipe
*/
if (!function_exists('InsertTagArray')) {
	function InsertTagArray($conn, $recipeID, $tagArray) {
		$sqlCommand = "INSERT INTO TagList (recipe, tag) VALUES ";

		$firstInstruction = TRUE;
		
		foreach ($tagArray as $tag) {
			if ($firstInstruction == TRUE) {
				$firstInstruction = FALSE;
			}
			else {
				$sqlCommand = $sqlCommand . ',';
			}
			$sqlCommand = $sqlCommand . "($recipeID, '$tag')";
		}
		$sqlCommand = $sqlCommand . ";";
		ExecuteSQL($conn,$sqlCommand, FALSE);
	
	}
}

/*
	Function to insert the array of ingredients used to make a recipe
	
	$conn is the database connection to be used
	$recipeID is the recipe that uses this ingredient
	$ingredientArray is the list of tags for this recipe
*/
if (!function_exists('InsertIngredients')) {
	function InsertIngredients($conn, $recipeID, $ingredientArray) {
		$sqlCommand = "INSERT INTO RecipeIngredients (recipe, ingredient, amount, unit, description) VALUES ";

		$firstInstruction = TRUE;
		
		foreach ($ingredientArray as $ingredient) {
			if ($firstInstruction == TRUE) {
				$firstInstruction = FALSE;
			}
			else {
				$sqlCommand = $sqlCommand . ',';
			}
			$sqlCommand = $sqlCommand . 
					"($recipeID," . 
					GetIngredientID($conn,"'".$ingredient[0]."'").",".
					"'$ingredient[1]',".
					GetUnitsID($conn,"'".$ingredient[2]."'") . ",";
			
			if ($ingredient[3] == "NULL") {
				$sqlCommand = $sqlCommand . "NULL)";
			}
			else {
				$sqlCommand = $sqlCommand . "'$ingredient[3]')";
			}
		}
		$sqlCommand = $sqlCommand . ";";
		ExecuteSQL($conn,$sqlCommand, FALSE);
	
	}
}

/*
	Function to insert a new recipe into the database
	
	$conn is the database connection to be used
	$recipeInfoArray is an array of high level info about the recipe 
		$recipeInfoArray[0] = recipe name (e.g. Yogurt)
		$recipeInfoArray[1] = recipe source (e.g. Cook's Illustrated)
		$recipeInfoArray[2] = comment about recipe (e.g. favorite yogurt ever)
*/
if (!function_exists('InsertRecipe')) {
	function InsertRecipe($conn, $recipeInfoArray) {
		$sqlCommand = "INSERT INTO Recipes (name, source, description)
		VALUES ('$recipeInfoArray[0]', '$recipeInfoArray[1]', '$recipeInfoArray[2]');";
	
		ExecuteSQL($conn,$sqlCommand, FALSE);
	
	}
}

if (!function_exists('sigFig')) {
	function sigFig($value, $digits)
	{
		if ($value == 0) {
			$decimalPlaces = $digits - 1;
		} elseif ($value < 0) {
			$decimalPlaces = $digits - floor(log10($value * -1)) - 1;
		} else {
			$decimalPlaces = $digits - floor(log10($value)) - 1;
		}

		$answer = round($value, $decimalPlaces);
		return $answer;
	}
}
?>
