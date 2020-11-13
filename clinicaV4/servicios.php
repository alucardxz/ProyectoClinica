<?php 
$mysqliConect=new mysqli('localhost','root','','clinica');
if (!$mysqliConect) {
	echo "Error al conectar a la base de datos";
}
	$terapia = $_POST['Terapia'];
	$beneficios = $_POST['bene'];
	$descripcion = $_POST['des'];
	$dur = $_POST['duracion'];
	$pre = $_POST['precio'];
	
$insertar= "INSERT INTO `terapia` (`Id_terapia`, `Nombre terapia`, `Beneficios`, `Descripcion`, `Duracion`, `Precio`) VALUES (NULL, '$terapia', '$beneficios', '$descripcion', '$dur', '$pre')";

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


