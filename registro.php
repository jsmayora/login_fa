<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
	<?php  require_once'scripts.php';?>
</head>

<body style="background-color: gray;">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">

				<div class="panel  panel-danger ">
					<div class="panel panel-heading "  style="padding: 4%;">Registro de usuario</div>

					<div class="panel panel-body">

						<form class="form" id="frmRegistro" action="" method="" >
							<!-- action="php/registro.php"method="post"  -->
							<input type="hidden" name="accion" id="accion" value="insertar" />
							<label>Nombre</label>
							<input type="text"  class="form-control input-sm" id="nombre" name="nombre">

							<label>Apellido</label>
							<input type="text"  class="form-control input-sm" id="apellido" name="apellido">

							<label>Usuario</label>
							<input type="text"  class="form-control input-sm" id="usuario" name="usuario">

							<label>Password</label>
							<input type="text"  class="form-control input-sm" id="password" name="password">	
							<p></p>
							<span  class="btn btn-primary"id="registrarNuevo">Registrar</span>

							<!-- <div class="forr-group col">
								<button type="submit" class="btn btn-primary " id="registrarNuevo">Registrar</button>
							</div> -->
							<div style="text-align: right;">
								<a href="index.php"  class=" btn  btn-info ">Login</a>
							</div>

							<!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
						</form>
					</div>

				</div>
				<div class="col-sm-4"></div> 
			</div>
		</div>


		<script type="text/javascript" src="js/valregst.js"></script>

	</body>

	</html>
<!-- <script type="text/javascript">
				$(document).ready(function() {
	// Inicio de document.ready

	// Inicio boton de registrarNuevo
	$("#registrarNuevo").click(function(){
		// alerta
		alert("activo js 1");
		// alertify.alert(
		// 	'js activo',
		// 	'recibiendo el btn registrarNuevo',
		// 	function()
		// 	{
		// 		alertify.success('hecho');
		// 	});
		// fin de alerta

		// inicio validar los datos
		if ($('#nombre').val() =="")
			{ alert("activo js 2");
		alertify.alert("Debes agregar el nombre");
		return false;

	} else if ($('#apellido').val() =="")
	{
		alert("activo js 3");
		alertify.alert("Debes agregar el apellido");
		return false;
	}else if ($('#usuario').val() =="")
	{
		alert("activo js 4");
		alertify.alert("Debes agregar el usuario");
		return false;
	}else if ($('#password').val() =="")
	{
		alert("activo js 5");
		alertify.alert("Debes agregar el password");
		return false;
	}
		// fin validar los datos

		// inicio Registro de usuarios
		alert("estoy encima de cadena");
		var	cadena ="nombre=" + $('#nombre').val() +
		"&apellido=" + $('#apellido').val() + 
		"&usuario=" + $('#usuario').val() + 
		"&password=" + $('#password').val() ;
		// fin Registro de usuarios

		// inicio de enviar datos con ajax
		alert("estoy antes del ajax " + cadena);
		var url = "php/registro.php";
		$.post(url, cadena, function(resultado){
			// alert("voy al controlador");	
			if (resultado==1) {

				// console.log("Agregado con exito");
					alertify.alert.success("Agregado con exito");


				} else  {
					// console.log("Agregado con exito");

					alertify.alert.error("Fallo al agregar");

				}


		},'json');
		
		// $.ajax({type:"post",url: "php/registro.php",data: {cadena},
		// 	success: function(resultado){

		// 		if (resultado==1) {

		// 			console.log("Agregado con exito");
		// 			// alertify.alert.success("Agregado con exito");


		// 		} else  {
		// 			console.log("Agregado con exito");

		// 			// alertify.alert.error("Fallo al agregar");

		// 		}
		// 	}
		// });

		

	});
		// fin boton de registrarNuevo

	});

	// $.ajax({
		
	// });

</script>
-->
<!-- </script> -->