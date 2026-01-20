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
include 'header.php';

// Creating a connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// use database newDB
ExecuteSQL($conn,
	$sql = "USE ".$database);

echo 'truncating tables...<br>';
$conn->query('TRUNCATE TABLE RecipeIngredients');
$conn->query('TRUNCATE TABLE RecipeInstructions');
$conn->query('TRUNCATE TABLE TagList');
$conn->query('DELETE FROM Recipes');

include 'initdb/insertrecipes.php';
echo "done<br>";

?>

</html>
