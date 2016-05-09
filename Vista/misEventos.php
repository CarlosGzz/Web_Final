

<?php 
	
	session_start();
	require "../Modelo/connect.php";

	$query = "SELECT id 
		  	FROM organizadores 
		  	WHERE correo='".$_SESSION['correo']."' and nombre='".$_SESSION['nombre']."'";
		
	$consulta = $db->query($query);
	$row = mysqli_fetch_array($consulta, MYSQL_ASSOC);
	$idOrg = $row['id'];

	$query = "SELECT * 
		  	FROM relacionorganizadoreseventos 
		  	WHERE organizadorId='$idOrg'";
		
	$consulta = $db->query($query);

	$eventos = array();

	for ($i=0; $row = mysqli_fetch_array($consulta, MYSQL_ASSOC); $i++)
	{ 
		$eventos[$row['id']] = $row;
	}

	foreach ($eventos as $key => $relacion)
	{
		$query = "SELECT * 
			  	FROM eventos 
			  	WHERE id='".$relacion['eventoId']."';";
			
		$consulta = $db->query($query);

		$eventos[$key]['Eventos'] = mysqli_fetch_array($consulta, MYSQL_ASSOC);


		$query = "SELECT * 
			  	FROM organizadores 
			  	WHERE id='".$relacion['organizadorId']."';";
			
		$consulta = $db->query($query);

		$eventos[$key]['Organizadores'] = mysqli_fetch_array($consulta, MYSQL_ASSOC);

		unset($eventos[$key]['id']);
		unset($eventos[$key]['eventoId']);
		unset($eventos[$key]['organizadorId']);
	}

?>



<html>
<head>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Party Dog: Mis Eventos</title>

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  	<link type="text/css" rel="stylesheet" href="css/rodo-style.css"/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>

	<?php require "layout.php"; ?>

	<div class="container">
		<div class="row">
			<?php foreach ($eventos as $key => $evento): ?>
				
				<div class="col s6" style="margin-bottom:40px;">
					<div class="col s10 offset-s1">
						<div class="card large white darken-1">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="../Imagenes/<?php echo $evento['Eventos']['imagen'] ?>">
							</div>
							<div class="card-content gray-text">
								<span class="card-title activator grey-text text-darken-4">
								 	<?php echo $evento['Eventos']['nombre'] ?>
								 	<i class="material-icons right">more_vert</i>
								</span>
							</div>
	    					<div class="card-reveal">
	    						<span class="card-title grey-text text-darken-4">
	    							<?php echo $evento['Eventos']['nombre'] ?>
	    							<i class="material-icons right">close</i>
	    						</span>
								<p>
									<?php echo $evento['Eventos']['descripcion'] ?><br><br>
									<b>Dirección:</b><br>
									<?php echo $evento['Eventos']['direccion'] ?><br><br>
									<b>Fecha:</b><br>
									<?php echo $evento['Eventos']['fecha'] ?><br><br>
									<b>Clave de Acceso:</b><br>
									<?php echo $evento['Eventos']['claveAcceso'] ?><br><br>
									<b>Link:</b><br>
									<a href="http://localhost/Web_Final/Vista/eventos.php?ca=<?php echo $evento['Eventos']['claveAcceso'] ?>">
										http://localhost/Web_Final/Vista/eventos.php?ca=<?php echo $evento['Eventos']['claveAcceso'] ?>
									</a>
								</p>
								<div class="right" style="margin-top:7px;">
									<a href=""><i class="material-icons">edit</i></a>
									&nbsp;&nbsp;&nbsp;
									<a href="http://localhost/Web_Final/Vista/eventos.php?ca=<?php echo $evento['Eventos']['claveAcceso'] ?>"><i class="material-icons">visibility</i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			<?php endforeach ?>
		</div>
	</div>

</body>
</html>