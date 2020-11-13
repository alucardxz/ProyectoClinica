<?php 
$mysqliConect=new mysqli('localhost','root','','clinica');
if (!$mysqliConect) {
	echo "Error al conectar a la base de datos";
}
	$ali = $_POST['alimento'];
	$cate = $_POST['categoria'];
	$cant = $_POST['cantidad'];
	$uni = $_POST['unidad'];
	$pesob = $_POST['p-bruto'];
	$peson = $_POST['p-neto'];
	$ener = $_POST['energia'];
	$pro = $_POST['proteina'];
    $lipi = $_POST['lipidos'];
    $hidra = $_POST['hidratos'];
    $fibra = $_POST['fibra'];
    $vitam = $_POST['vitamina'];
    $acias = $_POST['acido-as'];
    $acifo = $_POST['acido-fo'];
    $hie = $_POST['hierro'];
    $pot = $_POST['potasio'];
    $agua = $_POST['agua'];
    $ind = $_POST['indice'];
    $car = $_POST['carga'];

$insertar= "INSERT INTO `alimentos` (`Id-alimento`, `Alimento`, `Categoria`, `Cantidad`, `Unidad`, `P-bruto`, `P-neto`, `Energia`, `Proteina`, `Lipidos`, `Hidratos`, `Fibra`, `Vitamina-a`, `Acido-as`, `Acido-fo`, `Hierro`, `Potasio`, `Agua`, `Indice`, `Carga`) VALUES (NULL, '$ali', '$cate', '$cant', '$uni', '$pesob', '$peson', '$ener', '$pro', '$lipi', '$hidra', '$fibra', '$vitam', '$acias', '$acifo', '$hie', '$pot', '$pot', '$ind', '$car')";

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
    <link rel="stylesheet" href="estilos.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="header.js"></script>
    <script src="validacion.js"></script>
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
        <div class="C-footer">
            <!---Columna 1--->
            <div class="col1">
                <h1>Más información.</h1>
                <p>
                    La Clínica de Nutrición Yin-Yiao se ubica en Colima México, es atendida por la licenciada en Nutrición Erica Liliana Valencia Ramírez. Además de ofrecer citas para control de peso y enfermedades se prestan los servicios de Maderoterapía y acupuntura 
                </p>
            </div>
            <!---Columna 2--->
            <div class="col2">
                <h1>Redes Sociales</h1>
                <div class="row">
                    <img src="facebook.png" />
                    <label>Siguenos en Facebook</label>
                </div>
                <div class="row">
                    <img src="instagram.png" />
                    <label>Siguenos en Instagram</label>
                </div>
                <div class="row">
                    <img src="twitter.png" />
                    <label>Siguenos en Twitter</label>
                </div>
            </div>
            <!---Columna 3--->
            <div class="col3">
                <h1>Información Contactos</h1>
                <div class="row2">
                    <br><br>
                    <img src="house.png" />
                    <label>
                        Maclovio Herrera #188B
   <br>
                        Jardines de la corregidora 
                        Colima, Colima.
                    </label>
                </div>
                <div class="row2">
                    <img src="tel.png" />
                    <label>312 330 9587</label>
                </div>
                <div class="row2">
                    <img src="contact.png" />
                    <label>erica_conc@hotmail.com</label>
                </div>
            </div>
        </div>
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


