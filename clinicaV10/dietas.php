<?php
require 'conexion.php';
	$IdPaciente=$_POST['IdPaciente'];
	$Peso = $_POST['Peso'];
    $Factoracti = $_POST['Factoracti'];
    $Grasatot = $_POST['Grasatot'];
    $Grasasup = $_POST['Grasasup'];
    $Grasainf = $_POST['Grasainf'];
    $Grasavis = $_POST['Grasavis'];
    $Libregrasa=$_POST['Libregrasa'];
    $Masamus=$_POST['Masamus'];
    $Pesoos=$_POST['Pesoos'];
    $Aguacorp= $_POST['Aguacorp'];
    $Edadmet = $_POST['Edadmet'];

    $Kcal=$_POST['Kcal'];
    $Dieta=$_POST['Dieta'];
    $Tipo=$_POST['Tipodieta'];


$insertar="INSERT INTO `dietas` (`IdDieta`, `Dieta`, `Kcal`, `Tipodieta`, `IdPaciente`, `IdCita`) VALUES (NULL, '$Dieta', '$Kcal', '$Tipo', '$IdPaciente', NULL)";



if(mysqli_query($mysqliConect, $insertar)){
  echo '<script language="javascript">alert("Dieta guardada correctamente");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}


$actualizar= "UPDATE `pacientes` SET `Peso` = '$Peso', `Factoracti` = '$Factoracti', `Grasatot` = '$Grasatot', `Grasasup` = '$Grasasup', `Grasainf` = '$Grasainf', `Grasavis` = '$Grasavis', `Libregrasa` = '$Libregrasa', `Masamus` = '$Masamus', `Pesoos` = '$Pesoos', `Aguacorp` = '$Aguacorp', `Edadmet` = '$Edadmet' WHERE `pacientes`.`IdPaciente` = '$IdPaciente'";
echo $Peso;

if(mysqli_query($mysqliConect, $actualizar)){
  echo '<script language="javascript">alert("Registro actualizado correctamente");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}

?>