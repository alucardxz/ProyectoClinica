<?php 
require 'conexion.php';

    $ali = $_POST['Alimento'];
    $cate = $_POST['Categoria'];
    $cant = $_POST['Cantidad'];
    $uni = $_POST['Unidad'];
    $pesob = $_POST['Pesobruto'];
    $peson = $_POST['Pesoneto'];
    $ener = $_POST['Energia'];
    $pro = $_POST['Proteina'];
    $lipi = $_POST['Lipidos'];
    $hidra = $_POST['Hidratos'];
    $fibra = $_POST['Fibra'];
    $vitam = $_POST['VitaminaA'];
    $acias = $_POST['AcidoAs'];
    $acifo = $_POST['AcidoFo'];
    $hie = $_POST['Hierro'];
    $pot = $_POST['Potasio'];
    $agua = $_POST['Agua'];
    $ind = $_POST['Indice'];
    $car = $_POST['Carga'];


$insertar= "INSERT INTO `alimentos` (`Idalimento`, `Alimento`, `Categoria`, `Cantidad`, `Unidad`, `Pesobruto`, `Pesoneto`, `Energia`, `Proteina`, `Lipidos`, `Hidratos`, `Fibra`, `VitaminaA`, `AcidoAs`, `AcidoFo`, `Hierro`, `Potasio`, `Agua`, `Indice`, `Carga`) VALUES(NULL, '$ali', '$cate', '$cant', '$uni', '$pesob', '$peson', '$ener', '$pro', '$lipi', '$hidra', '$fibra', '$vitam', '$acias', '$acifo', '$hie', '$pot', '$pot', '$ind', '$car')";

    if(mysqli_query($mysqliConect, $insertar)){
        echo '<script language="javascript">alert("Alimento guardado correctamente");</script>';
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


<body >
    
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
    	                	<label style="font-size: 18px;">Alimento: <?php echo $ali; ?></label>
                            <label style="font-size: 18px;">Categoria: <?php echo $cate; ?></label>
    	                	<label style="font-size: 18px;">Cantidad: <?php echo $cant; ?></label>
    	                	<label style="font-size: 18px;">Unidad: <?php echo $uni; ?></label>
                            <label style="font-size: 18px;">Fibra: <?php echo $fibra; ?></label>
                            <label style="font-size: 18px;">Vitamina A: <?php echo $vitam; ?></label>
                            <label style="font-size: 18px;">Hierro: <?php echo $hie; ?></label>
                            <label style="font-size: 18px;">Índice Glucémico: <?php echo $ind; ?></label>
	                	</div>
	                	<div class="col2">
    	                	<label style="font-size: 18px;">Peso bruto: Gms<?php echo $pesob; ?></label>
    	                	<label style="font-size: 18px;">Peso Neto: Gms<?php echo $peson; ?></label>
    	                	<label style="font-size: 18px;">Energía: <?php echo $ener; ?></label>
                            <label style="font-size: 18px;">Acido Ascórbico: <?php echo $acias; ?></label>
                            <label style="font-size: 18px;">Potasio: <?php echo $pot; ?></label>
                            <label style="font-size: 18px;">Carga Glucémica: <?php echo $car; ?></label>
                        </div>
	                	<div class="col3">
    	                	<label style="font-size: 18px;">Proteína: <?php echo $pro; ?></label>
    	                	<label style="font-size: 18px;">Lipidos: <?php echo $lipi; ?></label>
                            <label style="font-size: 18px;">Hidratos de carbono: <?php echo $hidra; ?></label>
                            <label style="font-size: 18px;">Acido Fólico: <?php echo $acifo; ?></label>
                            <label style="font-size: 18px;">Agua: <?php echo $agua; ?></label>
	                	</div>
	            
	               <a href="Agregar-alimento.html" class="btn">Regresar</a>
                   
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


