<html>
<head>
	<meta http-equiv="refresh" content="0.1,url=index.html">
</head>
<?php
	require 'conexion.php';
	$table = 'usuarios';
	$la_bd = 'clinica';
	$db = mysql_connect("localhost","root","12345");
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$enfermedades = $_POST['enfermedades'];
	$alergia = $_POST['alergia'];

	$sql = '';
	$password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
	$confpass = password_hash($_POST['pass'], PASSWORD_BCRYPT);;
	$sexo = $_POST['sexo'];
	if(!mysql_select_db($la_bd,$db)){
	die("<h2>Error</h2>");
}
	if($_POST['pass']!=$_POST['conpass']){
		echo '<script language="javascript">alert("Error. Las contraseñas no coinciden");</script>';
		die( '<html>
<head>
	<meta http-equiv="refresh" content="0.1,url=registrarse.html">
</head>');
	}
	else{
		
		$sql = "INSERT INTO $table (id, nombre, apellidos, email, password, sexo, telefono, enfermedades, alergia) VALUES (NULL, '$nombre', '$apellidos', '$email', '$password', '$sexo', '$telefono', '$enfermedades', '$alergia');";
	}
	$result = mysql_query($sql);
	if($result != 0) {
	echo '<script language="javascript">alert("Registro realizado satisfactoriamente");</script>';
}
else{
	echo '<script language="javascript">alert("Ha ocurrido un error");</script>';
}
mysql_close();

?>
</html>