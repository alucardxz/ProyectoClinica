<?php

$table = 'pacientes';
$la_bd= 'clinica';
$Nombre=$_POST['busqueda'];
$db = mysqli_connect('localhost','root','');
if (!mysqli_select_db($db,$la_bd)) {
    die("<h2>Error</h2>");
}
$sql = "SELECT * FROM $table WHERE Nombre = '$Nombre';";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_row($result);
if ($row> 1) {
    echo '<script language="javascript">alert("Registro encontrado satisfactoriamente");</script>';
}                              
?>
