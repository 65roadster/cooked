<!--
	Displays a recipe selected by the user
	the recipe ID is passed in the URL as part of a GET
-->
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

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $recipe_name ?></title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!--
	Display headline recipe info
-->
<header>
	<?php echo $recipe_name ?>
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
						Units.name,
						MasterIngredientList.name,
						RecipeIngredients.description,
						MasterIngredientList.unit,
						MasterIngredientList.calories
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
		$calorieTotal = 0;
		while ($row = mysqli_fetch_array($exec)) {
			$rowCount++;
			$amount = $row[0];
			$unit = $row[1];
			$ingredient = $row[2];
			$description = $row[3];
			$calorie_unit = $row[4];
			$calories_per_unit = $row[5];

			/* Display decimal as fraction if appropriate */
			$whole = floor($amount);
			$decimal = $amount - $whole;
			$fraction = "X";
			
/*			switch ($decimal) {
				case "0.125":
					$fraction = "1/8";
					break;
				case "0.25":
					$fraction = "1/4";
					break;
				case "0.33":
					$fraction = "1/3";
					break;
				case "0.333":
					$fraction = "1/3";
					break;
				case "0.5":
					$fraction = "1/2";
					break;
				case "0.66":
					$fraction = "2/3";
					break;
				case "0.666":
					$fraction = "2/3";
					break;
				case "0.75":
					$fraction = "3/4";
					break;
				default:
			}
*/			
			// Combine whole and fraction appropriately
			if ($fraction != "X") { // if a decimal-fraction conversion ocurred
				if ($whole == 0) {
					$amount = $fraction;
				}
				else {
					$amount = "$whole-$fraction";
				}
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
							else {
								echo $amount . "" . $unit . " " . $ingredient;
								if ($description == NULL) {
									echo " ";
								}
								else {
									echo ", ";
								}
								echo $description;
								$calories = "X";
								if ($calorie_unit == "g") {
									if ($unit == "g") {
										$calories = $calories_per_unit * $amount;
									}
									else if ($unit == "kg") {
										$calories = $calories_per_unit * $amount * 1000;
									}
									else if ($unit == "oz") {
										$calories = $calories_per_unit * $amount * 28.3495;
									}
									else if ($unit == "lb") {
										$calories = $calories_per_unit * $amount * 453.5924;
									}
								}
								elseif ($calorie_unit == "oz") {
									if ($unit == "g") {
										$calories = $calories_per_unit * $amount / 28.3495;
									}
									else if ($unit == "kg") {
										$calories = $calories_per_unit * $amount * 1000 / 28.3495;
									}
									else if ($unit == "oz") {
										$calories = $calories_per_unit * $amount;
									}
								}
								elseif ($calorie_unit == "tsp") {
									if ($unit == "tsp") {
										$calories = $calories_per_unit * $amount;
									}
									else if ($unit == "Tbsp") {
										$calories = $calories_per_unit * $amount * 4;
									}
									else if ($unit == "cup") {
										$calories = $calories_per_unit * $amount * 3 * 16;
									}
								}
								elseif ($calorie_unit == "tbsp") {
									if ($unit == "tsp") {
										$calories = $calories_per_unit * $amount / 3;
									}
									else if ($unit == "Tbsp") {
										$calories = $calories_per_unit * $amount;
									}
									else if ($unit == "Cup") {
										$calories = $calories_per_unit * $amount * 16;
									}
									else if ($unit == "Cup") {
										$calories = $calories_per_unit * $amount * 16;
									}
								}
								elseif ($calorie_unit == "cup") {
									if ($unit == "tsp") {
										$calories = $calories_per_unit * $amount / 16 / 3;
									}
									else if ($unit == "Tbsp") {
										$calories = $calories_per_unit * $amount / 16;
									}
									else if ($unit == "Cup") {
										$calories = $calories_per_unit * $amount;
									}
									else {
										
									}
								}
								else if ($calorie_unit == $unit) {
									$calories = $calories_per_unit * $amount;
								}
								
								if ($calories_per_unit == 0) {
									$calories = 0;
								}

								if ($calories == "X") {
									echo "    <span style=\"border:2px solid red;\">Conversion failed from ".$unit." to ".$calorie_unit.". Calories = 0</span>";
								}
								else {
									$calorieTotal = $calorieTotal + $calories;
									echo ", calories = " . intval($calories);
								}
								
							}
							?>
				</td>
            </tr>
		<?php
		}
		?>
		</tbody>
	</table>
	</div>
  </ingredients>
</section>

<!--
	Display footer information
-->
<footer>
<?php
	echo "Calorie Total = ".intval($calorieTotal)."<br>";
?>
</footer>

<?php
	// close db connection
	$conn->close();
?>

</body>
</html>