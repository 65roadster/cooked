<?php

/*
	This file inserts all of the tags that can be used by recipes
	
	Each tag is a row in the MasterTagList table
	Each tag can not be NULL and must be unique
*/

include 'cooked_funcs.php';

// sql code to create units table
ExecuteSQL($conn,
	"CREATE TABLE MasterTagList(
    id INT(4)  primary key auto_increment, 
	name VARCHAR(128) NOT NULL UNIQUE
	)", FALSE);

// sql code to add units to table
ExecuteSQL($conn,
	"INSERT INTO MasterTagList (name)
	VALUES
	('baking'),
	('bbq'),
	('bread'),
	('chicken'),
	('dessert'),
	('favorite'),
	('meat'),
	('other'),
	('pizza'),
	('sides')
	;", FALSE);
	
ExecuteSQL($conn,
	"CREATE TABLE TagList(
    id INT(4)  primary key auto_increment, 
	tag INT NOT NULL,
	recipe INT NOT NULL,
	FOREIGN KEY (tag) REFERENCES MasterTagList(id),
	FOREIGN KEY (recipe) REFERENCES Recipes(id)
	)", FALSE);

?>
