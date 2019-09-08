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
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// use database newDB
ExecuteSQL($conn,
	$sql = "USE ".$database);

// Drop all tables
echo "dropping all tables from db cooked...<br>";

if ($result = $conn->query("SHOW TABLES"))
{
    while($row = $result->fetch_array(MYSQLI_NUM))
    {
		echo "&nbsp &nbsp &nbsp &nbsp dropping $row[0]<br>";
        $conn->query('DROP TABLE IF EXISTS '.$row[0]);
    }
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
