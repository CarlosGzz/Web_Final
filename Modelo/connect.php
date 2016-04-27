<?php
	$servername = "us-cdbr-iron-east-03.cleardb.net";
	$username = "b0cd0f01775543";
	$password = "b5e22ee3";
	$dbname = "heroku_513fc836dde6412";

	// Create connection
	$db = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($db->connect_error) {
		die("Connección fallida: Lo sentimos estamos teniendo problemas" . $db->connect_error);
	}
?>
