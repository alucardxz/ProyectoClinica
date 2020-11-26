<html>
<head>
	<meta http-equiv="refresh" content="0.1,url=login.html">
</head>
<?php
	require 'conexion.php';
	$table = 'usuarios';
	$la_bd = 'clinica';
	$db = mysql_connect("localhost","root","12345");
	$emailRecibido = $_POST['email'];
	$administrador = 'administrador@gmail.com';
	$password = $_POST['pass'];
	$sql = '';
	if(!mysql_select_db($la_bd,$db)){
		die("<h2>Error</h2>");
	}
	$sql = "SELECT email, password FROM $table WHERE email = '$emailRecibido'";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);
	if(count($row)<2){
		die ('<script language="javascript">alert("Contraseña o correo incorrecto");</script>');
	}
	$email = $row['0'];
	$hash = $row['1'];
	if (!password_verify($password, $hash)) {
		die ('<script language="javascript">alert("Contraseña o correo incorrecto");</script>');	
	}
	else{	
		echo '<script language="javascript">alert("Acceso correcto");</script>';
		if( $emailRecibido == $administrador ){
		echo '<head>
				<meta http-equiv="refresh" content="0.1,url=access/index_admon.html">
			</head>';
		}
		else{
			echo '<head>
				<meta http-equiv="refresh" content="0.1,url=access/index_user.html">
			</head>';
		}
	}

mysql_close();
?>