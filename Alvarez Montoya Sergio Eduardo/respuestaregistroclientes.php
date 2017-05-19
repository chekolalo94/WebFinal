<?php

$nombre=$_POST["nombre"];
$apellidos= $_POST["apellidos"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];

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
		$query = "insert into clientes(Nombre,Apellido,Telefono,Direccion,Email) values ('".$nombre."','".$apellidos."','".$telefono."','".$direccion."', '".$correo."')";
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