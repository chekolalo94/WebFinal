<?php

$producto=$_POST["producto"];
$precio= $_POST["precio"];
$cantidad = $_POST["cantidad"];
$idtipo = $_POST["idtipo"];
$idreceta = $_POST["idreceta"];


$servidor = "localhost";
$basedatos = "pasteleriafinal";
$usuario = "root";
$contrasenia = "Admin123";

try {
	$conexionMysqli = new mysqli($servidor,$usuario,$contrasenia,$basedatos);
	if ($conexionMysqli->connect_errno) {
		echo "Falló la conexión con Mysql:(".$conexionMysqli->connect_errno.")
		".$conexionMysqli->connect_errno;
	} else {
		$query = "insert into productos(Nombre,Precio,CantidadPersonas,IdTipo,IdReceta) values ('".$producto."','".$precio."','".$cantidad."','".$idtipo."','".$idreceta."')";
		#echo $query;
		$resultadoOperacion = $conexionMysqli->query($query);
		if ($resultadoOperacion) {
			?>
			<div class="txt-success txt-center">
				<script type="text/javascript">alert("Realizada con exito")</script>
			</div>
			<?php
		}else{
			?>
			<div class="txt-danger txt-center">
				<script type="text/javascript">alert(" NO Realizada con exito")</script>
			</div>
			<?php
		}
	}
} catch (Exception $e) {
	echo $e;
}