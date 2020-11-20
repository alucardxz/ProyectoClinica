<?php 
require 'conexion.php';
$IdProducto = $_GET['IdProducto'];


$insertar = "DELETE FROM `productos` WHERE `IdProducto` ='$IdProducto'";

if(mysqli_query($mysqliConect, $insertar)){
  echo '<script language="javascript">alert("Registro eliminado correctamente");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}

?>	