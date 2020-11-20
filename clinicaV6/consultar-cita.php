  <!DOCTYPE html>

  <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/header.js"></script>

</head>


<body>

    <header class="">

        <div class="wrapper">

            <div class="logo">
                <h3>Clínica de Nutrición Yin-Yiao</h3>
            </div>
            <nav>
                <a href="loggin-consul.html">Iniciar Sesión</a>
                <a href="ConsultaMed.html">Regístrate</a>
            </nav>
        </div>
    </header>
</div>
<center>
 <form name="consultar-cita" method="POST" class="contenido" action="mostrar-consul.php">
    <div class="borde-redondeado">
        <h2 class="let" style="margin: 20px;">Consultar Cita</h2>
        <div class="linea"></div>
        <section class="personal">
            <table class="tab-datos">
                <tr>
                    <td><label>Buscar: </label></td>
                    <td><input class=" txt" type="date" id="busqueda" name="busqueda" placeholder="Buscar" required value="<?php $busqueda?>" /></td>
                    <td><input class="btn" type="submit" name="" value="Buscar"></td>
                </tr>
            </table>
        </section>
    </div>  
</form>
</center>

<footer>

    <!--derechos-->
    <div class="final">
        <div class="derechos">
            @2020 Todos los Derechos Reservados
        </div>
        <div class="informacion">
            Información Compañia | Política y Privacidad | Términos y Condiciones
        </div>
    </div>
</footer>

</body>
</html>
