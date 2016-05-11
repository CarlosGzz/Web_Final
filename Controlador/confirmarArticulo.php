
<?php 

	if($_GET["nom"] && $_GET["ca"])
	{
		require "../Modelo/connect.php";
     	echo "Welcome ". $_GET['un']. "<br />";
      	
      	$sql = "UPDATE articulos
				SET estado=1
				WHERE nombre='".$_GET['nom']."' 
				AND claveAcceso='".$_GET["ca"]."';";

		$db->query($sql);

		header("Location: http://partydog.herokuapp.com/Vista/login-signup.php");
      	exit();
   	}

?>