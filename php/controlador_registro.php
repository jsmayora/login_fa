<?php 

require_once 'conexion.php';

$cnn =conexion(); 

$nombre= $_REQUEST["nombre"];
$apellido= $_REQUEST['apellido'];
$usuario= $_REQUEST['usuario'];
// $password=sha1($_REQUEST['password']);
$password=$_REQUEST['password'];

	echo "Nombre = " . $nombre . " apellido = " . $apellido . " usuario = " . $usuario ." password = " . $password;

	echo "<br>";







############ INICIO  CONSULTAS MYSQL  ##################################

function insertarbd($nombre,
	$apellido,
	$usuario,
	$password,
	$cnn
	){
// LLAMANDO A LA CONEXIÓN
	// SELECCIONAR LA BD	
	
	$cnn->select_db("pruebas");

	//  VERIFICAR QUE SELECCIONO LA BD CORRECTAMENTE
	// $resultado = $cnn->query("SELECT DATABASE()");
	// if ($resultado) {
	# EN CASO DE NO REALIZAR LA SELECCIÓN DE LA BD
	// 	$fila = $resultado->fetch_row();
	// 	printf("\nLa BD por defecto es: %s.\n", $fila[0]);
	// 	return $fila;
	// } 
	// mysqli_select_db($con,"pruebas");

// ACCIONES PARA INSERTAR EN LA BD PRUEBAS TBL USUARIOSS
	$inserTbl= "INSERT INTO usuarios (nombre,apellido,usuario,password) VALUES ('".$nombre."','".$apellido."','".$usuario."','".$password."')";
	// echo $sql;	
	$resultado =$cnn->query($inserTbl);
	if ($resultado ==1) {
		
		echo "\nSe agrego el usuario correctamente:\n";
		return true;
	} else {
		echo "\nError: " . $sql . "<br>" . $cnn->error;
	}

// $nombre' $apellido'$usuario' '$password'

}
//  LLAMA A LA FUNCIÓN INSERT


if (buscarRepetidos(
	$usuario,
	$password,
	$cnn) 
	==1) {

	# code...
	echo 2;
} 
else {
	# code...
	insertarbd($nombre,
	$apellido,
	$usuario,
	$password,
	$cnn);
}


//  esta funcion es para buscar usuarios repetidos y evitar ingresar registros duplicados
function buscarRepetidos($usuario,$password,$cnn){
// LLAMANDO A LA CONEXIÓN
	// SELECCIONAR LA BD	
	
	$cnn->select_db("pruebas");
	$pass=sha1($password);
	//  VERIFICAR QUE SELECCIONO LA BD CORRECTAMENTE
	// $resultado = $cnn->query("SELECT DATABASE()");
	// if ($resultado) {
	# EN CASO DE NO REALIZAR LA SELECCIÓN DE LA BD
	// 	$fila = $resultado->fetch_row();
	// 	printf("\nLa BD por defecto es: %s.\n", $fila[0]);
	// 	return $fila;
	// } 
	// mysqli_select_db($con,"pruebas
	$sql ="SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$pass'";
// echo $sql;
	$resultado=$cnn->query($sql);

	if ($resultado->num_rows >0 ) {
	# code...
		$_SESSION['user']=$usuario;

		// echo 1 ."\hay usuarios repetido\n";
		return 1;
	}
	else{
		// echo 0 ."\nno hay usuario repetido\n";
		return 0;
	}
}


############ FIN CONSULTAS MYSQL  ##################################

############ CONSULTAS POSTGRESQL  ##################################
	// ·postgres
// $sql ="INSERT INTO schema_pruebas.tbl_usuarios(nombre, apellido, usuario, password)
// VALUES ('$nombre','$apellido','$usuario','$password')";
// $resultado=pg_query($cnn,$sql);
// if ($resultado ==TRUE) {
// 	# code...

// 	echo 'insertado';

// }
// else{
// 	echo "Error:\n" .print pg_last_error($cnn),"\n2";
// }

// if (buscarRepetido($user,$pass,$conexion)==1) {

// 	# code...
// 	echo 2;
// } else {
// 	# code...
// 	echo $sql = " SELECT * FROM schema_pruebas.tbl_usuarios WHERE usuario='$user' AND password='$pass'";

// 	$resultado=pg_query($cnen,$sql);
// }

// $resultado=pg_insert($conexion, $sql) ;
// 	// buscar los usuarios repetidos
// function buscarRepetido($user,$pass,$conexion){
// 	// $p=sha1($pass);

// 	$sql = " SELECT * FROM schema_pruebas.tbl_usuarios WHERE usuario='$user' AND password='$p'";

// 	$resultado=pg_query($cnen,$sql);
// 	if (pg_fetch_row($resultado) >0) {
// 		# code...
// 		return 1;
// 	} else {
// 		# code...
// 		return 0;
// 	}

// }












	// else{
	// 	echo "Error" ;
	// // . $sql. "<br>".mysql_error($conexion);
	// }
	// echo json_encode($html);
	// break;

// $resultado=mysqli_query($conexion,$sql);
// echo '<pre>';
// print_r($resultado);
// echo '</pre>';
// exit;

// if ($resultado == TRUE) {
// 	echo "New record created successfully";
// } else {
// 	echo "Error-2: " . $sql . "<br>" . mysqli_error($conexion);
// }








?>