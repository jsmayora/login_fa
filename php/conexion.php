<?php
// ######################## INICIO CONEXION MYSQL #####################################

// estructurado 1
function conexion()
{
	# code...	
	// echo "se conecto";
	$conexion= new mysqli("localhost","pruebas","pruebas");
	if ($conexion->errno  ) {
	# code...
		die ( "conexion fallida"  . mysqli_connect_error()); 
		// return false;

	}
	else{

		echo "se conexto";echo "<br>";
		printf("Host info: %s\n", $conexion->host_info);echo "<br>";
		printf("Conjunto de caracteres inicial: %s\n", $conexion->character_set_name());echo "<br>";
		printf("Server version: %s\n", $conexion->server_info);echo "<br>";
		printf("Versión de la biblioteca cliente: %s\n", mysqli_get_client_info());echo "<br>";

		printf("Server version: %d\n", $conexion->server_version);echo "<br>";


		printf ("Estado del sistema: %s\n", $conexion->stat());echo "<br>";
		return $conexion;
	}

}

// conexion();



// echo "string";

// creando la conexiòn  a l abse de datos
// $conexion = mysqli_connect("localhost","pruebas","pruebas","pruebas");

// else{   
// 	echo 'Se conecto ';
		// echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos pruebas
		//  genial." . PHP_EOL;
		// echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
// 	return $conexion;
// }

 // 	if (!$conexion) {
	// 	echo 'No se conecto';

 //    		// return false;
	// }else{   
	// 	// echo 'Se conecto ';
	// 	// echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos pruebas
	// 	//  genial." . PHP_EOL;
	// 	// echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
 //    	 return $conexion;
	// }
// ######################## fIN CONEXION MYSQL #####################################

// ######################## INICIO CONEXION POSTGRESSQL #####################################
// ESTRUCTURA CONEXION POSTGRESQL
// conexion();
// inicio Estructurado funciona

// function conectar()
// {

// 	$host  ="127.0.0.1" ;
// 	$port  = "5432";
// 	$dbname ="bd_pruebas" ;
// 	$user = "postgres";
// 	$password = "cda25-cda25";

// 	$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user	password=$password");
// 	if (!$conexion) {
// 		echo '\nNo se conecto.\n';// . pg_last_error($conexion);

// 			// return false;
// 	}
// 	else{
// 		print "Conectado correctamente a:\n" . pg_host($conexion)."\n por el puerto\n" .pg_port($conexion) . "\ny a\nla\n" .  pg_dbname(); 
// 		return $conexion;
// 	}

// }
// // fin Estructurado funciona
// conectar();

// Conexiòn a PostgreSql
// class conexion
// {

// 	public $host  ="127.0.0.1" ;
// 	public $port  = "5432";
// 	public $dbname ="bd_pruebas" ;
// 	public $user = "postgres";
// 	public $password = "cda25-cda25";
	// public $credentials "user = postgres , password = cda25-cd25";

	// function __construct(){
	// 	$this->host ;//=$host;
	// 	$this->port ;//=$port;
	// 	$this->dbname ;//=$dbname ;
 //  // $this->credentials=$credentials;
	// 	$this->user ;//=$user ;
	// 	$this->password ;//=$password;
	// }
// $host,$port,$user,$passwor, $dbname
// Estructurado funciona




// 	function conectar()
// 	{
// 		$this->host =$host; 
// 		$this->port =$port; 
// 		$this->user =$user;
// 		$this->password =$password;
// 		$this->dbname =$dbname;

// 		$conexion = pg_connect("host=$this->host port=this->$port dbname=$this->dbname user=$this->user	password=$this->password");
// 		if (!$conexion) {
// 		echo '\nNo se conecto.\n';// . pg_last_error($conexion);

// 			// return false;
// 	}
// 	else{
// 		print "Conectado correctamente a:\n" . pg_host($conexion)."\n por el puerto\n" .pg_port($conexion) . "\ny a\nla\n" .  pg_dbname(); 
// 		return $conexion;
// 	}
// 	}



// }

// abriendo una nueva conexiòn para la base de datos
// $cnn = new conexion();
// $cnn->conectar();

// conexion::conectar();
// ######################## FIN CONEXION POSTGRESSQL #####################################
?>


