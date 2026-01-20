<!-- Wipes out and reloads the entire database -->

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
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_begin_transaction($conn, MYSQLI_TRANS_START_READ_WRITE);

// use database newDB
ExecuteSQL($conn,
	$sql = "USE ".$database);

// Wipe all tables first

echo "->drop all tables first<br>";
include 'wipedb.php';	

// Create all tables, insert all rows

echo "->create table MasterIngredientList<br>";
include 'initdb/masteringredientlist.php';	

echo "->create table MasterUnitsList<br>";
include 'initdb/masterunitslist.php';	

echo "->create table Recipes and RecipeDescriptions<br>";
include 'initdb/createtables.php';	

echo "->create table TagList<br>";
include 'initdb/mastertaglist.php';	

echo "->add recipes<br>";
include 'initdb/insertrecipes.php';	

echo "->done<br>";

mysqli_commit($conn);

// close db connection
mysqli_close($conn);

?>

</html>
