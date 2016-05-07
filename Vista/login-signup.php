<?php
	require "../Modelo/connect.php";
	if(!empty($_POST)){
		if(!empty($_POST['correo'])){
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
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>
<body>dtheryjw
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
        <div class="col s10 offset-s1">
          <div class="card white darken-1">
            <div class="card-content gray-text">
            <span class="card-title" id="titulo">Login</span>
            <!-- FORM -->
				<div class="row" id="form">
					<!--Login Html-->
					<form action="login-signup.php"  method="post" class="col s12" style="display:none;" id="loginForm">
				   	<div id="mensaje"></div>
					    <div class="row">
				           	<div class="input-field col s12">
				             	<input id="correo" type="email" class="validate"><!-- campor para ingresar el Email -->
				             	<label for="correo">Email</label>
				           	</div>
				       	</div>
				       	<div class="row">
				           	<div class="input-field col s12">
				             		<input id="contrasena" type="password" class="validate"><!-- campor para ingresar el contrasena -->
				             		<label for="contrasena">Password</label>
				           		</div>
				       		</div>
				       	<div class="row">
				            <div class="input-field col s4">
				      			<button class="btn waves-effect waves-light" id="envia" >Login
				      	    	<i class="material-icons right">send</i>
				      	  		</button>
				            </div>
				   		</div>
				   </form>
				   <!--/Login Html-->
				   <!--Signup Html-->
					<form action="login-signup.php"  method="post" class="col s12" style="display:none;" id="signupForm">
					   <div class="row">
					      <div class="input-field col s6">
					      	<input id="nombre" name="nombre" type="text" class="validate" required>
					         <label for="nombre">Nombre</label>
					      </div>
					      <div class="input-field col s6">
					      	<input id="apellido" name="apellido" type="text" class="validate" required>
					      	<label for="apellido">Apellido</label>
					      </div>
					   </div>
					   <div class="row">
					   	<div class="input-field col s12">
					   		<input id="correo" name="correo" type="email" class="validate" required>
					   		<label for="correo">Correo</label>
					    	</div>
					   </div>
					   <div class="row">
					    	<div class="input-field col s12">
					    		<input id="contrasena" name="contrasena" type="password" class="validate" required>
					    		<label for="contrasena">Contraseña</label>
					    	</div>
					   </div>
					   	<div class="row">
					    	<div class="input-field col s12">
					    		<input id="contrasenaConfirmar" name="contrasenaConfirmar" type="password" class="validate" required>
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
				   <!--/Signup Html-->
			  	</div>
			  	<!-- /FORM -->
			  	<div class="card-action">
	              Ya tienes cuenta <a href="#" id="login">Login</a>
	              Eres Nuevo <a href="#" id="signup">Signup</a>
	         </div>
          </div>
        </div>
      </div>
      </div>
	
	<!-- /BODY CONTENT -->
	<!-- Compiled and minified Jquery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  	<!-- signinLogin Controller -->
	<script type="text/javascript" src="../Controlador/signinLoginController.js"></script>
	<!-- login controller-->
	<script type="text/javascript" src="../Controlador/loginOperaciones.js"></script>
</body>
</html>