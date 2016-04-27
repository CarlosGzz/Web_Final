<?php
	require "../Modelo/connect.php";
	echo '$_POST["correo"]';
	if(!empty($_POST)){
		echo "2";
		if(!empty($_POST['correo'])){
			echo "3";
			$Nombre = $_POST["nombre"];
			$Apellido = $_POST["apellido"];
			$Correo = $_POST["correo"];
			$Contraseña = $_POST["contrasena"];

			$sql = "INSERT INTO Organizadores 
					(correo, contra, nombre, apellido, estado)
					VALUES 
					('$Correo', '$Contraseña', '$Nombre', '$Apellido', '0')";
			if ($db->query($sql) === TRUE) {
				echo "<script> alert('Nuevo Usuario Creado Exitosamente')</script>";
			} else {
				echo "Error: " . $sql . "<br>" . $db->error;
			}	
			$db->close();
		}
	}

?>
<html>
<head>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Sing Up For Party Dog</title>

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
</head>
<body>
	<!-- NAVBAR -->
	<nav>
	    <div class="nav-wrapper">
	      	<a href="#" class="brand-logo">Party DOG!</a>
	      	<ul id="nav-mobile" class="right hide-on-med-and-down">
	        	<li><a href="">Mis Eventos</a></li>
	        	<li><a href="">Eventos</a></li>
	        	<li><a href="">Amigos</a></li>
	      	</ul>
	    </div>
  	</nav>
  	<!-- /NAVBAR -->
  	<!-- BODY CONTENT-->
	<div class="container">
		<div class="row">
			<h2>Sign UP</h2>
		</div>

		<!-- FORM -->
		<div class="row">
		    <form action="signup.php" class="col s12">
			    <div class="row">
			        <div class="input-field col s6">
			          	<input id="nombre" type="text" class="validate">
			          	<label for="nombre">Nombre</label>
			        </div>
			        <div class="input-field col s6">
			          	<input id="apellido" type="text" class="validate">
			          	<label for="apellido">Apellido</label>
			        </div>
			    </div>
			    <div class="row">
			    	<div class="input-field col s12">
			    		<input id="correo" type="email" class="validate">
			    		<label for="correo">Correo</label>
			        </div>
			    </div>
			    <div class="row">
			    	<div class="input-field col s12">
			    		<input id="contrasena" type="password" class="validate">
			    		<label for="contrasena">Contraseña</label>
			        </div>
			   	</div>
			   	<div class="row">
			    	<div class="input-field col s12">
			    		<input id="contrasenaConfirmar" type="password" class="validate">
			    		<label for="contrasenaConfirmar">Confirmar Contraseña</label>
			        </div>
			   	</div>
			    <div class="row">
			   		<div class="input-field col s4">
			          	<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    					<i class="material-icons right">send</i>
 						</button>
			        </div>
			    </div>
		    </form>
	  	</div>
	  	<!-- /FORM -->
	</div>
	<!-- /BODY CONTENT -->
	<!-- Compiled and minified Jquery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"> </script>
</body>
</html>