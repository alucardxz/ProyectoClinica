<?php 
$mysqliConect=new mysqli('localhost','root','','clinica');
if (!$mysqliConect) {
    echo "Error al conectar a la base de datos";
}
    $ali = $_POST['alimento'];
    $cate = $_POST['categoria'];
    $cant = $_POST['cantidad'];
    $uni = $_POST['unidad'];
    $pesob = $_POST['p-bruto'];
    $peson = $_POST['p-neto'];
    $ener = $_POST['energia'];
    $pro = $_POST['proteina'];
    $lipi = $_POST['lipidos'];
    $hidra = $_POST['hidratos'];
    $fibra = $_POST['fibra'];
    $vitam = $_POST['vitamina'];
    $acias = $_POST['acido-as'];
    $acifo = $_POST['acido-fo'];
    $hie = $_POST['hierro'];
    $pot = $_POST['potasio'];
    $agua = $_POST['agua'];
    $ind = $_POST['indice'];
    $car = $_POST['carga'];


$insertar= "INSERT INTO `alimentos` (`Id-alimento`, `Alimento`, `Categoria`, `Cantidad`, `Unidad`, `P-bruto`, `P-neto`, `Energia`, `Proteina`, `Lipidos`, `Hidratos`, `Fibra`, `Vitamina-a`, `Acido-as`, `Acido-fo`, `Hierro`, `Potasio`, `Agua`, `Indice`, `Carga`) VALUES(NULL, '$ali', '$cate', '$cant', '$uni', '$pesob', '$peson', '$ener', '$pro', '$lipi', '$hidra', '$fibra', '$vitam', '$acias', '$acifo', '$hie', '$pot', '$pot', '$ind', '$car')";

    if(mysqli_query($mysqliConect, $insertar)){
        echo '<script language="javascript">alert("Alimento guardado correctamente");</script>';
    }else{
        echo "Error al guardar Datos";
    }
 ?>