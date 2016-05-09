
<?php 
	
	@session_start();
	if (empty($_SESSION['estado']) && $_SERVER["REQUEST_URI"] != "/Web_Final/Vista/login-signup.php") {
		header("Location: http://partydog.herokuapp.com/Web_Final/Vista/login-signup.php");
		die();
	}

?>

<!-- Compiled and minified Jquery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"> </script>
  	
<!-- NAVBAR -->
<nav>
    <div class="nav-wrapper">
        <?php if (@$_SESSION['estado'] == "0"): ?>
          <a href="login-signup.php" class="brand-logo">Party DOG!</a>
        <?php else: ?>
          <a href="misEventos.php" class="brand-logo">Party DOG!</a>
        <?php endif ?>
      	<ul id="nav-mobile" class="right hide-on-med-and-down">
        	<?php if (@$_SESSION['estado'] == "1"): ?>
        		<li><a href="misEventos.php">Mis Eventos</a></li>
            <li><a href="crearEvento.php">Crear Evento</a></li>
            <li><a href="agregarArticulo.php">Agregar Artículo</a></li>
	        	<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
        	<?php endif ?>
      	</ul>
    </div>
</nav>
<br><br><br><br>