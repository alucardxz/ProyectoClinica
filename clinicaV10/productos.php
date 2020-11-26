<?php 
require 'conexion.php';
	$Producto = $_POST['Producto'];
	$Descripcion = $_POST['Descripcion'];
	$Precli = $_POST['Precli'];
	$Existencia = $_POST['Existencia'];
	$Proveedor = $_POST['Proveedor'];
	$Tamaño = $_POST['Tamaño'];
	$Prepro = $_POST['Prepro'];
	
$insertar= "INSERT INTO `productos` (`IdProducto`, `Producto`, `Tamaño`, `Descripcion`, `Existencia`, `Prepro`, `Precli`, `Proveedor`, `Foto`) VALUES 
(NULL, '$Producto', '$Tamaño', '$Descripcion', '$Existencia', '$Prepro', '$Precli', '$Proveedor', NULL)";	

	if(mysqli_query($mysqliConect, $insertar)){
		echo "";
	}else{
		echo "Error al guardar Datos";
	}
 ?>

    <!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/header.js"></script>
</head>


<body style="background:ivory;">
    
    <header class="">
  
        <div class="wrapper">

            <div class="logo">
                <h3>Clínica de Nutrición Yin-Yiao</h3>
            </div>
            <nav>
                <a href="inicio.html">Inicio</a>
                <a href="registrar-us.html">Regístrate</a>
            </nav>
        </div>
    </header>
<center>
        <form action="#" method="POST" class="contenido">
                <div class="borde-redondeado">
                	<h1>!Datos Guardados Correctamente¡</h1><br>
	                	<div class="linea"></div>
	                	<div class="col1">
	                	<label style="font-size: 18px;">Producto: <?php echo $Producto; ?></label><br>
	                	<label style="font-size: 18px;">Tamaño: <?php echo $Tamaño; ?></label><br>
	                	<label style="font-size: 18px;">Descripción: <?php echo $Descripcion; ?></label><br>
	                	</div>
	                	<div class="col2">
	                	<label style="font-size: 18px;">Existencia: <?php echo $Existencia; ?></label><br>
	                	<label style="font-size: 18px;">Precio proveedor: $<?php echo $Prepro; ?></label><br>
	                	</div>
	                	<div class="col3">
	                	<label style="font-size: 18px;">Precio  cliente: $<?php echo $Precli; ?></label><br>
	                	<label style="font-size: 18px;">Proveedor: <?php echo $Proveedor; ?></label><br>
	                	</div>
	            
	                        <a href="producto-in.html" class="btn">Inicio</a>
                   
                </div>

        </form>
  </center>
</body>
    <footer>
        <!--derechos-->
        <div class="final">
            <div class="derechos">
                @2020 Todos los Derechos Reservados
            </div>
            <div class="informacion">
                Información Compañia | Política y Privacidad | Términos y Condiciones
            </div>
        </div>
    </footer>
</html>


