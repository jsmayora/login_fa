$(document).ready(function(){

// alertify.alert("alertify.alert 100% activo ");
		// inico valida login
		$("#entrarSistema").click(
			function()
			{
				// alert("js activo");

				// validando usuario
				if ($("#usuario").val()=="")
				{
					alertify.alert("Debes agregar el usuario");

					return false;

				} else if ($("#password").val()=="") {
					alertify.alert("Debes agregar el password");

					return false;
				}

				//var url = "php/contrologin.php";
				// logear usuario
				var cadena = "usuario=" + $("#usuario").val() +
				"&password=" + $("#password").val() ;
				

				$.ajax({
					type:"POST",
					// url:"php/contrologin.php",
					url:"php/login.php",
					data: cadena,
					success: function(r){
						if (r ==1) {
							window.location="inicio.php";
							// return 1;
						} else {
							alert("Fallo al entrar :(");
						}
						// return 0;

					}
				});





			});
		// inico valida login
	});