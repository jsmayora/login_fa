<?php 

session_start();
require_once 'conexion.php';

function loginUsuarios(){
	$cnn =conexion();

// var_dump($_REQUEST);
// echo var_dump($user);
// $usuario = $_REQUEST['usuario'];
// $usuario = $_POST['usuario'];
// echo $TETA= $_POST["usuario"];

// $password = sha1($_POST["password"]);

// echo "<br>";

// echo 
	$usuario= $_REQUEST['usuario'];
// echo "<br>";

// echo
	$password=$_REQUEST['password'];

// if (isset($_REQUEST['usuario'],$_POST["password"])) {
	$cnn->select_db("pruebas");

	# code...
	$sql ="SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
// echo $sql;
	$resultado=$cnn->query($sql);
	if ($resultado->num_rows > 1
	# code...
		$_SESSION['user']=$usuario;

		echo 1 ."\nentro";

	}
	else{
		echo 0 ."\nno entro";
	}
}

loginUsuarios();


##################### INICIO CONSULTAS EN POSTGRESQL ##################################
// 	$sql ="SELECT * FROM schema_pruebas.tbl_usuarios WHERE usuario='$usuario' AND password='$password'";
// // echo $sql;
// $resultado=pg_query($cnen,$sql);
// if (pg_fetch_row($resultado) >0) {
// 	# code...
// 	$_SESSION['user']=$usuario;

// 	echo 1 ."\nentro";

// }
// else{
// 	echo 0 ."\nno entro";
// }
##################### FIN CONSULTAS EN POSTGRESQL ##################################

?>