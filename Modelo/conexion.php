<?php

	class conexion{

		private $conexion ;
		private $server = "us-cdbr-iron-east-03.cleardb.net";
		private $username = "b0cd0f01775543";
		private $password = "b5e22ee3";
		private $dbname = "heroku_513fc836dde6412";
		private $user;
		private $pass;



		public function __construct(){
			// Create connection
			$this->conexion = new mysqli($this->server, $this->username, $this->password, $this->dbname );
			// Check connection
			if ($this->conexion->connect_error) {
				die("Connección fallida: Lo sentimos estamos teniendo problemas".$this->conexion->connect_error);
			}
		}

		public function cerrar(){
			
			$this->conexion->close();

		}

		public function login($user, $pass){
			
			$this->user = $user;
			$this->pass = $pass;

			$query = "SELECT correo, nombre, apellido, estado 
					  	FROM organizadores 
					  	WHERE correo='".$this->user."' and contra='".$this->pass."'";
			
			$consulta = $this->conexion->query($query);

			if($row = mysqli_fetch_array($consulta)){
					session_start(); 

					$_SESSION['validacion'] = 1 ; 
					$_SESSION['correo']= $row['correo'];
					$_SESSION['nom']= $row['nombre'];
					$_SESSION['ape']= $row['apellido'];
					$_SESSION['estado']= $row['estado'];
					$_SESSION['img'] = $row['nombre']+ (substr($row['correo'], 0, strpos($row['correo'], "@")));

					echo "2";

			} else {
				session_start();
				$_SESSION['validacion']=0;
				echo "1";
			}
		}
	}
?>
