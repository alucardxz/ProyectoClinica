<?php 
require 'conexion.php';

    $IdAlimento =$_POST['IdAlimento'];
    $Alimento = $_POST['Alimento'];
    $Categoria = $_POST['Categoria'];
    $Cantidad = $_POST['Cantidad'];
    $Unidad = $_POST['Unidad'];
    $Pesobruto = $_POST['Pesobruto'];
    $Pesoneto = $_POST['Pesoneto'];
    $Energia = $_POST['Energia'];
    $Proteina = $_POST['Proteina'];
    $Lipidos = $_POST['Lipidos'];
    $Hidratos = $_POST['Hidratos'];
    $Fibra = $_POST['Fibra'];
    $VitaminaA = $_POST['VitaminaA'];
    $AcidoAs = $_POST['AcidoAs'];
    $AcidoFo = $_POST['AcidoFo'];
    $Hierro = $_POST['Hierro'];
    $Potasio = $_POST['Potasio'];
    $Agua = $_POST['Agua'];
    $Indice = $_POST['Indice'];
    $Carga = $_POST['Carga'];

$insertar= "UPDATE `alimentos` SET `Alimento` = '$Alimento', `Categoria` = '$Categoria', `Cantidad` = '$Cantidad', `Unidad` = '$Unidad', `Pesobruto` = '$Pesobruto', `Pesoneto` = '$Pesoneto', `Energia` = '$Energia', `Proteina` = '$Proteina', `Lipidos` = '$Lipidos', `Hidratos` = '$Hidratos', `Fibra` = '$Fibra', `VitaminaA` = 'VitaminaA', `AcidoAs` = '$AcidoAs', `AcidoFo` = '$AcidoFo', `Hierro` = '$Hierro', `Potasio` = '$Potasio', `Agua` = '$Agua', `Indice` = '$Indice', `Carga` = '$Carga' WHERE `alimentos`.`IdAlimento` = '$IdAlimento'";

echo $IdAlimento;

    if(mysqli_query($mysqliConect, $insertar)){
  echo '<script language="javascript">alert("Registro actualizado correctamente");</script>';
}else{
    echo '<script language="javascript">alert("Error al guardar datos");</script>';
}

?>  