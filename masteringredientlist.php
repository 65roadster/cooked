<!-- display list of ingredients and their associated IDs -->

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

// Creating a connection
$conn = new mysqli($servername, $username, $password);
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
		<h1>Master Ingredients List</h1>
        <?php

          $query = "SELECT * FROM MasterIngredientList";
          $exec = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($exec)) {
            $ingredient_id = $row['id'];
            $ingredient_name = $row['name'];
            $ingredient_unit = $row['unit'];
            $ingredient_calories = $row['calories'];
//            $ingredient_description = $row['description'];
         ?>
            <tr>
                <td class="text-center"><?php echo $ingredient_id; ?>
                  <input type="hidden" name="product_id[]" value="<?php echo $product_id; ?>">
                </td>
                <td><?php echo $ingredient_name; ?></td>
                <td><?php echo $ingredient_unit; ?></td>
                <td><?php echo $ingredient_calories; ?></td>
<!--                <td><?php echo $ingredient_description; ?></td> -->
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