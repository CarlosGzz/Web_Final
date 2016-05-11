

<?php
	
	require "../Modelo/connect.php";

//--Cuando carga, SIEMPRE

	$query = "SELECT nombre, id 
		  	FROM articulos 
		  	WHERE estado='1'
		  	ORDER BY nombre";
		
	$consulta = $db->query($query);

	$articulos = array();

	for ($i=0; $row = mysqli_fetch_array($consulta); $i++)
	{ 
		$articulos[$row['id']] = $row;
	}




//--Cuando carga con GET
	if(!empty($_GET))
	{
		$id = $_GET['el'];

		$query = "SELECT * 
			  	FROM eventos 
			  	WHERE id='".$id."';";
			
		$consulta = $db->query($query);

		$evento = mysqli_fetch_array($consulta);
	}




//--Cuando carga con POST
	if (!empty($_POST))
	{var_dump($_POST);
		if (!empty($_FILES['imagen']['name']))
		{
			require_once "../Controlador/claveAcceso.php";

			$imagenNombre = $randomString . basename($_FILES["imagen"]["name"]);
			$target_dir = "../Imagenes/";
			$target_file = $target_dir . $imagenNombre;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["action"])) {
			    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
			    if($check !== false) {
			        $uploadOk = 1;
			    } else {
			        $uploadOk = 0;
			    }
			}	
			// Check file size
			if ($_FILES["imagen"]["size"] > 1000000) {
			    echo "<script>alert('Sorry, your file is too large.');</script>";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "<script>alert('Sorry, your file was not uploaded.');</script>";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
			        
					$sql = "UPDATE eventos
							SET imagen = '$imagenNombre'
							WHERE id='".$_POST["id"]."';";

					$db->query($sql);

			    } else {
			        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
			    }
			}
		}

		$nombre = $_POST["nombre"];
		$descripcion = $_POST["descripcion"];
		$direccion = $_POST["direccion"];
		$fecha = $_POST["fecha"];
		$id = $_POST["id"];

		$sql = "UPDATE eventos
				SET nombre = '$nombre', descripcion = '$descripcion', direccion = '$direccion', fecha = '$fecha'
				WHERE id='".$id."';";

		$db->query($sql);


		foreach ($_POST['articulos'] as $key => $articulo)
		{
			if (!empty($articulo['nombre']))
			{
				$query = "INSERT INTO relacioneventosarticulos 
						(eventoId, articuloId, limite) 
						VALUES 
						($id, $key, ".$articulo['cantidad'].")";

				$db->query($query);
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
	<title>Party Dog: Editar Evento</title>

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  	<link type="text/css" rel="stylesheet" href="css/rodo-style.css"/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>

	<?php require "layout.php"; ?>
<!-- 
	<div class="parallax-container">
		<div class="parallax"><img src="../Imagenes/<?php echo $evento['imagen'] ?>"></div>
	</div>
 -->
	<form action="editarEvento.php" method="post" id="editarEventoForm" enctype="multipart/form-data">
		<div class="container" style="margin-bottom:200px;">

			<button id="agregarArea" class="right btn pink waves-effect waves-light" type="submit" name="action">
				Editar evento
			</button>

			<h4>Editar Evento</h4>
			<br><br>

			<input type="hidden" name="id" value="<?php echo $id ?>">

			<div class="row" style="margin-bottom:100px;">
				<div class="col s6">
					<div class="row">
						<div class="file-field input-field col s12">
							<div class="btn">
								<span>Cambiar Imagen</span>
								<input type="file" name="imagen">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							<input id="nombre" name="nombre" value="<?php echo $evento['nombre'] ?>" type="text" class="validate" required>
							<label for="nombre">Nombre</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							<textarea id="textarea1" name="descripcion" value="<?php echo $evento['descripcion'] ?>" class="materialize-textarea" required></textarea>
							<label for="textarea1">Descripción</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							<input id="direccion" name="direccion" value="<?php echo $evento['direccion'] ?>" type="text" class="validate" required>
							<label for="direccion">Dirección</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							<input id="fecha" name="fecha" value="<?php echo $evento['fecha'] ?>" type="date" class="datepicker">
							<label for="fecha">Fecha</label>
						</div>
					</div>
				</div>

				<div class="col s6">
					<img class="responsive-img" src="../Imagenes/<?php echo $evento['imagen'] ?>">
				</div>
			</div>
					

			<button id="agregarArea" class="right btn pink waves-effect waves-light" type="submit" name="action" s>
				Editar evento
			</button>

			<h4>Artículos a llevar</h4>
			<br>


			<?php foreach ($articulos as $key => $articulo): ?>

				<div class="row">
					<div class="col s3" style="height: 46px;">
						<p>
							<input type="checkbox" id="check<?php echo $key ?>" name="articulos[<?php echo $key ?>][nombre]" value="<?php echo $articulo['nombre'] ?>"/>
		      				<label for="check<?php echo $key ?>"><?php echo $articulo['nombre'] ?></label>
						</p>
					</div>

					<div class="col s2 hide" id="hide<?php echo $key ?>">
						<input placeholder="Cantidad" id="cant<?php echo $key ?>" type="number" min="1" max="100" name="articulos[<?php echo $key ?>][cantidad]">
					</div>
				</div>

			<?php endforeach ?>
					

			<button id="agregarArea" class="right btn pink waves-effect waves-light" type="submit" name="action" s>
				Editar evento
			</button>


		</div>
	</form>


	<script type="text/javascript">

		//$('.parallax').parallax();

		$('#textarea1').val('<?php echo $evento["descripcion"] ?>');
  		$('#textarea1').trigger('autoresize');

		$('.datepicker').pickadate({
			monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		    monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
			today: 'Hoy',
			clear: 'Borrar',
			close: 'Listo',
			labelMonthNext: 'Siguiente mes',
			labelMonthPrev: 'Mes anterior',
			labelMonthSelect: 'Seleccione mes',
			labelYearSelect: 'Seleccione año',
			selectMonths: true,
			selectYears: true,
			format: 'mmmm dd, yyyy',
			formatSubmit: 'mmmm dd, yyyy',
			min: true,
			max: 90
		});

		$('#agregarArea').click(function(e)
		{
			var listo = true;

			if ($('#fecha').val() == "")
			{
				listo = false;
				alert("Seleccionar fecha.");
			};

			return listo;
		});


		<?php foreach ($articulos as $key => $articulo): ?>
			
			$("#check<?php echo $key ?>").on( "click", function(){

				if ($('#check<?php echo $key ?>').is(':checked') )
				{
					$('#hide<?php echo $key ?>').removeClass('hide');
				}
				else
				{
					$('#hide<?php echo $key ?>').addClass('hide');
				}

			});

		<?php endforeach ?>


	</script>
		
</body>
</html>