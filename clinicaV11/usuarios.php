<html>
<head>
	<meta http-equiv="refresh" content="0.1,url=index.php">
</head>
<?php 

include 'conexion.php'
$Nombre =$_POST['Nombre'];
$email=$_POST['email'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$insertar = "INSERT INTO `usuarios` (`IdUsuario`, `Nombre`, `email`, `usuario`, `password`, `IdPaciente`, `IdTipo`) VALUES (NULL, '$Nombre', '$email', '$usuario', '$password', NULL, NULL)";
$validarcorreo=mysqli_query($mysqliConect,"SELECT * FROM usuarios WHERE email='$email'");
if (mysqli_num_rows($validarcorreo)>0) {
	echo '
	<script>
		alert("Este correo ya esta registrado");
		window.location="index.php";
	</script>';
	exit();
}
$validarusuario=mysqli_query($mysqliConect,"SELECT * FROM usuarios WHERE usuario='$usuario'");
if (mysqli_num_rows($validarusuario)>0) {
	echo '
	<script>
		alert("Este usuario ya esta registrado");
		window.location="index.php";
	</script>';
	exit();
}

 if(mysqli_query($mysqliConect, $insertar)){
        echo '<script language="javascript">alert("Registro exitoso");</script>';
    }else{
        echo '<script language="javascript">alert("Error al registrar");</script>';
    }

?> 
</html>