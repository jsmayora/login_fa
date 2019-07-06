<?php 
session_start();
if (isset($_SESSION['user'])) {
	# code...


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	// include 'heard/header.php';
	require_once 'scripts.php' 
	?>
	<title>Inicio</title>
</head>
<body>
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="jumbotron">
					<a href="php/salir.php" class="btn btn-info">salir del sistema</a>
					<h2>Entrase con exito</h2>
				</div>
			</div>

		</div>
	</div>		

	<?php
	// include 'footer/footer.php';
	?>
</body>
</html>

<?php 
}else {
	# code...
	header("Location:index.php");
}

?> 