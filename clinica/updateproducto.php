<?php 
require 'conexion.php';

  $IdProducto=$_POST['IdProducto'];
  $Producto = $_POST['Producto'];
  $Descripcion = $_POST['Descripcion'];
  $Precli = $_POST['Precli'];
  $Existencia = $_POST['Existencia'];
  $Proveedor = $_POST['Proveedor'];
  $Tamaño = $_POST['Tamaño'];
  $Prepro = $_POST['Prepro']; 

$insertar="UPDATE `productos` SET `Producto` = '$Producto', `Tamaño` = '$Tamaño', `Descripcion` = '$Descripcion', `Existencia` = '$Existencia', `Prepro` = '$Prepro', `Precli` = '$Precli', `Proveedor` = '$Proveedor' WHERE `productos`.`IdProducto` = '$IdProducto'";

if(mysqli_query($mysqliConect, $insertar)){
  echo '<script language="javascript">alert("Registro actualizado correctamente");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}

?>  