<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="shortcut icon" href="img/ico.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hola.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/tabla2.css">
	<title>Los pasteles de Gio</title>
</head>

<body>
	<div class="bodytabla">
		<?php 
			$conexion = mysqli_connect("localhost","root",
										"Admin123", "pasteleriafinal");

			if (!$conexion)
			{
				die("\nError de Conexión: " . mysqli_connect_errno());
				exit();
			}

			$query = "SELECT * FROM productos ORDER BY Nombre";

			$resultado = mysqli_query($conexion, $query);

			$count  = mysqli_num_rows($resultado);

			if($count > 0) {
				?>
				<table class="table table-striped table-bordered" style="background-color: rgba(131,175,155,0.6);">
							<thead>
								<th>NOMBRE</th>
								<th>PRECIO</th>
								<th>CANTIDAD DE PERSONAS</th>
							</thead>

							<tbody>
							<?php
				while($object = mysqli_fetch_object($resultado))
				{
					?>
						
								<tr>
									<td><?php echo $object->Nombre; ?></td>
									<td><?php echo $object->Precio; ?></td>
									<td><?php echo $object->CantidadPersonas; ?></td>
								</tr>
							
			<?php
				}?>
				</tbody>

						</table>
						<?php
			}

			//Libero recursos
			mysqli_free_result($resultado);
			mysqli_close($conexion);

			


?>			
	</div>
	
</body>
</html>