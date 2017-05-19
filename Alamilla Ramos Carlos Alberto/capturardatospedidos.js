function capturardatospedidos(){
	var url = "respuestaregistropedidos.php";

	$.post( url,{anticipo:$("#txtanticipo").val(), 
		fecha:$("#txtfecha").val()
			},
	function (data) {
		$("#respuesta").html(data);
	});
	
}