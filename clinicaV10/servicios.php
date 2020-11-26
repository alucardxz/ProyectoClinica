<?php 
require 'conexion.php';
	$terapia = $_POST['Terapia'];
	$beneficios = $_POST['bene'];
	$descripcion = $_POST['des'];
	$dur = $_POST['duracion'];
	$pre = $_POST['precio'];
	
$insertar= "INSERT INTO `terapia` (`IdTerapia`, `Terapia`, `Beneficios`, `Descripcion`, `Duracion`, `Precio`) VALUES (NULL, '$terapia', '$beneficios', '$descripcion', '$dur', '$pre')";

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


<body>
    
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
	                	<label style="font-size: 18px;">Terapia: <?php echo $terapia; ?></label><br>
	                	<label style="font-size: 18px;">Beneficios: <?php echo $beneficios; ?></label><br>
	                	<label style="font-size: 18px;">Descripción: <?php echo $descripcion; ?></label><br>
	                	</div>
	                	<div class="col2">
	                	<label style="font-size: 18px;">Duración: <?php echo $dur; ?></label><br>
	                	<label style="font-size: 18px;">Precio: $<?php echo $pre; ?></label><br>
	                	</div>
	            
	                        <a href="servicios-in.html" class="btn">Inicio</a>
                   
                </div>

        </form>
  </center>


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

</body>
</html>


