<html>
<head>
	<!--Let browser know website is optimized for mobile-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Main Page </title>

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

</head>
<body cz-shortcut-listen="true">
  	<nav class="red" role="navigation">
    	<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Party DOG</a>
	      	<ul class="right hide-on-med-and-down">
	        	<li><a href="#">Eventos</a></li>
	        	<li><a href="#">Mis Eventos</a></li>
	        	<li><a href="#">Perfil</a></li>
	      	</ul>

      		<ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
        		<li><a href="#">Navbar Link</a></li>
      		</ul>
      		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    	</div>
  	</nav>
  

	<!-- /BODY CONTENT -->
	<div class="container">
		<div class="row">
			<div class="section"></div>
			<!-- Tarjeta de Perfil-->
			<div class=" col  m3">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="Imagen/<?php 	if(isset($_SESSION)){
																					if(file_exists('/Imagenes/$_SESSION["img"]?')){
																						echo $_SESSION['img'];
																					}else{
																						echo "default.png";
																					}
																				}else{
																					echo "default.png";
																				}
																		?>">
				    </div>
				    <div class="card-content">
				    	<span class="card-title activator grey-text text-darken-4"><?php 	if(isset($_SESSION)){
																													echo $_SESSION["nom"];
																												}else{
																													echo "Nombre de Perfil";
																												}
																										?>
						<i class="material-icons right">more_vert</i></span>
				    	<p><a href="#">This is a link</a></p>
				    </div>
				    <div class="card-reveal">
				        <span class="card-title grey-text text-darken-4">Eventos<i class="material-icons right">close</i></span>
				      	<p>
				      		<ul>
				      			<li>
				      				<a href="">Link 1</a>
				      			</li>
				      			<li>
				      				<a href="">Link 1</a>
				      			</li>
				      		</ul>
				      	</p>
				    </div>
				</div>
			</div>
			<!-- /Tarjeta de Perfil-->

			<!-- Tarjeta de Evento-->
			<div class="col m8">
				<div class="section"> Eventos | <a href="">Publicos</a> | <a href=""> Mis Eventos</a></div>
				<div class="scroll">
		         <div class="card">
		            <div class="card-image">
		              <img src="Imagen/eventsDefault.jpg">
		              <span class="card-title">Nombre del Evento</span>
		            </div>
		            <div class="card-content">
		              <p>Lunes, 24 de Marzo 2016 las 10:00am</p>
		            </div>
		         </div>
		     	<a href="eventos.html">next page</a>
		      </div>
		   </div>
	      <!-- /Tarjeta de Evento-->


	      </div>
		</div>
	<!-- /BODY CONTENT -->

  	<!-- Boton -->
  	<div class="fixed-action-btn" style="bottom: 40px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
  	<!-- /Boton -->
 

	<div class="hiddendiv common"></div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div></body>
	

	<!-- /BODY CONTENT -->
	<!-- Compiled and minified Jquery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"> </script>
  	<!-- JSCROLL -->
  	<script src="../Controlador/JScroll/jquery.jscroll.min.js" /></script>
   <script src="../Controlador/JScroll/jquery.jscroll.js" /></script>
   <script type="text/javascript">
      $(document).ready(function() { 
        $('.scroll').jscroll({
          autoTrigger: true,
          padding: 10,
          autoTriggerUntil: 10
        })
      });
    </script>
</body>
</html>
