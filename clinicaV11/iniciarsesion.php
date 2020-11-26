<?php 
include 'conexion.php';

$email=$_POST['email'];
$password=$_POST['password'];

$admin=mysqli_query($conexion,"SELECT * FROM usuarios WHERE 'dannytapia77@gmail.com'='$email' and 'DannyTapia77'='$password'")

if (mysqli_num_rows($admin)>0) {
	header("location: principal.html");
	exit;
}else {
	$validar=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' and password='$password'");
	if (mysqli_num_rows($validar)>0) {
		header("location: indexUs.html");
	}else{
		echo '<script>
		alert ("Usuario no econtrado");
		window.location="../index.php";
		</script>
		';
	}
}


?>