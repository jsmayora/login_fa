
$(document).ready(function(){
	// el alert funciona si comentas todo el codigo

	// alertify.alert('activo alertify.alert 100%');

	$("#registrarNuevo").click(function(){
		if ($('#nombre').val() ==""){
			// alert("activo js 2");
			alertify.alert("Debes agregar el nombre");
			$('#nombre').focus();
			return false;

		}else if ($('#apellido').val() ==""){
			// alert("activo js 3");
			alertify.alert("Debes agregar el apellido");
			$('#nombre').focus();
			return false;
		}else if ($('#usuario').val() ==""){
			// alert("activo js 4");
			alertify.alert("Debes agregar el usuario");
			$('#nombre').focus();
			return false;
		}else if ($('#password').val() ==""){
			// alert("activo js 5");
			alertify.alert("Debes agregar el password");
			$('#nombre').focus();
			return false;
		}
		// fin validar los datos

		 var 	url= "php/controlador_registro.php";

		var	cadena = "nombre=" + $('#nombre').val() +
		"&apellido=" + $('#apellido').val() + 
		"&usuario=" + $('#usuario').val() + 
		"&password=" + $('#password').val();

		 // var	cadena =$("#frmRegistro").serialize();

		// alert("estoy antes del ajax cadena: " + data + " url:" + url);

		// INICIO METODO AJAX
		// alertify.alert("estoy antest del ajax");
		$.ajax({
			// alert:"estoy dentro del ajax",
			type: "POST",
			url:url,
			data:cadena,
			success: function(resultado){

				if (resultado==2) {
					alertify.alert("este usuario ya exite prueba con otro :)");
				}

				else if (resultado == 1) {
						// Limpiar formulario
						$("#frmRegistro")[0].reset(); //funcion para limpiar el formulario

					// console.log("Agregado con exito"); 
					alertify.success("Agregado con exito");

					// alertify.alert('Registro de usuario', 'Agregado con exito!',function(){alertify.success('Ok');});

				} else{
					// console.log("Fallo con exito");

					alertify.error("Fallo al agregar");
					// alertify.alert('Registro de usuario','Fallo al registrar el usuario!',function(){alertify.error('Ok');});
				}
			}
		});


		// FIN METODO AJAX

	});


});