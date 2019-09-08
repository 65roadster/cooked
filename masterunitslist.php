<!-- display list of units and their associated IDs -->

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Cooked</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">

</head>

<?php

include 'cooked_funcs.php';
include 'creds.php';

///////
//
// Tables
//
// Recipes - each row is one recipe_description
// MasterIngredientList - list of ingredients used by recipes
// Units - units of measure used by ingredients
// RecipeIngredients - List of ingredients and measures used by recipes

include 'creds.php';

// Creating a connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// use database newDB
ExecuteSQL($conn,
	$sql = "USE ".$database);

?>

<div>
	<table>
		<tbody>
		<h1>Master Units List</h1>
        <?php

          $query = "SELECT * FROM Units";
          $exec = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($exec)) {
            $ingredient_id = $row['id'];
            $ingredient_name = $row['name'];
            $ingredient_namePlural = $row['namePlural'];
            $ingredient_description = $row['description'];
         ?>
            <tr>
                <td class="text-center"><?php echo $ingredient_id; ?>
                  <input type="hidden" name="product_id[]" value="<?php echo $product_id; ?>">
                </td>
                <td><?php echo $ingredient_name; ?></td>
                <td><?php echo $ingredient_namePlural; ?></td>
                <td><?php echo $ingredient_description; ?></td>
            </tr>
            <?php } ?>

		</tbody>
	</table>
</div>


<?php

// closing connection
$conn->close();

?>

</html>