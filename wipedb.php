 <!-- drops all tables from the database, preparing it for reloading -->
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
ini_set('display_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// use database "cooked" (.$database is defined in creds.php)
ExecuteSQL($conn, $sql = "USE ".$database);

// Drop all tables
echo "dropping all tables from db cooked...<br>";

if ($result = $conn->query("SHOW TABLES"))
{
	echo "List of tables<br>";
    while($row = $result->fetch_array(MYSQLI_NUM))
    {
		echo "&nbsp &nbsp &nbsp &nbsp $row[0]<br>";
    }
	
	echo "Dropping tables<br>";
	echo "&nbsp &nbsp &nbsp &nbsp TagList<br>";
	$conn->query('DROP TABLE IF EXISTS TagList');
	echo "&nbsp &nbsp &nbsp &nbsp RecipeIngredients<br>";
	$conn->query('DROP TABLE IF EXISTS RecipeIngredients');
	echo "&nbsp &nbsp &nbsp &nbsp RecipeInstructions<br>";
	$conn->query('DROP TABLE IF EXISTS RecipeInstructions');
	echo "&nbsp &nbsp &nbsp &nbsp Recipes<br>";
	$conn->query('DROP TABLE IF EXISTS Recipes');
	echo "&nbsp &nbsp &nbsp &nbsp MasterTagList<br>";
	$conn->query('DROP TABLE IF EXISTS MasterTagList');
	echo "&nbsp &nbsp &nbsp &nbsp Units<br>";
	$conn->query('DROP TABLE IF EXISTS Units');
	echo "Done, tables dropped<br>";

//	$result = $conn->query("SHOW TABLES");
//    while($row = $result->fetch_array(MYSQLI_NUM))
//    {
//		echo "&nbsp &nbsp &nbsp &nbsp dropping $row[0]<br>";
//        $retval = $conn->query('DROP TABLE IF EXISTS '.$row[0]);
//		$retval->fetch_assoc();
//		echo "retval = $retval<br>";
//		echo "here 3<br>";
//    }
//	echo "here 4<br>";
}


// Drop all tables a second time to make sure any lingering tables are dropped
echo "<br>second time in order to catch any lingering<br>";

if ($result = $conn->query("SHOW TABLES"))
{
    while($row = $result->fetch_array(MYSQLI_NUM))
    {
		echo "&nbsp &nbsp &nbsp &nbsp dropping $row[0]<br>";
        $conn->query('DROP TABLE IF EXISTS '.$row[0]);
    }
}

// ahow any remaining tables, shoudl be none
echo "<br>listing all remaining tables<br>";

if ($result = $conn->query("SHOW TABLES"))
{
    while($row = $result->fetch_array(MYSQLI_NUM))
    {
		echo "$row[0]<br>";
        $conn->query('DROP TABLE IF EXISTS '.$row[0]);
    }
}
echo "done<br><br>";

?>

</html>
