

<?php 

	require "../Modelo/connect.php";


	$query = "SELECT nombre 
		  	FROM articulos 
		  	WHERE estado='1'
		  	ORDER BY nombre";
		
	$consulta = $db->query($query);

	$articulos = array();

	for ($i=0; $row = mysqli_fetch_array($consulta); $i++)
	{ 
		$articulos[$i] = $row;
	}


	if(!empty($_POST))
	{
		$nombre = $_POST["nombre"];
		
		require_once "../Controlador/claveAcceso.php";

		$query = "INSERT INTO articulos 
				(nombre, claveAcceso)
				VALUES 
				('$nombre', '$randomString')";

		if ($db->query($query) === TRUE)
		{
			require_once "../Controlador/PHPMailerAutoload.php";
			$mail = new PHPMailer;

			$mail->isSMTP();
			$mail->CharSet = 'UTF-8';
			$mail->Host = 'ssl://smtp.zoho.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'no-responder@actstudio.mx';
			$mail->Password = 'Zaragoza210a';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;

			$mail->setFrom('no-responder@actstudio.mx', 'Party Dog!');
			$mail->addAddress('rodomix94@hotmail.com');

			$mail->isHTML(true);

			$mail->Subject = 'Party Dog: Confirma Artículo Agregado.';
			$mail->Body    = "<h2>$nombre</h2><br>".
				'Confirma Artículo en:<br>
				<a href="http://partydog.herokuapp.com/Controlador/confirmarArticulo.php?nom='.$_POST["nombre"].'&ca='.$randomString.'">http://partydog.herokuapp.com/Controlador/confirmarArticulo.php?nom='.$_POST["nombre"].'&ca='.$randomString.'</a>';

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			}
		}

		$db->close();

		header("Location: http://partydog.herokuapp.com/Vista/misEventos.php");
		die();
	}

 ?>

<html>
<head>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Party Dog: Crear Artículo</title>

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  	<link type="text/css" rel="stylesheet" href="css/rodo-style.css"/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>

	<?php require "layout.php"; ?>

	<form action="agregarArticulo.php" method="post" id="crearEventoForm">
		<div class="container">

			<div class="row">

				<div class="col s6">

					<h4>Artículos Aceptados</h4>
					<br>

					<ul id="listaArticulos">
						<?php foreach ($articulos as $key => $articulo): ?>
							<li>
								<div class="collapsible-header"><i class="material-icons">trending_flat</i><?php echo $articulo['nombre'] ?></div>
							</li>
						<?php endforeach ?>
					</ul>

				</div>

				<div class="input-field col s6" style="margin-top:0px;">
					<h4>Crear Artículo</h4>
				</div>

				<div class="input-field col s6">

					<div class="row">
						<input id="nombre" name="nombre" type="text" class="validate" required>
						<label for="nombre">Nombre</label>
					</div>
					<div class="row">
						<button id="envia" class="right btn pink waves-effect waves-light" type="submit" name="action" style="margin-top:30px;">
							Crear Artículo
						</button>
					</div>
				</div>
			</div>

		</div>
	</form>



	<script type="text/javascript">
		$(document).ready(function() {
			$('#envia').click(function(e){ 
				alert('Los administradores deberán aceptar el artículo sugerido.');
   			});
		});
	</script>

</body>
</html>