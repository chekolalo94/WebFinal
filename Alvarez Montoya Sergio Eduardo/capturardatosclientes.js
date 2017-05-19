function capturardatosclientes(){
	var url = "respuestaregistroclientes.php";

	$.post( url,{nombre:$("#txtname").val(), 
		apellidos:$("#txtapellidos").val(),
		telefono:$("#txttelefono").val(),
		direccion:$("#txtdireccion").val(),
		correo:$("#txtmail").val()
	},
	function (data) {
		$("#respuesta").html(data);
	});
}