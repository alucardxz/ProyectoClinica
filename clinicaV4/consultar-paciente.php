
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="header.js"></script>
</head>
<body >
    <header class="">
        <div class="wrapper">
            <div class="logo">
                <h3>Clínica de Nutrición Yin-Yiao</h3>
            </div>
            <nav>
                <a href="inicio.html">Inicio</a>
                <a href="registrar-us.html">Regístrate</a>
            </nav>
        </div>
    </header>
    <center>
        <form name="consultar-paciente" method="POST" class="contenido" action="consulta-pacientes.php">
            <div class="borde-redondeado">
                <h2 class="let" style="margin: 20px;">Consultar Paciente</h2>
                <div class="linea"></div>
                <section class="personal">
                    <table class="tab-datos">
                        <tr>
                            <td><label>Buscar: </label></td>
                            <td><input class=" txt" type="text" id="busqueda" name="busqueda" placeholder="Buscar" required /></td>
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