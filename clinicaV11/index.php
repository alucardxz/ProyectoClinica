<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clinica de Nutricion Yin Yiao</title>
	<link rel="stylesheet"  href="assets/css/estilos.css">
	
</head>
<body>
	<main>
		<div class="contenedor">
			<div class="cajatrasera">
				<div class="cajalogin">
					<h3>¿Ya tienes cuenta?</h3>
					<p>Inicia sesión para consultar tu perfil</p>
					<button id="iniciarS">Iniciar Sesión</button>
				</div>
				<div class="cajaRegis">
					<h3>¿Aun no tienes cuenta?</h3>
					<p>Regístrate para que puedas iniciar sesión</p>
					<button id="registrate">Regístrarse</button>
				</div>

			</div>
			<div class="contenedorLogReg">
				<form method="POST" action="iniciarsesion.php" class="formulariologin">
					<h2>Iniciar Sesión</h2>
					<input name="email" type="email" placeholder="Correo Electronico" name="">
					<input name="password" type="password" placeholder="Contresaña" name="" minlength="8">
					<button>Entrar</button>
				</form>
				<form method="POST" action="usuarios.php" class="formularioregistro">
					<h2>Regístrarse</h2>
					<input name="Nombre" type="text" placeholder="Nombre Completo" name="" maxlength="80">
					<input name="email" type="email" placeholder="Correo Electronico" name="">
					<input name="usuario" type="text" placeholder="Usuario">
					<input name="password" type="password" placeholder="Contraseña" name="" minlength="8">
					<button id="">Registrate</button>

				</form>
			</div>
		</div>
	</main>
</body>
<script src="assets/js/script.js"></script>
</html>