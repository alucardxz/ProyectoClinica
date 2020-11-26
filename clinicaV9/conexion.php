<?php 

$mysqliConect=new mysqli('localhost','root','','clinica');
if (!$mysqliConect) {
    echo '<script language="javascript">alert("Error al concetar la Base de datos");</script>';
}

?> 
