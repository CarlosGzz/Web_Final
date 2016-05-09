

<?php 

	session_start();
	session_destroy();
	header("Location: http://partydog.herokuapp.com/Web_Final/index.php");
	die();

?>