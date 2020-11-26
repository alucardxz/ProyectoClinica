<?php 
require 'conexion.php';

	$IdPaciente=$_POST['IdPaciente'];
	$Nombre = $_POST['Nombre'];
	$Escolaridad = $_POST['Escolaridad'];
	$Genero = $_POST['Genero'];
	$Fechanac = $_POST['Fecha-nac'];
	$Estado = $_POST['edo'];
	$Ciudad = $_POST['ciudad'];
	$Direccion = $_POST['Dire'];
	$Telefono = $_POST['tel'];
    $email = $_POST['correo'];
    $Actlabo = $_POST['act-labo'];
    $Descripcion = $_POST['desc-lab'];
    $Vegetariano = $_POST['Vegetariano'];
    $Nivelestres = $_POST['niv-est'];
    $Actdepor = $_POST['act-dep'];
    $Motivoconsu=$_POST['mot-consul'];
    $Sangre = $_POST['Sangre'];
    $Patologias = $_POST['patologias'];	
    $Antecedentes = $_POST['antecedentes'];
    $Cirugias = $_POST['cirugias'];
    $Alergia = $_POST['alergia'];
    $Vacunas = $_POST['vacunas'];
    $Cigarro = $_POST['Cigarro'];
    $Alcohol = $_POST['Alcohol'];
    $Drogas = $_POST['Drogas'];
    $Frecuenciac = $_POST['Frecuenciac'];
	$Frecuenciaa = $_POST['Frecuenciaa'];
	$Frecuenciad = $_POST['Frecuenciad'];
    $Cantidadc = $_POST['cantidad-ciga'];
    $Cantidada = $_POST['cantidad-alco'];
    $Cantidadd = $_POST['cantidad-dro'];
    $Estatura = $_POST['Estatura'];
    $Peso = $_POST['peso'];
    $Factoracti = $_POST['fac-act'];
    $Grasatot = $_POST['grasa-tot'];
    $Grasasup = $_POST['grasa-sup'];
    $Grasainf = $_POST['grasa-inf'];
    $Grasavis = $_POST['grasa-vis'];
    $Libregrasa=$_POST['libre-grasa'];
    $Masamus=$_POST['masa-mus'];
    $Pesoos=$_POST['peso-os'];
    $Aguacorp = $_POST['agua-corp'];
    $Edadmet = $_POST['edad-met'];

$insertar= "UPDATE `pacientes` SET `Nombre` = '$Nombre', `Escolaridad` = '$Escolaridad', `Genero` = '$Genero', `Fechanac` = '$Fechanac', `Estado` = '$Estado', `Ciudad` = '$Ciudad', `Direccion` = '$Direccion', `Telefono` = '$Telefono', `email` = '$email', `Actlabo` = '$Actlabo', `Descripcion` = '$Descripcion', `Vegetariano` = '$Vegetariano', `Nivelestres` = '$Nivelestres', `Actdepor` = '$Actdepor', `Motivoconsu` = '$Motivoconsu', `Sangre` = '$Sangre', `Patologias` = '$Patologias', `Antecedentes` = '$Patologias', `Cirugias` = '$Cirugias', `Alergia` = '$Alergia', `Vacunas` = '$Vacunas', `Cigarro` = '$Cigarro', `Alcohol` = '$Alcohol', `Drogas` = '$Drogas', `Frecuenciac` = '$Frecuenciac', `Frecuenciaa` = '$Frecuenciaa', `Frecuenciad` = '$Frecuenciad', `Cantidadc` = '$Cantidadc', `Cantidada` = '$Cantidada', `Cantidadd` = '$Cantidadd', `Estatura` = '$Estatura', `Peso` = '$Peso', `Factoracti` = '$Factoracti', `Grasatot` = '$Grasatot', `Grasasup` = '$Grasasup', `Grasainf` = '$Grasainf', `Grasavis` = '$Grasavis', `Libregrasa` = '$Libregrasa', `Masamus` = '$Masamus', `Pesoos` = '$Pesoos', `Aguacorp` = '$Aguacorp', `Edadmet` = '$Edadmet'  WHERE `pacientes`.`IdPaciente` = '$IdPaciente'";


if(mysqli_query($mysqliConect, $insertar)){
  echo '<script language="javascript">alert("Registro actualizado correctamente");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}
?>	