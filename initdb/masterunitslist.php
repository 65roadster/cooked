<?php

/*
	This file inserts all of the units that can be used by recipes
	
	Each units is a row in the MasterUnitsList table
	Each units can not be NULL and must be unique
*/

include 'cooked_funcs.php';

// sql code to create units table
ExecuteSQL($conn,
	"CREATE TABLE Units(
    id INT(4)  primary key auto_increment, 
	name VARCHAR(128) NOT NULL UNIQUE,
	namePlural VARCHAR(128),
	description VARCHAR(128)
	)", FALSE);

// sql code to add units to table
ExecuteSQL($conn,
	"INSERT INTO Units (name, namePlural, description)
	VALUES
	('', 's', NULL),
	('clove', 'cloves', NULL),
	('Cup', 'Cups', NULL),
	('ea', NULL, NULL),
	('g', NULL, NULL),
	('inch', 'inches', NULL),
	('large', NULL, NULL),
	('lb', 'lbs', NULL),
	('lemon', 'lemons', NULL),
	('loaf', 'loaves', NULL),
	('medium', NULL, NULL),
	('ml', NULL, NULL),
	('oz', NULL, NULL),
	('quart', 'quarts', NULL),
	('rib', 'ribs', NULL),
	('slice', 'slices', NULL),
	('small', NULL, NULL),
	('Tbsp', NULL, 'Tablespoon'),
	('tsp', NULL, 'Teaspoon')
	;", FALSE);
?>

