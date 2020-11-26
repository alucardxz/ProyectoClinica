 <?php
 require 'conexionUs.php';

 $errors=array();
 if (!empty($_POST)) {
    # code...
 }
 ?>

 <!DOCTYPE html>

 <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
 <head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="iniciar.js"></script>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
</head>

<body >
    <div class="contenedor">

        <form class="formulario" method="POST" action="registrarse.php" autocomplete="off" onsubmit="return validar();">
            <span class="">
                <h2>Crear Usuario</h2>
            </span>
            <div class="wrap-input100 validate-input" data-validate = "Nombre es requerido">
                <input class="" type="text" name="nombre" placeholder="Nombre" autofocus="on">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>
                    <div class="wrap-input100 validate-input" data-validate = "Campo requerido">
                <input class="" type="text" name="Usuario" placeholder="Usuario" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Telefono es requerido">
                <input class="" type="text" name="telefono" placeholder="Telefono" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Email valido requerido ej: ex@abc.xyz">
                <input class="" type="text" name="email" placeholder="Email" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Contraseña es requerida">
                <input class="" type="password" name="pass" placeholder="Contraseña" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Contraseña es requerida">
                <input class="" type="password" name="conpass" placeholder="Confirmar contraseña" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>

            <div class="container-login100-form-btn">
                <input type="submit" value="Regístrate">
                  
            </div>

            
            <!-- cierre de formulario principal -->
        </form>
        <div class="reset-password">
            <a href="#">Olvide mi Contraseña?</a>
        </div>
    </div>


    <footer>

        <!--derechos-->
        <div class="final">
            <div class="derechos">
                @2020 Todos los Derechos Reservados Clínica de Nutrición Yin-Yiao
            </div>
            <div class="informacion">
                Información Compañia | Política y Privacidad | Términos y Condiciones
            </div>
        </div>
    </footer>

</body>
</html>