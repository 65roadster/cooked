<!--
	Displays a recipe selected by the user
	the recipe ID is passed in the URL as part of a GET
-->

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Cooked</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php

include 'cooked_funcs.php';
include 'creds.php';

// Open MYSQL Connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select database to use
ExecuteSQL($conn,
	$sql = "USE ".$database);

// get recipe id parameter passed in via URL (GET)
$recipe_id = $_GET['id'];

// formulate query to retrieve recipe information and parse it
$query = "SELECT * FROM Recipes where id = " . $recipe_id;
$exec = mysqli_query($conn, $query);
$row = mysqli_fetch_array($exec);
$recipe_id = $row['id'];
$recipe_name = $row['name'];
$recipe_source = $row['source'];
$recipe_description = $row['description'];
?>

<!--
	Display headline recipe info
-->
<header>
	<?php echo $recipe_name ?>
	<br>
	<description><?php echo $recipe_description ?></description>
</header>


<!--
	Display list of ingredients
-->
<section>
  <ingredients>
	<div>
	<h3>Ingredients</h3>
	<table>
		<tbody>

        <?php
		// get the list of recipe ingredients, amounts, units, descriptions
		$query = "SELECT RecipeIngredients.amount,
						Units.name, MasterIngredientList.name,
						RecipeIngredients.description
				FROM RecipeIngredients 
				INNER JOIN Units
					ON RecipeIngredients.unit = Units.id
				INNER JOIN MasterIngredientList
					ON RecipeIngredients.ingredient = MasterIngredientList.id
				WHERE RecipeIngredients.recipe = " . $recipe_id . "
				";
		$exec = mysqli_query($conn, $query);
		
		// iterate through rows of recipe ingredients
		$rowCount = 0;
		while ($row = mysqli_fetch_array($exec)) {
			$rowCount++;
			$amount = $row[0];
			$unit = $row[1];
			$ingredient = $row[2];
			$description = $row[3];
			$convertedAmount = "NA";
			if ($unit == 'g') {
			  $convertedAmount = $amount;
			}
			else if ($unit == 'oz') {
				$convertedAmount = $amount * 28.3495;
			}
			else if ($unit == 'tsp') {
				$convertedAmount = $amount * 28.3495;
			}
				?>
					<tr>
						<td>
							<?php

							// if ingredient contents = Subgroup then this is simply a
							// comment line to display
							if ($ingredient == "Subgroup") {
								if ($rowCount != 1) {
									echo "<br>";
								}
								echo "<strong><em><u>$description</u></em></strong>";
							}

							// else it's a regular ingreident line, display it
							// regular recipe view shows $description, but we skip it here
							else {
								echo " ";
								echo $amount . "" . $unit . " (" . $convertedAmount . "g) " . $ingredient;
							}
							?>
				</td>
            </tr>
		<?php } ?>
		</tbody>
	</table>
	</div>
  </ingredients>
  
<!--
	Display recipe instructions
-->
  <instructions>
	<h3>Instructions</h3>

		<?php
		// formulate query and retrieve list of instructions
		$query = "SELECT instruction
				FROM RecipeInstructions
				WHERE RecipeInstructions.recipe = " . $recipe_id . "
				";
		$exec = mysqli_query($conn, $query);
		
		// iterate through list of instructions and display them
		while ($row = mysqli_fetch_assoc($exec)) {
		?>
            <?php echo $row['instruction']; ?><br><br>
		<?php } ?>

  </instructions>
</section>

<!--
	Display footer information
-->
<footer>
	<table>
		<tbody>
            <tr>
			<td>tags:</td>

        <?php
		// formulate query and retrieve list of tags associated with this recipe
		$query = "SELECT MasterTagList.name
				FROM TagList 
				INNER JOIN MasterTagList ON TagList.tag = MasterTagList.id
				WHERE TagList.recipe = " . $recipe_id . "
				";
		$exec = mysqli_query($conn, $query);
		
		// iterate through list of tags and display them
		while ($row = mysqli_fetch_array($exec)) {
			$tag = $row[0];
		?>
			<td><?php echo $tag; ?></td>
		<?php } ?>
            </tr>
		</tbody>
	</table>
  <p>Source: <?php echo $recipe_source ?></p>
</footer>

<?php
	// close db connection
	$conn->close();
?>

</body>
</html>