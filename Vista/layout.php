
<?php 

	@session_start();
  echo $_SERVER["REQUEST_URI"];
	//if (empty($_SESSION['estado']) && $_SERVER["REQUEST_URI"] != "/Vista/login-signup.php") {
		//header("Location: login-signup.php");
		//die();
	//}
  /*if(!isset($_SESSSION)){
    header("Location: login-signup.php");
  }*/



?>

<!-- Compiled and minified Jquery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"> </script>
  	
<!-- NAVBAR -->
<!--<nav class="red" style="margin-bottom:100px;" role="navigation">
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
            <li><a href="agregarArticulo.php">Crear Artículo</a></li>
	        	<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
        	<?php endif ?>
      	</ul>
    </div>
</nav>-->

<nav class="red" role="navigation">
      <div class="nav-wrapper container">
        <?php if (@$_SESSION['estado'] == "0"): ?>
          <a href="login-signup.php" class="brand-logo">Party DOG!</a>
        <?php   else: ?>
          <a href="misEventos.php" class="brand-logo">Party DOG!</a>
        <?php endif ?>
          <ul class="right hide-on-med-and-down">
            <?php if (@$_SESSION['estado'] == "1"): ?>
            <li><a href="misEventos.php">Mis Eventos</a></li>
            <li><a href="crearEvento.php">Crear Evento</a></li>
            <li><a href="agregarArticulo.php">Crear Artículo</a></li>
            <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
          <?php endif ?>
          </ul>

          <ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
            <li><a href="#">Navbar Link</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
