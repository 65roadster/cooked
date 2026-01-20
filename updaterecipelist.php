<?php

/*
	Echos a formatted html list of recipes to be displayed based on which tags have been selected.
	This file is called from an ajax script each time the list needs to be generated
	
	$tagsSelected is an array of tags that are selected (empty if none are selected)
*/

$errorLogging = false;
$logDir = "logs/php.log";

include 'cooked_funcs.php';
include 'creds.php';

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// use database
ExecuteSQL($conn, $sql = "USE ".$database);

// get the JSON payload
$request_body = file_get_contents('php://input');
// decode it into an array
$tagsSelected = json_decode($request_body);

/*
log_info("\n----------------------\nTags: ", 3, "logs/php.log");
if ($tagsSelected == array()) {
	log_info("(none)", 3, "logs/php.log");
}
foreach ($tagsSelected as $tag) {
	log_info($tag . ', ', 3, "logs/php.log");
}
log_info("\n----------------------\n", 3, "logs/php.log");
*/

echo '<table width="100%">';
echo '<tbody>';
echo '	<tr>';
//echo '		<td>ID</td>';
echo '		<td>Name</td>';
echo '		<td>Description</td>';
echo '	</tr>';

// if no tags are selected, don't include that in the query
if ($tagsSelected == array()) {
	$query = "SELECT * FROM Recipes ORDER BY Recipes.name ASC";
}

// if tags are selected, find recipes that match all tags
else {
$query = "SELECT Recipes.id, Recipes.name, Recipes.description FROM TagList\n" .
		"  INNER JOIN MasterTagList\n" .
		"    ON MasterTagList.id = TagList.tag\n" .
		"  INNER JOIN Recipes\n" .
		"    ON TagList.recipe = Recipes.id\n" .
		"WHERE MasterTagList.name IN (";
	$query = $query . "'" . $tagsSelected[0] . "'";

	for ($i = 1 ; $i < count($tagsSelected) ; $i++) {
		$query = $query . ", '" . $tagsSelected[$i] . "'"	;
	}

	$query = $query . ") 
	GROUP BY Recipes.name, Recipes.id
	HAVING COUNT(Recipes.name)=".count($tagsSelected)." ORDER BY Recipes.name ASC";
}

log_info( $query . "\n", 3, "logs/php.log");

// get the recipe list using the query generated above
$exec = mysqli_query($conn, $query);

log_info( "# of rows: " . mysqli_num_rows($exec) . "\n", 3, "logs/php.log");

// for each recipe, create a table row and display appropriate information
while ($row = mysqli_fetch_array($exec)) {
	$recipe_id = $row['id']; 
	$recipe_name = $row['name'];
	$recipe_description = $row['description'];
	echo '    <tr>';
//	echo '	    <td>' . $recipe_id . '</td>';
	echo '	    <td><a href="viewrecipe.php?id=' . $recipe_id . '">' . $recipe_name . '</a></td>';
	echo '      <td>' . $recipe_description . '</td>';
	echo '    </tr>';
}

echo '</tbody>';
echo '</table>';

// used to log info to file
function log_info($txt) {
	global $errorLogging, $logDir;
	if ($errorLogging == true)
		error_log($txt, 3, $logDir);
}

?>