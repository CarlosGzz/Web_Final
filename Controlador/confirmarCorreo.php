
<?php 

	if($_GET["un"])
	{
		require "../Modelo/connect.php";
     	echo "Welcome ". $_GET['un']. "<br />";
      	
      	$sql = "UPDATE organizadores
				SET estado=1
				WHERE correo='".$_GET['un']."';";
		$db->query($sql);
		header("Location: http://partydog.herokuapp.com/Web_Final/Vista/login-signup.php");
      	exit();
   	}

?>