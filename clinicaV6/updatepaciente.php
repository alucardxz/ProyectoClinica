<?php 
$mysqliConect=new mysqli('localhost','root','','clinica');
if (!$mysqliConect) {
    echo "Error al conectar a la base de datos";
}
	$IdPaciente=$_POST['IdPaciente'];
	$Nombre = $_POST['Nombre'];
	$esco = $_POST['escolaridad'];
	$gen = $_POST['Genero'];
	$fecha = $_POST['Fecha-nac'];
	$est = $_POST['edo'];
	$cd = $_POST['ciudad'];
	$Dir = $_POST['Dire'];
	$cel = $_POST['tel'];
    $email = $_POST['correo'];
    $actlabo = $_POST['act-labo'];
    $deslab = $_POST['desc-lab'];
    $vege = $_POST['Vegetariano'];
    $nivest = $_POST['niv-est'];
    $actdep = $_POST['act-dep'];
    $motivo=$_POST['mot-consul'];
    $sangre = $_POST['Sangre'];
    $patologias = $_POST['patologias'];	
    $antecedentes = $_POST['antecedentes'];
    $cirugias = $_POST['cirugias'];
    $alergia = $_POST['alergia'];
    $vacunas = $_POST['vacunas'];
    $Cigarro = $_POST['Cigarro'];
    $frecC = $_POST['Frecuencia-c'];
    $cantc = $_POST['cantidad-ciga'];
    $Alcohol = $_POST['Alcohol'];
    $Frecuenciaa = $_POST['Frecuencia-a'];
    $canta = $_POST['cantidad-alco'];
    $Drogas = $_POST['Drogas'];
    $Frecuenciad = $_POST['Frecuencia-d'];
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

$insertar="UPDATE `pacientes` SET `Nombre` = '$Nombre', `Escolaridad` = '$esco', `Genero` = '$Genero', `Fecha-nac` = '$fecha', `Estado` = '$est', `Ciudad` = '$cd', `Direccion` = '$Dir', `Telefono` = '$cel', `email` = '$email', `Act-labo` = '$actlabo', `Descripcion` = '$deslab', `Vegetariano` = '$vege', `Nivel-estres` = '$nivest', `Act-depor` = '$actdep', `Motivo-consu` = '$motivo', `Sangre` = '$sangre', `Patologias` = '$patologias', `Antecedentes` = '$antecedentes', `Cirugias` = '$cirugias', `Alergia` = '$alergia', `Vacunas` = '$vacunas', `Cigarro` = '$Cigarro', `Alcohol` = '$Alcohol', `Drogas` = '$Drogas', `Frecuencia-c` = '$Frecuencia-c', `Frecuencia-a` = '$Frecuencia-a', `Frecuencia-d` = '$Frecuenciad', `Cantidad-c` = '$cantc', `Cantidad-a` = '$canta', `Cantidad-d` = '$cantd', `Estatura` = '$Estatura', `Peso` = '$peso', `Factor-acti` = '$factoract', `Grasa-tot` = '$Gtot', `Grasa-sup` = '$Gsup', `Grasa-inf` = '$Ginf', `Grasa-vis` = '$Gvis', `Libre-grasa` = '$libreg', `Masa-mus` = '$muscular', `Peso-os` = '$oseo', `Agua-corp` = '$Agua', 'Edad-met'='$edadmet' WHERE `pacientes`.`IdPaciente` = '$IdPaciente'";

echo $IdPaciente;
echo $Nombre;

if(mysqli_query($mysqliConect, $insertar)){
  echo '<script language="javascript">alert("Registro actualizado correctamente");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}


?>	