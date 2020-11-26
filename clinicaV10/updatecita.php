<?php 
require 'conexion.php';
$IdCita = $_POST['IdCita'];
$Nombre = $_POST['Nombre'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$servicio = $_POST['servicio'];
 echo $IdCita;

$insertar = "UPDATE citas SET IdCita='$IdCita', Nombre='$Nombre',tel='$tel', email='$email', fecha='$fecha',hora='$hora',servicio='$servicio' WHERE fecha='$fecha'";

if(mysqli_query($mysqliConect, $insertar)){
    echo '<script language="javascript">alert("Cita guardado correctamente");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}

echo $insertar;
?>	