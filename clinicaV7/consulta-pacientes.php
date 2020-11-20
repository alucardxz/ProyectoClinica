<?php
$table = 'pacientes';
$la_bd= 'clinica';
$Nombre=$_POST['busqueda'];
$db = mysqli_connect('localhost','root','');
if (!mysqli_select_db($db,$la_bd)) {
    die("<h2>Error</h2>");
}

$sql = "SELECT * FROM $table WHERE Nombre = '$Nombre';";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_row($result);
if ( $row > 1) {
    echo '<script language="javascript">alert("Paciente encontrado satisfactoriamente");</script>';
}else {
    die('<script language="javascript">alert("Paciente no encontrado ");</script>');
}
mysqli_close($db);

?>


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
        <form name="consultar-paciente" method="POST" class="contenido" action="consulta-paciente.php">
            <div class="borde-redondeado">
                <h2 class="let" style="margin: 20px;">Consultar Paciente</h2>
                <div class="linea"></div>
                <section class="personal">


</section>
                    <div>
                      <table style="width: 90%;" class="table">
                          <thead class="table table-striped table-dark">
                            <tr>
                                <th scope="col">#</th>
                              <th scope="col">Id Paciente</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Dirección</th>
                              <th scope="col">Ciudad</th>
                              <th scope="col">Telefono</th>
                              <th scope="col">email</th>
                              <th scope="col">Peso</th>
                              <th scope="col">Estatura</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo $row[0]?> </td>
                          <td><?php echo $row[1]?> </td>
                          <td><?php echo $row[7]?></td>
                          <td><?php echo $row[6]?></td>
                          <td><?php echo $row[8]?></td>
                          <td><?php echo $row[9]?> </td>
                          <td><?php echo $row[32]?> </td>
                          <td><?php echo $row[31]?> </td>
                      </tr>
                  </tbody>
              </table>

  </div>
</div>  
</form>
</center>
<footer>
    <div class="C-footer">
        <!---Columna 1--->
        <div class="col1">
            <h1>Más información.</h1>
            <p>
                La Clínica de Nutrición Yin-Yiao se ubica en Colima México, es atendida por la licenciada en Nutrición Erica Liliana Valencia Ramírez. Además de ofrecer citas para control de peso y enfermedades se prestan los servicios de Maderoterapía y acupuntura 
            </p>
        </div>
        <!---Columna 2--->
        <div class="col2">
            <h1>Redes Sociales</h1>
            <div class="row">
                <img src="img/facebook.png" />
                <label>Siguenos en Facebook</label>
            </div>
            <div class="row">
                <img src="img/instagram.png" />
                <label>Siguenos en Instagram</label>
            </div>
            <div class="row">
                <img src="img/twitter.png" />
                <label>Siguenos en Twitter</label>
            </div>
        </div>
        <!---Columna 3--->
        <div class="col3">
            <h1>Información Contactos</h1>
            <div class="row2">
                <br><br>
                <img src="img/house.png" />
                <label>
                    Maclovio Herrera #188B
                    <br>
                    Jardines de la corregidora 
                    Colima, Colima.
                </label>
            </div>
            <div class="row2">
                <img src="img/tel.png" />
                <label>312 330 9587</label>
            </div>
            <div class="row2">
                <img src="img/contact.png" />
                <label>erica_conc@hotmail.com</label>
            </div>
        </div>
    </div>
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