


<html>
<head>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Party Dog: Agregar Artículo</title>

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  	<link type="text/css" rel="stylesheet" href="css/rodo-style.css"/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>

	<?php require "layout.php"; ?>

	<form action="crearEvento.php" method="post" id="crearEventoForm" enctype="multipart/form-data">
		<div class="container">

			<h4>Agregar Artículo</h4>
			<br><br>

			<div class="row">
				<div class="input-field col s8">
					<input id="nombre" name="nombre" type="text" class="validate" required>
					<label for="nombre">Nombre</label>
				</div>
			</div>

			<div class="row">
				<div class="col s8">
					<button id="agregarArea" class="right btn pink waves-effect waves-light" type="submit" name="action" style="margin-top:30px;">
						Guardar evento
					</button>
				</div>
			</div>

		</div>
	</form>

</body>
</html>