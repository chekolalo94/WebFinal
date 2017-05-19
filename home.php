<?php
?>
<html>
<head>
    <title>Los Pasteles de Gio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="shortcut icon" href="img/ico.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo1.css">
</head>

<header>
    <div id="wrapper" data-spy="scroll" data-target="#spy">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <nav id="spy">
            <ul class="sidebar-nav nav">

                <li id="elemento1" class="sidebar-brand
                 active">
                    <a href="#" onclick="cargarPestana3('index2.php','elemento1')">
                        <span class="fa fa-home solo">Home</span></a>
                </li>

                <li id="elemento2">
                    <a href="#" onclick="cargarPestana3('regclientes.php','elemento2')">
                            <span class="glyphicon glyphicon-pencil"> &nbsp;&nbsp;Registrar clientes</span>
                        </a>

                </li>
                <li id="elemento3">
                    <a href="#" onclick="cargarPestana3('regproductos.php','elemento3')">
                            <span class="glyphicon glyphicon-pencil"> &nbsp;&nbsp;Registrar Productos</span>
                        </a>

                </li>
                <li id="elemento4">
                    <a href="#" onclick="cargarPestana3('tabla2.php','elemento4')">
                            <span class="glyphicon glyphicon-folder-open"> &nbsp;&nbsp;Ver Productos</span>
                        </a>

                </li>
                <li id="elemento5"> <a href="#" onclick="cargarPestana3('tabla.php','elemento5')">
                            <span class="glyphicon glyphicon-folder-open"> &nbsp;&nbsp;Ver Clientes</span>
                        </a>

                </li>
                <li> <a href="index.html">
                            <span class="glyphicon glyphicon-menu-left">&nbsp;&nbsp;Volver</span>
                        </a>

                </li>
            </ul>
        </nav>
    </div>
</div>

</header>
<body style="background-image: url(img/fondo.jpg); height: 100%; width: 98%;padding-left: 250px;">
<div id="page-content-wrapper">
        <div class="content-header">
             <h1 id="home">
                    <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify" style="color: black;">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </a>
                </h1>
            </div>
    </div>

     <div id="index">
      <!--- Aqui se carga el contenido seleccionado>
      <!-->
  </div>
  <div id="respuesta" class="row">
      
  </div>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/hola.js"></script>
<script type="text/javascript" src="js/capturardatosclientes.js"></script>
<script type="text/javascript" src="js/capturardatosproductos.js"></script>

<script type="text/javascript">
function openpag(pagina){
      $('#index').load(pagina);
    }
    openpag("index2.php");

function cargarPestana3(pestanaabrir1,elementoActivo1){
      $('#index').load(pestanaabrir1);
      $("#elemento1").removeClass("active");
      $("#elemento2").removeClass("active");
      $("#elemento3").removeClass("active");
      $("#elemento4").removeClass("active");
      $("#elemento5").removeClass("active");
      $("#"+elementoActivo1).addClass("active");
    }
    cargarPestana3();
</script>
</body>
</html>