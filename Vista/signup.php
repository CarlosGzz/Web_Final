<?php
	require "MODEL/connect.php";

?>
<html>
<head>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Sing Up For Party Dog</title>

	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
		    <form class="col s12">
			    <div class="row">
			        <div class="input-field col s6">
			          	<input id="first_name" type="text" class="validate">
			          	<label for="first_name">Nombre</label>
			        </div>
			        <div class="input-field col s6">
			          	<input id="last_name" type="text" class="validate">
			          	<label for="last_name">Apellido</label>
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
			    		<input id="password" type="password" class="validate">
			    		<label for="password">Contraseña</label>
			        </div>
			   	</div>
			   	<div class="row">
			    	<div class="input-field col s12">
			    		<input id="passwordConfirm" type="password" class="validate">
			    		<label for="passwordConfirm">Confirmar Contraseña</label>
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