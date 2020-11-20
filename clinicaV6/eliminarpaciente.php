<?php 
$mysqliConect=new mysqli('localhost','root','','clinica');
if (!$mysqliConect) {
    echo "Error al conectar a la base de datos";
}
$IdPaciente = $_GET['IdPaciente'];


$insertar = "DELETE FROM `pacientes` WHERE `IdPaciente` ='$IdPaciente'";

if(mysqli_query($mysqliConect, $insertar)){
  echo '<script language="javascript">alert("Registro eliminado correctamente");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}

?>  