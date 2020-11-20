<?php 
require 'conexion.php';
$IdAlimento = $_GET['IdAlimento'];


$insertar = "DELETE FROM `alimentos` WHERE `IdAlimento` ='$IdAlimento'";

if(mysqli_query($mysqliConect, $insertar)){
  echo '<script language="javascript">alert("Registro eliminado correctamente");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}

?>	