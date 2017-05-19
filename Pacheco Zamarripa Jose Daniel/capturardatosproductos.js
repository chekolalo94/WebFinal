function capturardatosproductos(){
	var url = "respuestaregistroproductos.php";

	$.post( url,{producto:$("#txtproducto").val(), 
		precio:$("#txtprecio").val(),
		cantidad:$("#txtcantidad").val(),
		idtipo:$("#txttipo").val(),
		idreceta:$("#txtreceta").val()
	},
	function (data) {
		$("#respuesta").html(data);
	});	
}