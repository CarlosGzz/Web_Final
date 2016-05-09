

<?php 

	session_start();
	session_destroy();
	header("Location: http://localhost/Web_Final/index.php");
	die();

?>