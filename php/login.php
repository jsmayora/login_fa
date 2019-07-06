<?php 
//  QUI SE VALIDA LA SESIÓN

session_start();
require_once "conexion.php";
$cnn =conexion();
$nombre= $_REQUEST["nombre"];
$password=$_REQUEST['password'];


$cnn->select_db("pruebas");

	# code...
$sql ="SELECT * FROM usuarios WHERE usuario='".$usuario."' AND password='".$password."'";
// echo $sql;
$resultado=$cnn->query($sql);
if ($resultado->num_rows > 0 ) {
	# code...
	$_SESSION['user']=$usuario;

	echo 1 ."\nentro";

}
else{
	echo 0 ."\nno entro";
}

?>