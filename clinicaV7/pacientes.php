 <?php 
require 'conexion.php';

	$nom = $_POST['Nombre'];
	$esco = $_POST['escolaridad'];
	$gen = $_POST['genero'];
	$fecha = $_POST['Fecha-nac'];
	$est = $_POST['edo'];
	$cd = $_POST['ciudad'];
	$Dir = $_POST['Dire'];
	$cel = $_POST['tel'];
    $email = $_POST['correo'];
    $actlabo = $_POST['act-labo'];
    $deslab = $_POST['desc-lab'];
    $vege = $_POST['vege'];
    $nivest = $_POST['niv-est'];
    $actdep = $_POST['act-dep'];
    $motivo=$_POST['mot-consul'];
    $sangre = $_POST['sangre'];
    $patologias = $_POST['patologias'];	
    $antecedentes = $_POST['antecedentes'];
    $cirugias = $_POST['cirugias'];
    $alergia = $_POST['alergia'];
    $vacunas = $_POST['vacunas'];
    $consumoci = $_POST['consumo-ci'];
    $frecC = $_POST['frec-cig'];
    $cantc = $_POST['cantidad-ciga'];
    $consumoa = $_POST['consumo-alco'];
    $Frecuenciaa = $_POST['frec-al'];
    $canta = $_POST['cantidad-alco'];
    $consumod = $_POST['consumo-dro'];
    $Frecuenciad = $_POST['frec-dro'];
    $cantd = $_POST['cantidad-dro'];
    $Estatura = $_POST['Estatura'];
    $peso = $_POST['peso'];
    $factoract = $_POST['fac-act'];
    $Gtot = $_POST['grasa-tot'];
    $Gsup = $_POST['grasa-sup'];
    $Ginf = $_POST['grasa-inf'];
    $Gvis = $_POST['grasa-vis'];
    $libreg=$_POST['libre-grasa'];
    $muscular=$_POST['masa-mus'];
    $oseo=$_POST['peso-os'];
    $Agua = $_POST['agua-corp'];
    $edadmet = $_POST['edad-met'];

 $insertar="INSERT INTO `pacientes` (`IdPaciente`, `Nombre`, `Escolaridad`, `Genero`, `Fechanac`, `Estado`, `Ciudad`, `Direccion`, `Telefono`, `email`, `Actlabo`, `Descripcion`, `Vegetariano`, `Nivelestres`, `Actdepor`, `Motivoconsu`, `Sangre`, `Patologias`, `Antecedentes`, `Cirugias`, `Alergia`, `Vacunas`, `Cigarro`, `Alcohol`, `Drogas`, `Frecuenciac`, `Frecuenciaa`, `Frecuenciad`, `Cantidadc`, `Cantidada`, `Cantidadd`, `Estatura`, `Peso`, `Factoracti`, `Grasatot`, `Grasasup`, `Grasainf`, `Grasavis`, `Libregrasa`, `Masamus`, `Pesoos`, `Aguacorp`, `Edadmet`) VALUES (NULL, '$nom', '$esco', '$gen', '$fecha', '$est', '$cd', '$Dir ', '$cel', '$email ', '$actlabo', '$deslab', '$vege', '$nivest', '$actdep', '$motivo', '$sangre', '$patologias', '$antecedentes', '$cirugias', '$alergia', '$vacunas', '$consumoci', '$consumoa', '$consumod', '$frecC', '$Frecuenciaa', '$Frecuenciad', '$cantc', '$canta', '$cantd', '$Estatura', '$peso', '$factoract', '$Gtot', '$Gsup', '$Ginf', '$Gvis', '$libreg', '$muscular', '$oseo', '$Agua', '$edadmet')";


	if(mysqli_query($mysqliConect, $insertar)){
		echo '<script language="javascript">alert("Paciente guardado correctamente");</script>';
	}else{
		echo '<script language="javascript">alert("Error al guardar datos");</script>';
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

                <table class="tab-datos">
                	<tr>
                		<td><label style="font-size: 20px;">Nombre: <?php echo $nom; ?></label></td>
                		<td><label style="font-size: 20px;">Fecha nacimiento: <?php echo $fecha; ?></label></td>
                		<td><label style="font-size: 20px;">Actividad laboral: <?php echo $actlabo; ?></label></td>
                	</tr>
                	<tr>
                		<td><label style="font-size: 20px;">Actividad Deportiva: <?php echo $actdep; ?></label></td>
                		<td><label style="font-size: 20px;">Estatura: <?php echo $est; ?></label></td>
                		<td><label style="font-size: 20px;">Peso: <?php echo $peso; ?></label></td>
                	</tr>
                		<tr>
                		<td><label style="font-size: 20px;">Grasa Total: <?php echo $Gtot; ?></label></td>
                		<td><label style="font-size: 20px;">Grasa sección superior: <?php echo $Gsup; ?></label></td>
                		<td><label style="font-size: 20px;">Grasa sección inferior: <?php echo $Ginf; ?></label></td>
                	</tr>
                		<tr>
                		<td><label style="font-size: 20px;">Masa muscular: <?php echo $muscular; ?></label></td>
                		<td><label style="font-size: 20px;">Agua: <?php echo $Agua; ?></label></td>
                		<td><label style="font-size: 20px;">Edad metabolica: <?php echo $edadmet; ?></label></td>
                	</tr>
                    </table>
	               <a href="Agregar-paciente.html" class="btn">Regresar</a>
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
