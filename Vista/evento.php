

<?php
	
	require "../Modelo/connect.php";
	//require "../facebooklogin/login-callback.php";


//--Cuando carga con GET
	if(!empty($_GET)){
		$clave = $_GET['el'];

		$query = "SELECT * 
			  	FROM eventos 
			  	WHERE claveAcceso='".$clave."';";
			
		$consulta = $db->query($query);

		$evento = mysqli_fetch_array($consulta);

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
<?php
	}else{
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
          
</head>
<body>

	<?php require "layoutAbierto.php"; ?>

	<div class="parallax-container" style="margin-top:-100px;">
		<div class="parallax"><img src="Imagen/default.png"></div>
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
	<!-- Compiled and minified JavaScript -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

	<script type="text/javascript">

		$('.parallax').parallax();

	</script>
		
</body>
</html>
<?php
	}
?>