

<?php
	
	session_start();

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
		$clave = $_GET['el'];

		$_SESSION['clave'] = $clave;

		$query = "SELECT * 
			  	FROM eventos 
			  	WHERE claveAcceso='".$clave."';";
			
		$consulta = $db->query($query);

		$evento = mysqli_fetch_array($consulta);
	}

?>


<html>
<head>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Party Dog: Evento</title>

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  	<link type="text/css" rel="stylesheet" href="css/rodo-style.css"/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>





	<?php require "layoutAbierto.php"; ?>

	<div class="parallax-container" style="margin-top:-100px;">
		<div class="parallax"><img src="../Imagenes/<?php echo $evento['imagen'] ?>"></div>
	</div>

	<div class="container">
		<p>
			Uniquely underwhelm multifunctional outsourcing via distinctive e-commerce. Quickly build interactive intellectual capital after leading-edge quality vectors. Credibly facilitate superior solutions vis-a-vis an expanded array of expertise. Globally impact top-line communities and professional value. Progressively architect orthogonal niche markets whereas optimal potentialities.
		</p>
		<p>
			Uniquely underwhelm multifunctional outsourcing via distinctive e-commerce. Quickly build interactive intellectual capital after leading-edge quality vectors. Credibly facilitate superior solutions vis-a-vis an expanded array of expertise. Globally impact top-line communities and professional value. Progressively architect orthogonal niche markets whereas optimal potentialities.
		</p>
		<p>
			Uniquely underwhelm multifunctional outsourcing via distinctive e-commerce. Quickly build interactive intellectual capital after leading-edge quality vectors. Credibly facilitate superior solutions vis-a-vis an expanded array of expertise. Globally impact top-line communities and professional value. Progressively architect orthogonal niche markets whereas optimal potentialities.
		</p>
		<p>
			Uniquely underwhelm multifunctional outsourcing via distinctive e-commerce. Quickly build interactive intellectual capital after leading-edge quality vectors. Credibly facilitate superior solutions vis-a-vis an expanded array of expertise. Globally impact top-line communities and professional value. Progressively architect orthogonal niche markets whereas optimal potentialities.
		</p>
		<p>
			Uniquely underwhelm multifunctional outsourcing via distinctive e-commerce. Quickly build interactive intellectual capital after leading-edge quality vectors. Credibly facilitate superior solutions vis-a-vis an expanded array of expertise. Globally impact top-line communities and professional value. Progressively architect orthogonal niche markets whereas optimal potentialities.
		</p>
		<p>
			Uniquely underwhelm multifunctional outsourcing via distinctive e-commerce. Quickly build interactive intellectual capital after leading-edge quality vectors. Credibly facilitate superior solutions vis-a-vis an expanded array of expertise. Globally impact top-line communities and professional value. Progressively architect orthogonal niche markets whereas optimal potentialities.
		</p>
	</div>


	<script type="text/javascript">

		$('.parallax').parallax();

	</script>
		
</body>
</html>