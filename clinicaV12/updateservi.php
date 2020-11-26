<?php 
require 'conexion.php';
$IdTerapia = $_POST['IdTerapia'];
$Terapia = $_POST['Terapia'];
$Beneficios = $_POST['Beneficios'];
$Descripcion = $_POST['Descripcion'];
$Duracion = $_POST['Duracion'];
$Precio = $_POST['Precio'];

$insertar = "UPDATE `terapia` SET `Terapia` = '$Terapia', `Beneficios` = '$Beneficios', `Descripcion` = '$Descripcion', `Duracion` = '$Duracion', `Precio` = '$Precio' WHERE `IdTerapia` ='$IdTerapia'";


if(mysqli_query($mysqliConect, $insertar)){
  echo '<script language="javascript">alert("");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}
?>