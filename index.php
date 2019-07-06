<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php require_once 'scripts.php';?>
</head>
<body  style="background: gray;">
	<br><br><br>
	<!-- contenerdor -->
	<div class="conteiner">

		<!-- fila que contiene al  login -->
		<div class="row">

			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class=" panel panel-primary ">
					<div class="panel panel-heading bg-primary "  style="padding: 4%;">Login Prueba</div> 	
					<div class="panel panel-body"  style="padding: 4%;">

						<div style="text-align: center;">
							<img src="img/photo.jpg" height="250">
						</div>


						<form class="form" id="frmLogin"  >
							<!-- action="php/registro.php"method="post"  -->
							<iput type="hidden" name="submit" value="1" />


							<label>Usuario</label>
							<input type="text"  class="form-control input-sm" id="usuario" name="usuario">

							<label>Password</label>
							<input type="password"  class="form-control input-sm" id="password" name="password">	
								<!-- <div class="btn-toolbar">
					<div class="form-group col">
						<button type="submit" class="btn btn-primary btn-sm" id="registrarNuevo">Registrar</button>
					</div>

				</div> -->
				<p></p>
				<span class="btn btn-primary" id="entrarSistema" name="entrarSistema">Entrar</span>
				<!-- <button type="submit"  id="entrarSistema" name="entrarSistema" class="btn btn-primary">Sign in</button> -->

				<!-- <span class="btn btn-primary" id="entrarSistema" name="entrarSistema">Entar</span> -->
				<a href="registro.php" class="btn btn-danger">Registro</a>
			</form>
		</div>
	</div>
	<div class="col-sm-4"></div>
</div>
<!-- fin de la fila que contiene al  login -->
</div>

<script type="text/javascript" src="js/validalogin.js"></script>

</body>

</html>