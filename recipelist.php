<!-- Site home page, lists tags and recipes -->

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Cooked</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>

<?php

//include 'header.php';
include 'cooked_funcs.php';
include 'creds.php';

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// use database
ExecuteSQL($conn,
	$sql = "USE ".$database);

?>

<!--
	Show list of checkboxes with tags that are in the database
	These can be checked so the user can filter recipes
-->

<body>
<div class = "tag-list">
	<h1>Recipe List</h1>
	<div class="tag-grid">
	<?php

		// get a list of tags, order by "favorite" first and
		// then the rest of the tags alphabetically
		$query = "SELECT DISTINCT MasterTagList.name FROM TagList ".
			"INNER JOIN MasterTagList ".
			"ON MasterTagList.id = TagList.tag ".
			"ORDER BY CASE name WHEN 'favorite' THEN 1 ELSE 2 END, name ASC";
		$exec = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_array($exec)) {
			$tagName = $row[0];
	?>
		<div class="tag-tag">
				<?php echo $tagName;?><input type="checkbox" name="tags" value="<?php echo $tagName;?>" onclick='handleClick(this)' >
		</div>
	<?php }	?>
	</div>
</div>


<!-- -->
<!-- Show list of recipes -->
<!-- -->
<section>
<instructions>
<div class="recipe-list" id="recipe-list">

</div>
</instructions>
</section>

<script>
	// after page has loaded get the array of checked tags and
	// call php url that will display the list of associated recipes
	$(document).ready(function(){
		var array =  $("input[name='tags']:checked").map(function(){
			return this.value;
		}).get()
		var jarray = JSON.stringify(array);
		console.log(jarray);
		$.ajax({
			url:'updaterecipelist.php',
			type:'POST',
			datatype: 'json',
			ContentType: 'application/json',
			data:jarray,
			success:function(result) {
				$("#recipe-list").html(result);
			},
		});
	});
</script>

<script type='text/javascript'>

// if mouse click event occurs get the array of checked tags and
// call php url that will display the list of associated recipes
// *** ??? this code is duplicated from the above function - should refactor
function handleClick(cb) {
	var array =  $("input[name='tags']:checked").map(function(){
		return this.value;
	}).get()
	var jarray = JSON.stringify(array);
	console.log(jarray);
	$.ajax({
		url:'updaterecipelist.php',
		type:'POST',
		datatype: 'json',
        contenttype: 'application/json',
		data:jarray,
		success:function(result) {
			$("#recipe-list").html(result);
		},
	});
}

</script>
</body>

<footer>
</footer>

</html>

<?php
	// close database connection
	$conn->close();
?>
