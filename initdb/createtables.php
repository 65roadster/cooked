<?php
/*
	This file creates the tables that hold the list of recipes the recipe instructions
	and the ingredients associated in each recipe
*/

include 'cooked_funcs.php';

// sql code to create table
ExecuteSQL($conn,
	$sql = "CREATE TABLE Recipes (
	id INT(4)  primary key auto_increment, 
	name VARCHAR(128) NOT NULL UNIQUE,
	source VARCHAR(128),
	description VARCHAR(128) NOT NULL
	)", FALSE);

// sql code to create table
ExecuteSQL($conn,
	$sql = "CREATE TABLE RecipeInstructions (
	id INT(4)  primary key auto_increment, 
	recipe INT NOT NULL,
	instruction VARCHAR(1024) NOT NULL
	)", FALSE);

ExecuteSQL($conn,
	$sql = "CREATE TABLE RecipeIngredients(
	id INT(4)  primary key auto_increment, 
	recipe INT NOT NULL,
	ingredient INT NOT NULL,
	amount VARCHAR(16),
	unit INT NOT NULL,
	description VARCHAR(64),
	FOREIGN KEY (recipe) REFERENCES Recipes(id),
	FOREIGN KEY (unit) REFERENCES Units(id)
	)", FALSE);

?>
