<?php 
$mysqliConect=new mysqli('localhost','root','','clinica');
if (!$mysqliConect) {
    echo "Error al conectar a la base de datos";
}
$IdTerapia = $_GET['IdTerapia'];


$insertar = "DELETE FROM `terapia` WHERE `IdTerapia` ='$IdTerapia'";

if(mysqli_query($mysqliConect, $insertar)){
  echo '<script language="javascript">alert("Registro eliminado correctamente");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}

?>	