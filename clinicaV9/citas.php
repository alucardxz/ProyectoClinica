<?php 
require 'conexion.php';


$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$servicio = $_POST['servicio'];


$insertar= "INSERT INTO `citas` (`IdCita`, `Nombre`, `Telefono`, `email`, `Fecha`, `Hora`, `Servicio`) VALUES (NULL, NULL, NULL, NULL, '$fecha', '$hora', '$servicio')";

if(mysqli_query($mysqliConect, $insertar)){
    echo '<script language="javascript">alert("Cita guardado correctamente");</script>';
}else{
    echo "Error al guardar Datos";
}
?>

