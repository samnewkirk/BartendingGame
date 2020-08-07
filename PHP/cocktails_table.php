<?php

$server = "localhost";
$username = "snewkirk1";
$password = "snewkirk1";
$db = "snewkirk1";

$conn = new mysqli($server, $username, $password, $db);
	if($conn->connect_error){
		die("connection failed: " . $conn->connect_error);
	}

$sql = "CREATE TABLE cocktails(
	ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(50),
	Type VARCHAR(50),
	Spirit VARCHAR(50), 
	Difficulty INT(1), 
	Recipe TEXT )";

if($conn->query($sql) === TRUE){
	echo "Table cocktails created successfully";
}else{
	echo "Error creating table: " .$conn->error;
}

$conn->close();
?>
